<header class="fixed left-0 top-0 w-full z-9999 py-7 lg:py-0"
  :class="{ 'bg-dark/70 backdrop-blur-lg shadow !py-4 lg:!py-0 transition duration-100 before:absolute before:w-full before:h-[1px] before:bottom-0 before:left-0 before:features-row-border' : stickyMenu }"
  @scroll.window="stickyMenu = (window.scrollY > 0) ? true : false">
  <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 lg:flex items-center justify-between relative">
    <div class="w-full lg:w-1/4 flex items-center justify-between">
      <a href="{{ route('home') }}">
        <img src="{{ asset('assets/pictures/logo.svg') }}" alt="Logo" />
      </a>

      <!-- Hamburger Toggle BTN -->
      <button class="lg:hidden block" @click="navigationOpen = !navigationOpen">
        <span class="block relative cursor-pointer w-5.5 h-5.5">
          <span class="du-block absolute right-0 w-full h-full">
            <span
              class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-[0]"
              :class="{ '!w-full delay-300': !navigationOpen }"></span>
            <span
              class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-150"
              :class="{ '!w-full delay-400': !navigationOpen }"></span>
            <span
              class="block relative top-0 left-0 bg-white rounded-sm w-0 h-0.5 my-1 ease-in-out duration-200 delay-200"
              :class="{ '!w-full delay-500': !navigationOpen }"></span>
          </span>
          <span class="du-block absolute right-0 w-full h-full rotate-45">
            <span
              class="block bg-white rounded-sm ease-in-out duration-200 delay-300 absolute left-2.5 top-0 w-0.5 h-full"
              :class="{ '!h-0 delay-[0]': !navigationOpen }"></span>
            <span
              class="block bg-white rounded-sm ease-in-out duration-200 delay-400 absolute left-0 top-2.5 w-full h-0.5"
              :class="{ '!h-0 dealy-200': !navigationOpen }"></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
    </div>

    <div class="w-full lg:w-3/4 h-0 lg:h-auto invisible lg:visible lg:flex items-center justify-between"
      :class="{ '!visible bg-dark shadow-lg relative !h-auto max-h-[400px] overflow-y-scroll rounded-md mt-4 p-7.5': navigationOpen }">
      <nav>
        <ul class="flex lg:items-center flex-col lg:flex-row gap-5 lg:gap-2">
          <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
            <a href="{{ route('home') }}"
              class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient"
              :class="{'!text-white nav-gradient' :page === 'home'}">Home</a>
          </li>
          <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
            <a href="/#features"
              class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Features</a>
          </li>
          <li class="nav__menu lg:py-7" :class="{ 'lg:!py-4' : stickyMenu }">
            <a href="/#pricing"
              class="relative text-white/80 text-sm py-1.5 px-4 border border-transparent hover:text-white hover:nav-gradient">Pricing</a>
          </li>
        </ul>
      </nav>

     @auth
     <div class="relative">
        <!-- Profile Button -->
        <button id="profileBtn" class="flex items-center space-x-2 px-4 py-2 rounded-lg focus:outline-none">
            <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full" alt="Profile">
        </button>

        <!-- Dropdown -->
        <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-2xl opacity-0 scale-95 transition-all duration-300 ease-in-out hidden">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-100 hover:bg-gray-700"> <i class="fa fa-home"></i> Dashboard</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex w-full px-4 py-2 text-rose-400 hover:bg-rose-400 hover:text-white"><i class="fa fa-sign-out mt-1 mr-1"></i> Logout</button>
            </form>
        </div>
    </div>
     @endauth

      @guest
      <div class="flex items-center gap-6 mt-7 lg:mt-0">
        <a href="{{ route('login') }}" class="text-white text-sm hover:text-opacity-75">Sign In</a>

        <a href="{{ route('register') }}"
          class="button-border-gradient relative rounded-lg text-white text-sm flex items-center gap-1.5 py-2 px-4.5 shadow-button hover:button-gradient-hover hover:shadow-none">
          Sign Up
          <svg class="mt-0.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M14.4002 7.60002L9.2252 2.35002C9.0002 2.12502 8.6502 2.12502 8.4252 2.35002C8.2002 2.57502 8.2002 2.92502 8.4252 3.15002L12.6252 7.42502H2.0002C1.7002 7.42502 1.4502 7.67502 1.4502 7.97502C1.4502 8.27502 1.7002 8.55003 2.0002 8.55003H12.6752L8.4252 12.875C8.2002 13.1 8.2002 13.45 8.4252 13.675C8.5252 13.775 8.6752 13.825 8.8252 13.825C8.9752 13.825 9.1252 13.775 9.2252 13.65L14.4002 8.40002C14.6252 8.17502 14.6252 7.82503 14.4002 7.60002Z"
              fill="white" />
          </svg>
        </a>
      </div>
      @endguest
    </div>
  </div>
</header>

@push('scripts')
    <script>
        const profileBtn = document.getElementById("profileBtn");
        const dropdownMenu = document.getElementById("dropdownMenu");

        profileBtn.addEventListener("click", (event) => {
            event.stopPropagation();
            dropdownMenu.classList.toggle("hidden");
            dropdownMenu.classList.toggle("opacity-0");
            dropdownMenu.classList.toggle("scale-95");
        });

        document.addEventListener("click", (event) => {
            if (!profileBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden", "opacity-0", "scale-95");
            }
        });
    </script>
@endpush
