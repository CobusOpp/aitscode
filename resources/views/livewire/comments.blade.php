<div class="w-full">
    <section>
    <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden dark:bg-slate-700">
        <div class="divide-y divide-gray-200">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg font-bold text-gray-900 underline dark:text-gray-200">Comments</h2>
                {{--  <p>{{ $comment->count() }}</p>  --}}
            </div>
             @guest
                <p class="px-4 py-2 font-semibold text-gray-700 dark:text-gray-200"><a href="{{ route('login') }}">Log in</a> to comment.</p>
            @endguest
            <div class="px-4 bg-gray-50 dark:bg-slate-700 sm:px-6">
            @auth
                <div class="flex mt-2">
                {{--  <div class="flex-shrink-0 mr-4">
                    <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar }}">
                </div>  --}}
                <div x-data="{ show: false }" class="flex-1 min-w-0">
                  <button class="font-semibold dark:text-slate-200" @click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }">Click to add comment</button>
                    <form x-show="show" wire:submit.prevent="postComment">
                        <div>
                            <label for="comment" class="sr-only">Comment body</label>
                            <textarea id="comment" name="comment" rows="3"
                                      class="p-2 text-slate-900 font-semibold shadow-sm bg-slate-200 dark:bg-slate-400 block w-full focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md
                                        @error('newCommentState.body') border-red-500 @enderror"
                                      placeholder="Have your say..." wire:model.defer="newCommentState.body"></textarea>
                            @error('newCommentState.body')
                                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 font-medium bg-blue-700 border border-transparent rounded-md shadow-sm text-slate-50 dark:text-slate-800 dark:bg-blue-500 hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endauth
        </div>
        </div>

        <div class="px-4 py-6 sm:px-6">
                <div class="space-y-8">
                    @if ($comments->isNotEmpty())
                        @foreach($comments as $comment)
                            <livewire:comment :comment="$comment" :key="$comment->id"/>
                        @endforeach
                        <div class="p-4 ">
                        {{ $comments->links('layouts.paginate') }}
                        </div>
                    @else
                        <p class="font-semibold text-center text-gray-700 dark:text-gray-200">No comments yet.</p>
                    @endif
                </div>
            </div>
    </div>
</section>

</div>
