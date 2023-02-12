@if ($paginator->hasPages())
    <div class="flex items-center justify-between py-10">
        <div class=" w-full  flex items-center justify-between border-t border-gray-200 dark:border-gray-700 gap-0 md:gap-2">
          @if ($paginator->onFirstPage())
            <div class="flex items-center pt-3 text-gray-600 dark:text-gray-200  hover:text-indigo-700 cursor-pointer">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-sm ml-3 font-medium leading-none mr-2 md:mr-0">Previous</p>
            </div>
          @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex items-center pt-3 text-gray-600 dark:text-gray-200  hover:text-indigo-700 cursor-pointer">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-sm ml-3 font-medium leading-none ">Previous</p>
            </a>
          @endif


            <div class="sm:flex hidden">
            {{-- Pagination Elements --}}
              @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                  <span aria-disabled="true">
                    <span class="text-sm font-medium leading-none cursor-pointer text-gray-600 dark:text-gray-200  hover:text-indigo-700 dark:hover:text-indigo-400 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">{{ $element }}</span>
                  </span>
                @endif
            {{-- Array Of Links --}}
                @if (is_array($element))
                  @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                      <span aria-current="page">
                        <p class="text-sm font-medium leading-none cursor-pointer text-indigo-700 dark:text-indigo-400 border-t border-indigo-400 pt-3 mr-4 px-2">{{ $page }}</p>
                      </span>
                    @else
                      <a href="{{ $url }}" class="text-sm font-medium leading-none cursor-pointer text-gray-600 dark:text-gray-200  hover:text-indigo-700 dark:hover:text-indigo-400 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
                    @endif
                  @endforeach
                @endif
              @endforeach
            </div>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
              <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center pt-3 text-gray-600 dark:text-gray-200  hover:text-indigo-700 cursor-pointer" aria-label="{{ __('pagination.previous') }}">
                <p class="text-sm font-medium leading-none mr-3 ml-2 md:ml-0">Next</p>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </a>
            @else
              <div class="flex items-center pt-3 text-gray-600 dark:text-gray-200  hover:text-indigo-700 cursor-pointer">
                <p class="text-sm font-medium leading-none mr-3">Next</p>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
              </div>
            @endif
        </div>
    </div>
@endif





