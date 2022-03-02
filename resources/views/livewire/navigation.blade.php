<style>
    #navigation-menu{
        height: calc(100vh - 4rem);
    }
    .navigation-link:hover .navigation-submenu{
        display: block !important;
    }
</style>

<header class="bg-gray-600 sticky top-0" x-data="dropdown()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-16 justify-between md:justify-start">
        <a
            :class="{'bg-opacity-100 text-orange-500' : open}"
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm hidden md:block">Categories</span>
        </a>

        <a href="/" class="mx-6">
            <x-jet-application-mark class="block h-9 w-auto"></x-jet-application-mark>
        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <div class="mx-6 relative hidden md:block">
            @auth

            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">

                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>

                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>

            @else

                <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <i class="fa-solid fa-circle-user text-white text-3xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">

                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>

                    </x-slot>

                </x-jet-dropdown>

            @endauth
        </div>

        <div class="hidden md:block">
            @livewire('dropdown-cart')
        </div>

    </div>

    <nav id="navigation-menu"
         x-show="open" style="display: none"
         class="bg-gray-600 bg-opacity-25 w-full absolute">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full hidden md:block">
            <div x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach($categories as $category)
                        <li class="navigation-link text-gray-500 hover:bg-orange-500 hover:text-white">
                            <a class="py-2 px-4 text-sm flex items-center" href="">

                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>

                                {{$category->name}}
                            </a>

                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category"/>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="col-span-3 bg-gray-100">
                    <x-navigation-subcategories :category="$categories->first()"/>
                </div>
            </div>
        </div>

        <div class="bg-white h-full overflow-y-auto">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>

            <ul>
                @foreach($categories as $category)
                    <li class="text-gray-500 hover:bg-orange-500 hover:text-white">
                        <a href="" class="py-2 px-4 text-sm flex items-center" >

                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>

                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="text-gray-500 px-6 my-2">Users</p>

            @livewire('cart-mobile')

            @auth
                <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                                <span class="flex justify-center w-9">
                                    <i class="fa-solid fa-id-card"></i>
                                </span>
                    Profile
                </a>
                <a href=""
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                   class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                                <span class="flex justify-center w-9">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </span>
                    Sing Out
                </a>

                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                @csrf
                </form>

            @else

                <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                                <span class="flex justify-center w-9">
                                    <i class="fa-solid fa-circle-user"></i>
                                </span>
                    Log in
                </a>
                <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-orange-500 hover:text-white">
                                <span class="flex justify-center w-9">
                                    <i class="fa-solid fa-fingerprint"></i>
                                </span>
                    Register
                </a>
            @endauth

        </div>
    </nav>
</header>
