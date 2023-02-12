<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactForm extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|string'
    ];

    public function submitForm()
    {
        $this->validate();


        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,

        );
        Mail::to('info@aitscode.com')->send(new ContactMail($data));

        $this->alert('success', 'Thank you for reaching out to us! We will contact you soon!', [
            'timer' => '5000',
            'toast' => true,
            'showCancelButton' => false,
            'showConfirmButton' => false,
            'position' => 'center'
        ]);

        $this->reset();

    }

    public function updated($name, $value)
    {
        $this->resetValidation($name);
        $this->resetErrorBag($name);
    }

    public function render()
    {
        return view('livewire.home.contact-form');
    }
}

