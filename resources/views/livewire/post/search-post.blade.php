<div>
    <div class="w-full max-w-xs overflow-hidden transition duration-200 bg-white rounded dark:bg-gray-800">
    <x-input right-icon="search" class="dark:bg-gray-800 dark:text-slate-200" wire:model.debounce.300ms='search' placeholder="Search posts..." />
        @if ($search == "")
            <p class="hidden">Search posts</p>
        @else
            @if($posts->isEmpty())
            <p class="mt-2 ml-4 text-gray-700 dark:text-gray-200">No matching results found.</p>
        @else
            @foreach ($posts as $post)
                <a class="text-decoration-none" href="{{ route('show', $post) }}">
                <p class="mt-2 ml-4 text-gray-700 dark:text-gray-200">{{ $post->title}}</p>
                </a>
            @endforeach
            <div class="p-4">
            {{ $posts->links() }}
            </div>
            @endif
        @endif
    </div>
</div>
