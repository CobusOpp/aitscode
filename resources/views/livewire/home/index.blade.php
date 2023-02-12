<div>
    <header id="hero" class="h-full flex flex-col mb-8 justify-end bg-gradient-to-r from-[#8e94a4] dark:from-[#747C90] to-[#747C90] dark:to-[#444955] ">
        <div class="grid items-center justify-center md:grid-cols-3">
                <div class="px-20 pb-2 mx-auto my-auto md:w-full md:pb-6">
                    <img src="assets/img/aits.png" class="w-2/3 mx-auto md:w-full">
                </div>
                <div class="px-20 py-2 md:py-6 md:col-span-2">
                    <div class="w-full text-center">
                        <h1 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white md:text-6xl">Do you need a website?
                        </h1>
                        <div class="font-semibold leading-relaxed text-gray-900 dark:text-white md:text-2xl">Let us help you get your dream website online! No project is too big or too small...</div>
                        <button
                            class="px-8 py-2 mt-4 text-xl font-bold bg-blue-700 rounded text-slate-50 dark:text-slate-800 dark:bg-blue-500 hover:scale-125 hover:shadow-2xl"><a href="#contact">Get
                            started</a></button>
                    </div>
                </div>
            </div>
                <svg class="hero-waves" xmlns="http://www.w3.org/1000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="wave1 fill-[#5C6273] dark:fill-[#444955]">
                        <use xlink:href="#wave-path" x="50" y="3" />
                    </g>
                    <g class="wave2 fill-[#71798e]">
                        <use xlink:href="#wave-path" x="50" y="0" />
                    </g>
                    <g class="wave3 fill-slate-400 dark:fill-slate-800">
                        <use xlink:href="#wave-path" x="50" y="9"  />
                    </g>
                </svg>
        </header>

        <!-- Project section -->
        <section
         data-aos="fade-up"
         data-aos-duration="1500"
         id="project" class="container mx-auto mt-20">

            <div x-intersect="$el.classList.add('scale')" class="p-10 mx-auto border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">Completed Projects</h2>
                <div class="w-48 mb-6 border-b-4 border-blue-700 rounded dark:border-blue-500"></div>
            </div>
            <div class="grid gap-2 md:grid-cols-3 justify-items-center">
            @forelse ($projects as $project)
              <div class="w-full max-w-xs overflow-hidden transition duration-200 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
              <a href="{{ $project->domain }}" target="_blank" rel="noopener noreferrer">
                    <img class="object-cover w-full h-56" src="{{ asset('../storage/'.$project->proj_image) }}" alt="avatar">
                <div class="w-full mb-6 border-b-2 border-slate-700 dark:border-slate-200"></div>
                <div class="py-2 text-center">
                    {{-- <a href="{{ $project->domain }}" target="_blank" rel="noopener noreferrer" class="block text-lg font-bold text-gray-800 dark:text-white">{{ $project->domain }}</a> --}}
                    <p class="font-semibold text-gray-700 dark:text-gray-200">{{ $project->tech }}</p>
                    <hr>
                    <span class="text-gray-700 dark:text-gray-200">{{ $project->description }}</span>
                </div>
                </a>
                </div>
                {{ $projects->links('layouts.paginate') }}
            @empty
                 <h2 class="mt-5 font-sans text-3xl font-bold text-center">NO PROJECT YET...</h2>
            @endforelse
            </div>
            </div>

        </section>

        <!-- Blog section -->
        <section
         data-aos="fade-up"
         data-aos-duration="1500"
         id="blog" class="container mx-auto mt-20">

            <div x-intersect="$el.classList.add('scale')" class="p-10 mx-auto border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">Latest Blog Posts</h2>
                <div class="w-48 mb-6 border-b-4 border-blue-700 rounded dark:border-blue-500"></div>
            </div>
            <div class="grid gap-2 md:grid-cols-3 justify-items-center">
                @forelse($posts as $post)
                <div class="w-full max-w-xs overflow-hidden transition duration-200 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
                <a href="{{ route('show', $post) }}">
                @if($post->cover_image)
                    <img class="object-cover w-full " src="{{ asset('../storage/'.$post->cover_image) }}" alt="avatar">
                    @else
                    <img class="object-cover w-full h-56" src="assets/img/image.jpg" alt="avatar">
                @endif
                <div class="py-5 text-center">
                    <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{ $post->title }}</a>
                    <span class="text-sm text-gray-700 dark:text-gray-200">{{ $post->author->name }}</span>
                    <span class="text-sm text-gray-700 dark:text-gray-200">{{ $post->updated_at->format('d-M-Y') }}</span>
                </div>
                </a>
                </div>
                @empty
                <div>
                    <h2 class="mt-5 font-sans text-3xl font-bold text-center">NO BLOG POSTS YET...</h2>
                </div>
                @endforelse
            </div>
            </div>

        </section>

        <!-- Fun section -->
        <section
         data-aos="fade-up"
         data-aos-duration="1500"
         id="fun" class="container mx-auto mt-20">

            <div x-intersect="$el.classList.add('scale')" class="p-10 mx-auto border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl font-semibold text-center text-gray-900 dark:text-white">Some small projects<br> I completed while studying...</h2>
                <div class="w-48 mb-6 border-b-4 border-blue-700 rounded dark:border-blue-500"></div>
            </div>
            <div class="grid gap-2 md:grid-cols-3 justify-items-center">
                @foreach ($funs as $fun)
                <div class="w-full max-w-xs overflow-hidden transition duration-200 bg-white rounded-lg shadow hover:scale-105 dark:bg-gray-800">
                    <a href="{{ $fun->domain }}" target="_blank" rel="noopener noreferrer">
                    <img class="object-cover w-full h-56" src="{{ asset('../storage/'.$fun->fun_image) }}" alt="avatar">

                    <div class="py-5 text-center">
                      <span class=" block font-semibold text-gray-700 dark:text-gray-200">{{ $fun->description }}</span>
                    </div>
                    </a>
                  </div>
                @endforeach
            </div>
            </div>

        </section>

        <!-- Contact Form -->
        <section
         data-aos="fade-up"
         data-aos-duration="1500"
         id="contact" class="container mx-auto mt-20">
        <div x-intersect="$el.classList.add('scale')" class="p-10 mx-auto border border-gray-200 rounded-lg shadow-md backdrop-blur-sm bg-slate-200/30 dark:bg-gray-700/30 dark:border-gray-600">
         <div class="flex flex-col items-center justify-center">
        <h2 class="text-3xl font-semibold text-center text-gray-900 dark:text-white">Contact Us</h2>
        <div class="w-48 mb-6 border-b-4 border-blue-700 rounded dark:border-blue-500"></div>
        </div>
        <div class="grid max-w-screen-xl grid-cols-1 px-8 py-16 mx-auto md:gap-8 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 dark:text-gray-100 dark:border-slate-600">
        <div class="flex flex-col justify-between mb-4">
        <div class="space-y-2">
            <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
            <div class="text-lg dark:text-gray-400">Let us know in one of the forms what you are looking for. Add as much detail as possible. Alternatively, email us at:
            <p class="text-xl font-bold">info@aitscode.com</p>
            <h2 class="mt-3 font-semibold underline uppercase md:text-xl dark:text-gray-400">How to use the forms:</h2>
            <ul class="mt-1 ml-4 text-lg list-disc dark:text-gray-400">
                <li>Write us a message under the "General info" tab,
                or
                fill out the form under "I need a Website" tab.</li>
                <li>We will then respond with either the info you need or to assist with a quote.</li>
            </ul>
            </div>
        </div>
        </div>
        <div>
          <div class="bg-gray-100 dark:bg-gray-600 dark:text-gray-50 text-gray-800 rounded-md" x-data="{ selected: 'option-1' }">
            <nav class="bg-gray-300 dark:bg-gray-700 rounded-t-md">
                <ul class="flex">
                    <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100 dark:bg-gray-600 rounded-t-md': selected === 'option-1' }">
                      <a href="#option-1" x-on:click="selected = 'option-1'">General info</a>
                    </li>
                    <li class="px-4 py-2" x-bind:class="{ 'bg-gray-100 dark:bg-gray-600 rounded-t-md': selected === 'option-2' }">
                      <a href="#option-2" x-on:click="selected = 'option-2'">I need a Website</a>
                    </li>
                  </ul>
            </nav>

            <div x-show.transition.in.opacity.duration.750ms="selected === 'option-1'" class="p-4">
                <livewire:home.contact-form />
              </div>

              <div x-show.transition.in.opacity.duration.750ms="selected === 'option-2'" class="p-4">
                <livewire:home.contact-us />
              </div>
          </div>
        </div>
        </div>
        </div>
        </section>

        <style>
            .hero-waves {
                display: block;
                width: 100%;
                height: 60px;
                position: relative;
            }

            .wave1 use {
                -webkit-animation: move-forever1 10s linear infinite;
                animation: move-forever1 10s linear infinite;
                -webkit-animation-delay: -2s;
                animation-delay: -2s;
            }

            .wave2 use {
                -webkit-animation: move-forever2 8s linear infinite;
                animation: move-forever2 8s linear infinite;
                -webkit-animation-delay: -2s;
                animation-delay: -2s;
            }

            .wave3 use {
                -webkit-animation: move-forever3 6s linear infinite;
                animation: move-forever3 6s linear infinite;
                -webkit-animation-delay: -2s;
                animation-delay: -2s;
            }

            @-webkit-keyframes move-forever1 {
                0% {
                transform: translate(85px, 0%);
                }
                100% {
                transform: translate(-90px, 0%);
                }
            }

            @keyframes move-forever1 {
                0% {
                transform: translate(85px, 0%);
                }
                100% {
                transform: translate(-90px, 0%);
                }
            }
            @-webkit-keyframes move-forever2 {
                0% {
                transform: translate(-90px, 0%);
                }
                100% {
                transform: translate(85px, 0%);
                }
            }
            @keyframes move-forever2 {
                0% {
                transform: translate(-90px, 0%);
                }
                100% {
                transform: translate(85px, 0%);
                }
            }
            @-webkit-keyframes move-forever3 {
                0% {
                transform: translate(-90px, 0%);
                }
                100% {
                transform: translate(85px, 0%);
                }
            }
            @keyframes move-forever3 {
                0% {
                transform: translate(-90px, 0%);
                }
                100% {
                transform: translate(85px, 0%);
                }
            }

        </style>
</div>
