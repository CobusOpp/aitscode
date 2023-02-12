<div>
    <div class="flex">
        {{--  <div class="flex-shrink-0 mr-4">
          <img class="w-10 h-10 rounded-full" src="{{ $comment->user->gravatar }}">
        </div>  --}}
        <div class="flex-grow">
            <div>
                <a href="#" class="font-bold text-gray-900 text-md dark:text-gray-50">{{ $comment->user->name }}</a>
            </div>
            <div class="flex-grow w-full mt-1">
                @if ($isEditing)
                    <form wire:submit.prevent="editComment">
                        <div>
                            <label for="comment" class="sr-only">Comment body</label>
                            <textarea id="comment" name="comment" rows="3"
                                      class="shadow-sm bg-slate-200 dark:bg-slate-400 block w-full focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md
                                        @error('editState.body') border-red-500 @enderror"
                                      placeholder="Edit..." wire:model.defer="editState.body"></textarea>
                            @error('editState.body')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 font-medium bg-blue-700 border border-transparent rounded-md shadow-sm text-slate-50 dark:text-slate-800 dark:bg-blue-500 hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Edit
                            </button>
                        </div>
                    </form>
                @else
                    <span class="text-gray-700 dark:text-gray-200">{!! $comment->presenter()->markdownBody() !!}</span>
                @endif
            </div>
            <div class="mt-2 space-x-2">
                <span class="font-medium text-gray-500 dark:text-gray-400">
                    {{ $comment->presenter()->relativeCreatedAt() }}
                </span><hr>
                @auth
                    @if ($comment->hasParent())
                        <button wire:click="$toggle('isReplying')" type="button" class="font-medium text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1 fill-slate-500 dark:fill-slate-300" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    @endif

                    @can ('update', $comment)
                        <button wire:click="$toggle('isEditing')" type="button" class="text-sm italic font-bold text-green-700 dark:text-green-500">
                            Edit
                        </button>
                    @endcan

                    @can ('destroy', $comment)
                        <button wire:click='openDeleteComment'
                            type="button"
                            class="text-sm italic font-bold text-red-700 dark:text-red-500"
                        >
                            Delete
                        </button>
                    @endcan
                @endauth
            </div>
        </div>
    </div>

    <div class="mt-6 ml-14">
        @if ($isReplying)
            <form wire:submit.prevent="postReply" class="my-4">
                <div>
                    <label for="comment" class="sr-only">Reply body</label>
                    <textarea id="comment" name="comment" rows="3"
                              class="p-2 marker:shadow-sm text-slate-900 font-semibold bg-slate-200 dark:bg-slate-400 block w-full focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md
                                        @error('replyState.body') border-red-500 @enderror"
                              placeholder="Reply..." wire:model.defer="replyState.body"></textarea>
                    @error('replyState.body')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between mt-3">
                    <button type="submit"
                            class="inline-flex items-center justify-center px-4 py-2 font-medium bg-blue-700 border border-transparent rounded-md shadow-sm text-slate-50 dark:text-slate-800 dark:bg-blue-500 hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Reply
                    </button>
                </div>
            </form>
        @endif

        @foreach ($comment->children as $child)
            <livewire:comment :comment="$child" :key="$child->id"/>
        @endforeach
    </div>
</div>
