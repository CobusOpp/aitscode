<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Comment extends Component
{
    use AuthorizesRequests, LivewireAlert;

    public $comment;

    public $isReplying = false;

    public $replyState = [
        'body' => ''
    ];

    public $isEditing = false;

    public $editState = [
        'body' => ''
    ];

    protected $listeners = [
        'refresh' => '$refresh',
        'deleteComment'
    ];

    protected $validationAttributes = [
        'replyState.body' => 'reply'
    ];

    public function updatedIsEditing($isEditing)
    {
        if (! $isEditing) {
            return;
        }

        $this->editState = [
            'body' => $this->comment->body
        ];
    }

    public function editComment()
    {
        $this->authorize('update', $this->comment);

        $this->comment->update($this->editState);

        $this->alert('success', 'Message updated!', [
            'timer' => '5000',
            'toast' => true,
            'showCancelButton' => false,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);

        $this->isEditing = false;
    }

    public function openDeleteComment()
    {
        $this->alert('warning', 'Are you sure you want to delete this comment?', [
            'timer' => false,
            'toast' => true,
            'showCancelButton' => true,
            'showDenyButton' => true,
            'denyButtonText' => 'Delete',
            'onDenied' => 'deleteComment',
            'position' => 'center'
        ]);
    }

    public function deleteComment()
    {
        $this->authorize('destroy', $this->comment);

        $this->comment->delete();

        $this->alert('success', 'Message deleted!', [
            'timer' => '5000',
            'toast' => true,
            'showCancelButton' => false,
            'showConfirmButton' => false,
            'position' => 'top-right'
        ]);

        $this->emitUp('refresh');
    }

    public function postReply()
    {
        if (! $this->comment->hasParent()) {
            return;
        }

        $this->validate([
            'replyState.body' => 'required'
        ]);

        $reply = $this->comment->children()->make($this->replyState);
        $reply->user()->associate(auth()->user());
        $reply->commentable()->associate($this->comment->commentable);

        $reply->save();

        $this->replyState = [
            'body' => ''
        ];

        $this->isReplying = false;

        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
