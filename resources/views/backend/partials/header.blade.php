<header class="app-header sticky top-0 z-50 min-h-topbar flex items-center bg-white">
    <div class="px-6 w-full flex items-center justify-between gap-4">
        <div class="flex items-center gap-5">
            <!-- Sidenav Menu Toggle Button -->
            <button
                class="flex items-center text-default-500 rounded-full cursor-pointer p-2 bg-white border border-default-200 hover:bg-primary/15 hover:text-primary hover:border-primary/5 transition-all"
                data-hs-overlay="#app-menu" aria-label="Toggle navigation">
                <i class="i-lucide-align-left text-2xl"></i>
            </button>

            <!-- Topbar Brand Logo -->
            <a class='md:hidden flex' href='/drezoc-tailwind/'>
                <img src="{{ asset('backend/pictures/logo-sm.png') }}" class="h-5" alt="Small logo">
            </a>

            <!-- Topbar Search -->
            <div class="md:flex hidden items-center relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="i-tabler-search text-base"></i>
                </div>
                <input type="search"
                    class="form-input px-10 rounded-lg  bg-default-500/10 border-transparent focus:border-transparent w-80"
                    placeholder="Search...">
                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <i class="i-tabler-microphone text-base hover:text-black"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center gap-5">
            <!-- Profile Dropdown Button -->
            <div class="relative">
                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                    <p class="mr-3 mt-2 text-md">{{ Auth::user()->full_name }}</p>
                    <button type="button" class="hs-dropdown-toggle">
                        <img src="https://i.pravatar.cc/40" alt="user-image" class="rounded-full h-10">
                    </button>
                    <div
                        class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-default-100"
                            href="#">
                            <i class="fa-solid fa-user mr-2"></i> Profile
                        </a>

                        <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-default-100"
                            href="#">
                            <i class="fa-solid fa-gear mr-2"></i> Settings
                        </a>

                        <hr class="my-2 -mx-2">

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="flex w-full items-center py-2 px-3 rounded-md text-sm text-rose-400 hover:bg-rose-50">
                                <i class="fa-solid fa-right-from-bracket mr-2"></i> Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
