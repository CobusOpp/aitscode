<nav x-data="{ isOpen: false }" class="fixed top-0 z-50 w-full transition duration-300 md:h-16 nav"
        :class="{ 'bg-transparent dark:bg-transparent drop-shadow-none': !scrolledFromTop, 'bg-gray-200  dark:bg-gray-600 drop-shadow opacity-95': scrolledFromTop }"
        >
  <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
    <div class="flex items-center justify-between">
      <div>
        <a class="text-2xl font-bold text-gray-800 transition-colors duration-300 transform dark:text-gray-200 lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="/">
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
               class="h-12 transition duration-200"
               :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }"
               viewBox="0 0 483.000000 394.000000"
               preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,394.000000) scale(0.100000,-0.100000)" class="fill-slate-800 dark:fill-slate-50">
              <path d="M532 2462 c-292 -812 -532 -1483 -532 -1490 0 -9 49 -12 208 -12
                l207 0 108 313 c392 1139 713 2055 718 2049 5 -6 540 -1576 737 -2164 40 -118
                72 -198 79 -198 7 0 13 3 13 8 0 4 27 183 59 397 l59 390 -385 1093 -386 1092
                -176 0 -176 0 -533 -1478z"/>
              <path d="M3980 3485 l0 -265 -175 0 -175 0 0 -33 c0 -32 2 -34 58 -50 39 -11
                73 -29 105 -58 46 -40 97 -121 97 -154 0 -11 11 -15 45 -15 l44 0 3 -752 c4
                -829 1 -793 68 -936 54 -116 177 -209 320 -242 67 -16 228 -16 295 0 54 12
                165 59 165 69 0 10 -53 276 -56 279 -1 2 -35 -4 -76 -12 -140 -29 -236 11
                -285 119 -17 37 -18 92 -21 758 l-3 717 211 0 210 0 0 155 0 155 -210 0 -210
                0 0 265 0 265 -205 0 -205 0 0 -265z"/>
              <path d="M3503 3076 c-28 -13 -62 -39 -75 -56 -12 -18 -34 -37 -48 -42 -14 -6
                -20 -12 -13 -15 8 -3 10 -26 6 -76 -5 -61 -2 -81 17 -125 40 -93 120 -144 227
                -144 108 -1 193 58 226 157 73 212 -135 396 -340 301z"/>
              <path d="M2316 2433 c-11 -51 -216 -1433 -216 -1453 0 -19 7 -20 214 -20 118
                0 217 3 219 8 3 4 8 42 12 84 l7 78 -106 0 c-58 0 -106 4 -106 9 0 5 43 293
                95 641 52 348 95 643 95 656 0 24 -1 24 -104 24 l-104 0 -6 -27z"/>
              <path d="M2870 2456 c0 -2 -49 -333 -110 -736 -60 -403 -110 -739 -110 -746 0
                -12 39 -14 219 -14 l219 0 6 68 c4 37 10 75 12 85 5 15 -5 17 -106 17 l-112 0
                6 33 c3 17 46 304 96 637 50 333 93 617 96 633 l6 27 -111 0 c-61 0 -111 -2
                -111 -4z"/>
              <path d="M3520 1710 l0 -750 95 0 95 0 0 750 0 750 -95 0 -95 0 0 -750z"/>
              <path d="M1202 2081 c-40 -142 -72 -263 -72 -270 0 -6 14 -11 30 -11 17 0 30
                3 30 6 0 3 32 118 70 255 39 138 70 257 70 265 0 9 -10 14 -28 14 l-28 0 -72
                -259z"/>
              <path d="M952 2179 c-67 -56 -122 -106 -122 -110 0 -5 57 -56 127 -114 l126
                -106 26 25 c14 14 23 27 20 29 -2 2 -48 40 -102 85 l-97 81 100 82 100 82 -22
                24 c-12 12 -24 23 -28 23 -3 0 -61 -46 -128 -101z"/>
              <path d="M1357 2262 c-10 -10 -17 -21 -17 -24 0 -4 42 -41 93 -83 50 -43 93
                -81 95 -85 2 -5 -40 -43 -92 -86 -53 -43 -96 -81 -96 -84 0 -4 10 -16 23 -28
                l23 -22 125 105 c68 57 124 108 124 113 0 11 -239 212 -252 212 -6 0 -17 -8
                -26 -18z"/>
              <path d="M2580 815 l0 -65 65 0 65 0 0 65 0 65 -65 0 -65 0 0 -65z"/>
              <path d="M240 821 c-69 -21 -139 -80 -159 -134 -6 -16 -11 -55 -11 -88 0 -123
                65 -187 254 -249 41 -14 84 -36 105 -55 30 -28 36 -40 36 -75 0 -34 -6 -47
                -31 -70 -81 -72 -234 -28 -250 71 l-7 39 -63 0 -64 0 0 -42 c0 -127 121 -219
                288 -218 87 1 136 15 188 55 94 72 100 231 11 323 -38 40 -80 63 -180 98 -39
                15 -86 35 -103 45 -60 36 -68 113 -19 159 36 34 122 40 168 11 35 -21 57 -57
                57 -91 0 -18 7 -20 69 -20 l69 0 -5 43 c-17 126 -125 208 -272 206 -31 0 -67
                -4 -81 -8z"/>
              <path d="M929 600 c-108 -57 -165 -205 -139 -364 18 -115 71 -189 156 -222 84
                -32 235 -10 296 43 16 14 16 18 -4 57 -11 22 -22 43 -24 45 -1 2 -22 -6 -46
                -17 -124 -59 -218 -22 -243 96 l-7 32 171 0 171 0 0 88 c0 71 -5 96 -24 137
                -26 56 -67 98 -109 114 -47 18 -157 13 -198 -9z m169 -124 c12 -12 25 -39 29
                -59 l6 -37 -102 0 c-115 0 -122 6 -78 71 42 62 97 72 145 25z"/>
              <path d="M1627 590 c-35 -30 -47 -30 -47 2 0 15 -8 18 -60 18 l-60 0 0 -300 0
                -300 65 0 65 0 0 209 0 208 26 27 c22 21 36 26 75 26 54 0 52 -3 64 93 l6 47
                -50 0 c-42 0 -56 -5 -84 -30z"/>
              <path d="M3070 604 c-48 -21 -87 -60 -118 -119 -35 -67 -43 -224 -17 -310 23
                -71 81 -138 140 -160 70 -27 172 -18 227 21 50 35 88 95 88 142 l0 32 -60 0
                c-55 0 -60 -2 -66 -24 -17 -68 -108 -94 -159 -46 -70 66 -71 273 -1 339 52 49
                136 22 157 -49 l12 -40 59 0 58 0 0 38 c-1 75 -50 146 -122 177 -47 19 -152
                19 -198 -1z"/>
              <path d="M3709 600 c-44 -23 -96 -81 -116 -129 -38 -89 -34 -260 6 -340 25
                -49 89 -105 136 -121 52 -17 190 -9 235 14 66 35 71 42 51 87 -10 22 -21 42
                -24 45 -3 4 -26 -3 -49 -15 -123 -59 -218 -21 -243 97 l-7 32 178 0 177 0 -6
                80 c-4 45 -12 99 -18 120 -15 51 -73 118 -116 136 -48 21 -160 17 -204 -6z
                m138 -100 c33 -12 63 -56 63 -94 l0 -26 -100 0 c-91 0 -100 2 -100 19 0 26 41
                83 70 98 30 15 30 15 67 3z"/>
              <path d="M4345 606 c-64 -29 -115 -102 -115 -166 0 -83 64 -146 177 -176 84
                -22 119 -39 133 -63 15 -29 13 -39 -15 -66 -49 -50 -153 -25 -175 40 -11 35
                -12 35 -71 35 l-59 0 0 -35 c0 -46 20 -84 64 -123 48 -42 98 -55 187 -50 127
                7 197 61 207 157 10 110 -35 159 -186 202 -104 30 -137 55 -126 93 16 58 104
                77 149 31 14 -13 25 -33 25 -45 0 -18 6 -20 65 -20 l65 0 0 38 c0 48 -29 94
                -81 129 -37 24 -54 28 -128 31 -57 1 -96 -2 -116 -12z"/>
              <path d="M1890 603 c0 -4 44 -140 98 -301 l97 -293 59 3 59 3 94 280 c51 154
                96 288 99 298 5 15 -3 17 -65 17 l-70 0 -20 -67 c-29 -100 -89 -315 -93 -336
                -1 -10 -30 77 -62 193 l-60 210 -68 0 c-37 0 -68 -3 -68 -7z"/>
              <path d="M2580 310 l0 -300 65 0 65 0 0 300 0 300 -65 0 -65 0 0 -300z"/>
            </g>
          </svg></a>
      </div>

      <!-- Mobile menu button -->
      <div class="flex lg:hidden">
        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
          <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
          </svg>

          <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center bg-slate-200 dark:bg-slate-500">
      <div class="flex flex-col md:flex-row md:mx-6">
        <a class="my-2 font-bold text-gray-700 transition-colors duration-300 transform hover:underline dark:text-gray-200 hover:text-blue-800 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/about">About Us</a>
        <a class="my-2 font-bold text-gray-700 transition-colors duration-300 transform hover:underline dark:text-gray-200 hover:text-blue-800 dark:hover:text-blue-400 md:mx-4 md:my-0" href="/blog">Blog</a>

          @if (Route::has('login'))
            <div class="">
            @auth
            <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                <button class="font-bold
                hover:underline text-gray-700 transition duration-150 ease-in-out transform dark:text-gray-200 hover:text-blue-800 dark:hover:text-blue-400 md:mx-4 md:my-0">
                <div>{{ Auth::user()->name }}</div>
                </button>
              </x-slot>
              <x-dropdown.item icon="cog" label="Profile" href="/profile"/>
              <x-dropdown.item icon="logout" separator>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <b :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                  </b>
                </form>
              </x-dropdown.item>
            </x-dropdown>
            @else
              <a href="{{ route('login') }}" class="my-2 font-bold text-gray-700 transition-colors duration-300 transform hover:underline dark:text-gray-200 hover:text-blue-800 dark:hover:text-blue-400 md:mx-4 md:my-0">Log in</a>

              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="my-2 font-bold text-gray-700 transition-colors duration-300 transform hover:underline dark:text-gray-200 hover:text-blue-800 dark:hover:text-blue-400 md:mx-4 md:my-0">Register</a>
              @endif
            @endauth
          </div>
        @endif
        </div>
      </div>
    </div>
</nav>
