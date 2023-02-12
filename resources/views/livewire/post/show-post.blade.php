<div>
    <section class="w-11/12 p-10 mx-auto mt-10 border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">

    <div class="container flex flex-wrap py-6 mx-auto">

        <!-- Posts Section -->
        <section class="flex flex-col items-center w-full px-3 mx-auto md:w-2/3">

            <article class="flex flex-col my-4 shadow">
                <!-- Article Image -->
                  @if ($post->cover_image)
                    <img class="rounded-t-lg" src="{{ asset('../storage/'.$post->cover_image) }}">
                  @else
                    <img class="rounded-t-lg" src="https://picsum.photos/1200/630">
                  @endif

                <div class="flex flex-col justify-start p-6 bg-white rounded-b-lg dark:bg-slate-700">
                    <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase dark:text-blue-500">{{ $post->category->name }}</a>
                    <p class="pb-4 text-3xl font-bold text-gray-800 dark:text-gray-200">{{ $post->title }}</p>
                    <p href="#" class="pb-3 text-sm text-gray-800 dark:text-gray-200">
                        By <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $post->author->name }}</span>, Published on {{ $post->updated_at->format('d-M-Y') }}
                    </p>
                    <p class="font-semibold text-gray-800 dark:text-slate-200"></p>
                    <div class="flex space-x-2">
                        @foreach ($post->tags as $tag)
                            <x-button xs primary rounded class="mb-6 uppercase bg-slate-500 hover:bg-slate-600">
                            {{ $tag->name }}
                            </x-button>
                        @endforeach
                    </div>
                    <span class="pb-6 text-gray-800 dark:text-gray-200">{!! ($post->body) !!}</span>
                <div class="flex ">
                <x-icon name="eye" class="text-gray-800 dark:text-gray-200 w-5 h-5 mt-0.5" />
                <div class="ml-2 mr-4 text-gray-800 dark:text-gray-200">{{ views($post)->count() }}</div>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="mx-auto addthis_inline_share_toolbox_fil7"></div>

                </div>
                </div>
                <div>
                </div>
            </article>

            <livewire:comments :model="$post"/>

        </section>
    </div>
    </section>




