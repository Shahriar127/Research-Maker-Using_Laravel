<header class="max-w-xl mx-auto text-center mt-0 pt-0">
    <h1 class="text-4xl my-0">
         <span class="text-blue-500">Welcome to See the Researches.</span>
    </h1>
    <p class="mt-0">A place to share knowledge and ideas.</p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
        @auth
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button
                            class="flex items-center gap-2 bg-white border border-gray-300 text-gray-700
                       font-medium rounded-full px-4 py-2 shadow-sm hover:bg-gray-100
                       transition duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 text-gray-500"
                                 fill="none"
                                 stroke="currentColor">
                                <path stroke-width="3"
                                      d="M4 6h16M4 12h16M4"/>
                            </svg>
                            Menu
                        </button>
                    </x-slot>

                    <div class="bg-white shadow-lg border border-gray-200 mt-2 py-2">
                        <x-dropdown-item
                            href="/admin/posts"
                            :active="request()->is('admin/posts')"
                            class="block px-4 py-2 text-sm text-gray-700 rounded-md transition"
                        >
                            Dashboard
                        </x-dropdown-item>

                        <x-dropdown-item
                            href="/admin/posts/create"
                            :active="request()->is('admin/posts/create')"
                            class="block px-4 py-2 text-sm text-gray-700 rounded-md transition"
                        >
                            New Post
                        </x-dropdown-item>
                    </div>
                </x-dropdown>
            </div>
        @endauth
    </div>
</header>
