<div>
   <section class="w-11/12 p-10 mx-auto mt-10 border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">

    <div class="text-center">
        <h1 class="text-xl font-bold text-gray-800 capitalize md:text-3xl lg:text-4xl dark:text-white">From the blog</h1>

        <p class="max-w-lg mx-auto mt-4 font-semibold text-gray-800 md:text-xl dark:text-white">
            Here you will find a collection of rants and tutorials from us and Guest bloggers...
        </p>
    </div>
    <div class="mx-4 mt-4">
      <x-dropdown class="overflow-hidden transition duration-200 bg-white rounded dark:bg-gray-800 text-slate-900">
        <x-slot name="trigger"><x-button label="Posts by Category"/></x-slot>
        <x-dropdown.item wire:click="toggleCategory('')" class="{{ ! $selectedCategory ? 'bg-blue-500 text-white' : '' }}">
         <span class="font-semibold">All</span>
        </x-dropdown.item>
         @foreach ($categories as $category)
              <x-dropdown.item wire:click="toggleCategory({{ $category->id }})" class="{{ $selectedCategory == $category->id ? 'bg-blue-500 text-white' : ''}}">
                  <span><strong>{{ $category->name }}</strong> {{ $category->posts->count() }}</span>
              </x-dropdown.item>
         @endforeach
      </x-dropdown>
      </div>
    <div class="grid md:grid-cols-6">
    <div class="flex mt-8 md:col-span-1">
        <livewire:post.search-post/>
    </div>

    <div class="container flex flex-wrap mx-auto md:col-span-5">
        <section class="flex flex-col items-center w-full px-3 mx-auto">
        <article class="flex flex-col my-4 shadow bg-slate-100 dark:bg-transparent">
        <div class="grid grid-cols-1 gap-2 mt-8 md:grid-cols-2">
        @forelse ($posts as $post)
            <div class="mx-2">
                <div class="relative">
                  @if($post->cover_image)
                    <img class="w-full rounded-lg " src="{{ asset('../storage/'.$post->cover_image) }}" alt="">
                  @else
                    <img class="w-full rounded-lg " src="assets/img/image.jpg" alt="">
                  @endif

                    <div class="absolute bottom-0 flex p-3 bg-white rounded dark:bg-gray-900">
                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700 dark:text-gray-200">{{ $post->author->name }}</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $post->updated_at->format('d-M-Y') }}</p>
                        </div>
                    </div>
                </div>

                <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
                    {{ $post->title }}
                </h1>
                <p class="font-semibold text-gray-800 dark:text-slate-200">{{ $post->category->name }}</p>
                <hr class="w-full my-6">

                <span class="text-sm text-gray-600 dark:text-gray-200">
                    {!! Str::limit(($post->body), 100, '....') !!}
                </span>
                <div class="flex ">
                <x-icon name="eye" class="text-gray-800 dark:text-gray-200 w-5 h-5 mt-0.5" />
                <div class="ml-2 text-gray-800 dark:text-gray-200">{{ views($post)->count() }}</div>
                </span>
                </div>
                <a href="{{ route('show', $post) }}" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">{{ __('Read more') }}</a>
            </div>

        @empty
            <div>
              <h2 class="mt-5 font-sans text-3xl font-bold text-center">NO BLOG POSTS YET...</h2>
            </div>
        @endforelse
        </div>
    </article>

    {{ $posts->links('layouts.paginate') }}

</section>
</div>

</div>
</section>
</div>
