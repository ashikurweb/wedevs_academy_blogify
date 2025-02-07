@extends('layouts.frontend')
@section('title', 'My Personal Blog Project|| Wedevs Academy')

@section('content')
    <!-- ===== Hero Section Start ===== -->
    <section id="home" class="relative overflow-hidden z-10 pt-35 md:pt-40 xl:pt-45">
      <!-- Hero Bg Shapes -->
      <div class="max-w-7xl mx-auto">
        <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
          <div
            class="absolute -z-1 -top-[128%] sm:-top-[107%] xl:-top-[73%] left-1/2 -translate-x-1/2 -u-z-10 hero-circle-gradient w-full h-[1282px] rounded-full max-w-[1282px]">
          </div>
          <div
            class="absolute -z-1 -top-[112%] sm:-top-[93%] xl:-top-[62%] left-1/2 -translate-x-1/2 -u-z-10 hero-circle-gradient w-full h-[1046px] rounded-full max-w-[1046px]">
          </div>
          <div class="absolute top-0 left-1/2 -translate-x-1/2 -u-z-10">
            <img src="{{ asset('assets/pictures/blur-02.svg') }}" alt="blur" class="max-w-none">
          </div>
          <div class="absolute top-0 left-1/2 -translate-x-1/2 -u-z-10">
            <img src="{{ asset('assets/pictures/blur-01.svg') }}" alt="blur" class="max-w-none">
          </div>
        </div>
      </div>

      <!-- Hero Content -->
      <div class="mx-auto max-w-[900px] px-4 sm:px-8 xl:px-0 relative z-1">
        <div class="text-center">
          <a href="{{ route('home') }}"
            class="hero-subtitle-gradient hover:hero-subtitle-hover relative mb-5 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

            <span class="hero-subtitle-text">
              Your Ultimate Creative Companion!
            </span>
          </a>
          <h1 class="text-white mb-6 text-3xl font-extrabold sm:text-5xl xl:text-heading-1">
            My Personal Blog Project
          </h1>
          <p class="max-w-[500px] mx-auto mb-9 font-medium md:text-lg">
            I'm a paragraph. Click here to add your own text and edit me.
          </p>

          <a href="http://github.com/ashikurweb" target="_blank"
            class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
            Connect My Github Account
          </a>
        </div>
      </div>

      <div class="mt-17" data-wow-delay="0.1s">
        <img class="mx-auto" src="{{ asset('assets/pictures/hero.svg') }}" alt="hero" />
      </div>
    </section>
    <!-- ===== Hero Section End ===== -->

      <!-- ====== Clients Section Start -->
      <section class="py-19">
        <div class="max-w-[1104px] mx-auto px-4 sm:px-8 xl:px-0">
          <div class="relative overflow-hidden z-10">
            <span
              class="max-w-[128px] w-full h-[37px] block inset-0 pointer-events-none absolute z-10 left-0 top-1/2 -translate-y-1/2 bg-gradient-to-l from-dark/0 to-dark/100"></span>
            <span
              class="max-w-[128px] w-full h-[37px] block inset-0 pointer-events-none absolute z-10 left-auto top-1/2 -translate-y-1/2 bg-gradient-to-r from-dark/0 to-dark/100"></span>
            <div class="swiper clients-carousel">
              <div class="swiper-wrapper items-center select-none !ease-linear">
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-01.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-02.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-03.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-04.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-05.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-06.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img class="mt-3" src="{{ asset('assets/pictures/client-07.svg') }}" alt="client" />
                  </a>
                </div>

                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-01.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-02.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-03.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-04.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-05.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-06.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img class="mt-3" src="{{ asset('assets/pictures/client-07.svg') }}" alt="client" />
                  </a>
                </div>

                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-01.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-02.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-03.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-04.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-05.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img src="{{ asset('assets/pictures/client-06.svg') }}" alt="client" />
                  </a>
                </div>
                <div class="swiper-slide !w-auto">
                  <a href="/#">
                    <img class="mt-3" src="{{ asset('assets/pictures/client-07.svg') }}" alt="client" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Clients Section End -->

    <!-- ====== Blog Section Start -->
    <section class="py-20 lg:py-25">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
            <!-- section title -->
            <div class="wow fadeInUp mb-16 text-center">
            <span
                class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

                <span class="hero-subtitle-text"> Read Our Latest Blogs </span>
            </span>
            <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
                Latest Blogs & News
            </h2>
            <p class="max-w-[714px] mx-auto font-medium">
                Our AI writing tool is designed to empower you with exceptional
                writing capabilities, making the writing process more efficient,
                accurate, and enjoyable.
            </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">
            <!-- blog item -->
            <div class="wow fadeInUp group">
                <div class="mb-6 overflow-hidden rounded-xl">
                <img src="{{ asset('assets/pictures/blog-01.png') }}" alt="image"
                    class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                </div>

                <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Design
                </span>
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Engineering
                </span>
                </div>

                <h4>
                <a href="blog-single.html" class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                    Revolution in Content Creation and Communication
                </a>
                </h4>
                <p class="font-medium mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisc elit sed do
                eiusmod tempor incididunt ut labore et dolore magna oliumosd
                aliqua...
                </p>

                <div class="flex items-center gap-4.5 flex-wrap mt-6">
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                        fill="" />
                    <path
                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">Alex Demo</span>
                </div>
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">25 Mar, 2025</span>
                </div>
                </div>
            </div>

            <!-- blog item -->
            <div class="wow fadeInUp group">
                <div class="mb-6 overflow-hidden rounded-xl">
                <img src="{{ asset('assets/pictures/blog-02.png') }}" alt="image"
                    class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                </div>

                <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Development
                </span>
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Security
                </span>
                </div>

                <h4>
                <a href="blog-single.html" class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                    How AI Writing Tools Empower Writers to Speed up there Writing
                </a>
                </h4>
                <p class="font-medium mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisc elit sed do
                eiusmod tempor incididunt ut labore et dolore magna oliumosd
                aliqua...
                </p>

                <div class="flex items-center gap-4.5 flex-wrap mt-6">
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                        fill="" />
                    <path
                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">Hendary Jonson</span>
                </div>
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">12 Feb, 2025</span>
                </div>
                </div>
            </div>

            <!-- blog item -->
            <div class="wow fadeInUp group">
                <div class="mb-6 overflow-hidden rounded-xl">
                <img src="{{ asset('assets/pictures/blog-03.png') }}" alt="image"
                    class="ease-linear w-full duration-500 scale-100 group-hover:scale-125" />
                </div>

                <div class="flex flex-wrap gap-2.5 items-center mb-4.5">
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Products
                </span>
                <span
                    class="font-medium text-xs hover:text-white cursor-pointer py-[3px] px-2.5 rounded-full bg-white/[0.07] border border-white/10 hover:border-white/25 ease-out duration-300">
                    Blog and articles
                </span>
                </div>

                <h4>
                <a href="blog-single.html" class="text-white font-semibold text-xl ease-in duration-300 hover:opacity-80">
                    Revolution in Content Creation and Communication
                </a>
                </h4>
                <p class="font-medium mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisc elit sed do
                eiusmod tempor incididunt ut labore et dolore magna oliumosd
                aliqua...
                </p>

                <div class="flex items-center gap-4.5 flex-wrap mt-6">
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 8.75C7.65625 8.75 5.78125 6.90625 5.78125 4.65625C5.78125 2.40625 7.65625 0.5625 10 0.5625C12.3438 0.5625 14.2188 2.40625 14.2188 4.65625C14.2188 6.90625 12.3438 8.75 10 8.75ZM10 1.96875C8.4375 1.96875 7.1875 3.1875 7.1875 4.65625C7.1875 6.125 8.4375 7.34375 10 7.34375C11.5625 7.34375 12.8125 6.125 12.8125 4.65625C12.8125 3.1875 11.5625 1.96875 10 1.96875Z"
                        fill="" />
                    <path
                        d="M16.5938 19.4688C16.2188 19.4688 15.875 19.1562 15.875 18.75V17.8438C15.875 14.5938 13.25 11.9688 10 11.9688C6.75 11.9688 4.125 14.5938 4.125 17.8438V18.75C4.125 19.125 3.8125 19.4688 3.40625 19.4688C3 19.4688 2.6875 19.1562 2.6875 18.75V17.8438C2.6875 13.8125 5.96875 10.5625 9.96875 10.5625C13.9688 10.5625 17.25 13.8437 17.25 17.8438V18.75C17.2813 19.125 16.9688 19.4688 16.5938 19.4688Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">Piter Mecraow</span>
                </div>
                <div class="flex items-center gap-2 flex-wrap cursor-pointer ease-in duration-300 hover:text-white">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.5C1.4375 3.3125 0.53125 4.1875 0.53125 5.28125V16.1563C0.53125 17.2188 1.40625 18.125 2.5 18.125H17.5C18.5625 18.125 19.4687 17.25 19.4687 16.1563V5.25C19.4687 4.1875 18.5625 3.3125 17.5 3.3125ZM1.96875 9.125H4.625V12.2188H1.96875V9.125ZM6.03125 9.125H9.3125V12.2188H6.03125V9.125ZM9.3125 13.625V16.6875H6.03125V13.625H9.3125ZM10.7187 13.625H14V16.6875H10.7187V13.625ZM10.7187 12.2188V9.125H14V12.2188H10.7187ZM15.375 9.125H18.0312V12.2188H15.375V9.125ZM2.5 4.71875H4.125V5.375C4.125 5.75 4.4375 6.09375 4.84375 6.09375C5.25 6.09375 5.5625 5.78125 5.5625 5.375V4.71875H14.5V5.375C14.5 5.75 14.8125 6.09375 15.2187 6.09375C15.625 6.09375 15.9375 5.78125 15.9375 5.375V4.71875H17.5C17.8125 4.71875 18.0625 4.96875 18.0625 5.28125V7.71875H1.96875V5.28125C1.96875 4.96875 2.1875 4.71875 2.5 4.71875ZM1.96875 16.125V13.5938H4.625V16.6563H2.5C2.1875 16.6875 1.96875 16.4375 1.96875 16.125ZM17.5 16.6875H15.375V13.625H18.0312V16.1563C18.0625 16.4375 17.8125 16.6875 17.5 16.6875Z"
                        fill="" />
                    </svg>

                    <span class="text-sm font-medium">10 Jan, 2025</span>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    {{-- <section class="pt-12.5">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="grid sm:grid-cols-12 gap-7.5" data-highlighter>
          <!-- features item -->
          <div class="sm:col-span-12">
            <div class="relative rounded-3xl features-box-border">
              <div class="relative overflow-hidden rounded-3xl p-10 xl:p-15 box-hover">
                <div class="flex items-center justify-between relative z-20">
                  <div class="max-w-[477px] w-full">
                    <span
                      class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                      <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

                      <span class="hero-subtitle-text">
                        AI-Powered Writing Tool
                      </span>
                    </span>
                    <h3 class="text-white mb-4.5 font-bold text-heading-4">
                      Intelligent Writing Assistance
                    </h3>
                    <p class="font-medium mb-10">
                      Our AI writing tool is designed to empower you with
                      exceptional writing capabilities, making the writing
                      process...
                    </p>
                    <a href="#"
                      class="features-button-gradient relative inline-flex items-center gap-1.5 rounded-full py-3 px-6 text-white text-sm ease-in duration-300 hover:shadow-button">
                      Learn more
                      <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.3992 5.60002L8.22422 0.350024C7.99922 0.125024 7.64922 0.125024 7.42422 0.350024C7.19922 0.575024 7.19922 0.925025 7.42422 1.15002L11.6242 5.42503H0.999219C0.699219 5.42503 0.449219 5.67502 0.449219 5.97502C0.449219 6.27502 0.699219 6.55003 0.999219 6.55003H11.6742L7.42422 10.875C7.19922 11.1 7.19922 11.45 7.42422 11.675C7.52422 11.775 7.67422 11.825 7.82422 11.825C7.97422 11.825 8.12422 11.775 8.22422 11.65L13.3992 6.40002C13.6242 6.17502 13.6242 5.82502 13.3992 5.60002Z"
                          fill="white" />
                      </svg>
                    </a>
                  </div>

                  <div class="max-w-[428px] w-full hidden sm:block">
                    <img src="{{ asset('assets/pictures/big-icon.svg') }}" alt="icon" />
                  </div>
                </div>

                <!-- bg shapes -->
                <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
                  <span class="absolute right-0 bottom-0"><img src="{{ asset('assets/pictures/shape-01.png') }}"
                      alt="shape" /></span>
                  <span class="absolute left-0 top-0"><img src="{{ asset('assets/pictures/shape-02.svg') }}" alt="shape" /></span>
                  <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-03.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-04.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute left-1/2 -translate-x-1/2 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-05.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute right-0 top-0">
                    <img src="{{ asset('assets/pictures/shape-03.svg') }}" alt="shape" class="max-w-none" />
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- features item -->
          <div class="sm:col-span-7">
            <div class="relative rounded-3xl features-box-border">
              <div class="relative overflow-hidden rounded-3xl px-11 pt-12.5 pb-14 box-hover box-hover-small">
                <div class="relative z-20">
                  <span
                    class="icon-border relative max-w-[80px] w-full h-20 rounded-full inline-flex items-center justify-center mb-13.5 mx-auto">
                    <img src="{{ asset('assets/pictures/icon-05.svg') }}" alt="icon" />
                  </span>

                  <h3 class="text-white mb-4.5 font-semibold text-heading-6">
                    Empowering Writing Excellence
                  </h3>
                  <p class="font-medium">
                    Our AI writing tool is designed to empower you with
                    exceptional writing capabilities, making the writing
                    process...
                  </p>
                </div>

                <!-- bg shapes -->
                <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                  <span class="absolute left-0 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-06.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute right-0 top-0">
                    <img src="{{ asset('assets/pictures/blur-07.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute right-[16%] top-[16%]"><img src="{{ asset('assets/pictures/shape-04.svg') }}"
                      alt="shape" /></span>
                  <span class="absolute left-0 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-08.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute left-0 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-09.svg') }}" alt="blur" class="max-w-none">
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- features item -->
          <div class="sm:col-span-5">
            <div class="relative rounded-3xl features-box-border">
              <div class="relative overflow-hidden rounded-3xl px-11 pt-12.5 pb-14 box-hover box-hover-small">
                <div class="relative z-20">
                  <span
                    class="icon-border relative max-w-[80px] w-full h-20 rounded-full inline-flex items-center justify-center mb-13.5 mx-auto">
                    <img src="{{ asset('assets/pictures/icon-07.svg') }}" alt="icon" />
                  </span>

                  <h3 class="text-white mb-4.5 font-semibold text-heading-6">
                    Grammar and Spell Check
                  </h3>
                  <p class="font-medium">
                    Our AI writing tool is designed to empower you with
                    exceptional writing capabilities.
                  </p>
                </div>

                <!-- bg shapes -->
                <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                  <span class="absolute right-[14%] top-[17%]"><img src="{{ asset('assets/pictures/shape-05.svg') }}"
                      alt="shape" /></span>
                  <span class="absolute left-0 bottom-0">
                    <img src="{{ asset('assets/pictures/blur-10.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute top-0 right-0">
                    <img src="{{ asset('assets/pictures/blur-11.svg') }}" alt="blur" class="max-w-none">
                  </span>
                  <span class="absolute top-0 right-0">
                    <img src="{{ asset('assets/pictures/blur-12.svg') }}" alt="blur" class="max-w-none">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- ===== features list Section End ===== -->


    <!-- ====== User Section Start -->
    {{-- <section x-data="{ 'showContent': false, 'scrollContent': false, }"
      class="relative z-20 overflow-hidden pt-22.5 lg:pt-27.5 xl:pt-32.5 2xl:pt-45 pb-20">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <!-- section title -->
        <div class="wow fadeInUp mb-15 text-center">
          <span
            class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

            <span class="hero-subtitle-text"> Wall of love </span>
          </span>
          <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
            What Our User Says
          </h2>
          <p class="max-w-[714px] mx-auto font-medium">
            Our AI writing tool is designed to empower you with exceptional
            writing capabilities, making the writing process more efficient,
            accurate, and enjoyable.
          </p>
        </div>

        <div @scroll.window="scrollContent = (scrollY > $el.offsetTop - 500) ? true : false"
          :class="{ 'max-h-[855px] overflow-hidden' :!showContent }"
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">
          <!-- user column -->
          <div class="space-y-7.5">
            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="{{ asset('assets/pictures/user-01.png') }}" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Machel Pildium
                  </h5>
                  <p class="font-medium text-sm">@machel</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-02.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Wilson Bator
                  </h5>
                  <p class="font-medium text-sm">@wilson</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-03.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Roger George
                  </h5>
                  <p class="font-medium text-sm">@roger</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-04.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Adison Dias
                  </h5>
                  <p class="font-medium text-sm">@adison</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-05.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Abram Lipshutz
                  </h5>
                  <p class="font-medium text-sm">@abram</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-06.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Jaylon Press
                  </h5>
                  <p class="font-medium text-sm">@jaylon</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-07.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Zain Franci
                  </h5>
                  <p class="font-medium text-sm">@zain</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-08.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Cristofer Carder
                  </h5>
                  <p class="font-medium text-sm">@cristofer</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-09.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Dulce Rosser
                  </h5>
                  <p class="font-medium text-sm">@dulce</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>
          </div>

          <!-- user column -->
          <div class="space-y-7.5 hidden sm:block">
            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-04.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Adison Dias
                  </h5>
                  <p class="font-medium text-sm">@adison</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-05.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Abram Lipshutz
                  </h5>
                  <p class="font-medium text-sm">@abram</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-06.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Jaylon Press
                  </h5>
                  <p class="font-medium text-sm">@jaylon</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-07.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Zain Franci
                  </h5>
                  <p class="font-medium text-sm">@zain</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-08.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Cristofer Carder
                  </h5>
                  <p class="font-medium text-sm">@cristofer</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-09.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Dulce Rosser
                  </h5>
                  <p class="font-medium text-sm">@dulce</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-01.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Machel Pildium
                  </h5>
                  <p class="font-medium text-sm">@machel</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-02.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Wilson Bator
                  </h5>
                  <p class="font-medium text-sm">@wilson</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-03.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Roger George
                  </h5>
                  <p class="font-medium text-sm">@roger</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>
          </div>

          <!-- user column -->
          <div class="space-y-7.5 hidden lg:block">
            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-07.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Zain Franci
                  </h5>
                  <p class="font-medium text-sm">@zain</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-08.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Cristofer Carder
                  </h5>
                  <p class="font-medium text-sm">@cristofer</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-09.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Dulce Rosser
                  </h5>
                  <p class="font-medium text-sm">@dulce</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-01.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Machel Pildium
                  </h5>
                  <p class="font-medium text-sm">@machel</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-02.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Wilson Bator
                  </h5>
                  <p class="font-medium text-sm">@wilson</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-03.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Roger George
                  </h5>
                  <p class="font-medium text-sm">@roger</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-04.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Adison Dias
                  </h5>
                  <p class="font-medium text-sm">@adison</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <p class="mt-6">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-05.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Abram Lipshutz
                  </h5>
                  <p class="font-medium text-sm">@abram</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>

            <!-- user item -->
            <div class="user-border-gradient relative overflow-hidden px-8 py-9 rounded-[19px]">
              <div class="flex items-center gap-4.5">
                <div class="max-w-[48px] w-full h-12 rounded-full">
                  <img src="images/user-06.png" alt="user" />
                </div>
                <div>
                  <h5 class="text-white text-sm font-medium">
                    Jaylon Press
                  </h5>
                  <p class="font-medium text-sm">@jaylon</p>
                </div>
              </div>

              <div class="user-divider relative my-6 w-full h-[1px]"></div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's.
              </p>

              <!-- bg shapes -->
              <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
                <span class="absolute right-0 bottom-0 -z-1">
                  <img src="images/blur-18.svg" alt="blur" class="max-w-none">
                </span>
              </div>
            </div>
          </div>
        </div>

        <div
          :class="[ showContent ? 'sticky -u-mt-52 transition-opacity duration-300 opacity-0' : '', scrollContent ? '!opacity-100' : '' ]"
          class="inset-x-0 bottom-20 flex justify-center bg-gradient-to-t from-dark pt-32 pb-8 pointer-events-none absolute">
          <button
            :class="[ showContent ? 'transition-transform translate-y-4' : '', scrollContent ? 'translate-y-0' : '' ]"
            @click="showContent = !showContent" type="button"
            class="button-border-gradient hover:button-gradient-hover relative top-20 text-sm text-white font-semibold px-4.5 py-3 rounded-lg pointer-events-auto flex mx-auto -mt-7.5 ease-in duration-300">
            <span x-text="showContent ? 'Okay, I get the point' : 'Show more...'"></span>
          </button>
        </div>
      </div>
    </section> --}}
    <!-- ====== User Section End -->

    <!-- ====== Support Section Start -->
    <section id="support" class="scroll-mt-17">
      <div class="max-w-[1104px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="relative z-999 overflow-hidden rounded-[30px] bg-dark pt-25 px-4 sm:px-20 lg:px-27.5">
          <!-- grid row -->
          <div
            class="flex justify-center gap-7.5 absolute left-1/2 -translate-x-1/2 -top-[16%] max-w-[690px] w-full -z-1 opacity-40">
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-12">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-7">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-3">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-2">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-5">
            </div>
            <div class="max-w-[50px] w-full h-[250px] relative pricing-grid pricing-grid-border bottom-8">
            </div>
          </div>

          <!-- stars -->
          <div class="max-w-[482px] w-full h-60 overflow-hidden absolute -z-1 -top-30 left-1/2 -translate-x-1/2">
            <div class="stars"></div>
            <div class="stars2"></div>
          </div>

          <!-- bg shapes -->
          <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
            <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-19.svg') }}" alt="blur" class="max-w-none">
            </span>
            <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-20.svg') }}" alt="blur" class="max-w-none">
            </span>
            <span class="absolute left-1/2 top-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-21.svg') }}" alt="blur" class="max-w-none">
            </span>
          </div>

          <!-- section title -->
          <div class="wow fadeInUp mb-16 text-center relative z-999">
            <span
              class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
              <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

              <span class="hero-subtitle-text"> Need Any Help? </span>
            </span>
            <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
              Contact With Us
            </h2>
            <p class="max-w-[714px] mx-auto font-medium">
              Our AI writing tool is designed to empower you with exceptional
              writing capabilities, making the writing process more efficient,
              accurate, and enjoyable.
            </p>
          </div>

          <!-- support form -->
          <div class="form-box-gradient relative overflow-hidden rounded-[25px] bg-dark p-6 sm:p-8 xl:p-15">
            <form class="relative z-10">
              <div class="-mx-4 xl:-mx-10 flex flex-wrap">
                <div class="w-full px-4 xl:px-5 md:w-1/2">
                  <div class="mb-9.5">
                    <label for="name" class="text-white mb-2.5 block font-medium">
                      Name
                    </label>
                    <input id="name" type="text" name="name" placeholder="Enter your Name"
                      class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                  </div>
                </div>
                <div class="w-full px-4 xl:px-5 md:w-1/2">
                  <div class="mb-9.5">
                    <label for="email" class="text-white mb-2.5 block font-medium">
                      Email
                    </label>
                    <input id="email" type="email" name="email" placeholder="Enter your Email"
                      class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                  </div>
                </div>
                <div class="w-full px-4 xl:px-5">
                  <div class="mb-10">
                    <label for="message" class="text-white mb-2.5 block font-medium">
                      Message
                    </label>
                    <textarea id="message" name="message" placeholder="Type your message" rows="6"
                      class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-5 px-6 outline-none"></textarea>
                  </div>
                </div>
                <div class="w-full px-4 xl:px-5">
                  <div class="text-center">
                    <a href="#"
                      class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
                      Send Message
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Support Section End -->

    <!-- ====== CTA Section Start -->
    <section>
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="cta-box-gradient bg-dark rounded-[30px] relative overflow-hidden px-4 py-20 lg:py-25 z-999">
          <!-- bg shapes -->
          <span class="absolute bottom-0 left-0 -z-1"><img src="{{ asset('assets/pictures/grid.svg') }}" alt="grid" /></span>
          <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-22.svg') }}" alt="blur" class="max-w-none">
            </span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-23.svg') }}" alt="blur" class="max-w-none">
            </span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1">
              <img src="{{ asset('assets/pictures/blur-24.svg') }}" alt="blur" class="max-w-none">
            </span>
          </div>

          <!-- stars -->
          <div class="max-w-[482px] w-full h-60 overflow-hidden absolute -z-1 -bottom-25 left-1/2 -translate-x-1/2">
            <div class="stars"></div>
            <div class="stars2"></div>
          </div>

          <div class="wow fadeInUp text-center">
            <span
              class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
              <img src="{{ asset('assets/pictures/icon-title.svg') }}" alt="icon">

              <span class="hero-subtitle-text">
                Try our tool for Free
              </span>
            </span>
            <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">
              What are you waiting for?
            </h2>
            <p class="max-w-[714px] mx-auto font-medium mb-9">
              Our AI writing tool is designed to empower you with exceptional
              writing capabilities, making the writing process more efficient,
              accurate, and enjoyable.
            </p>

            <a href="#"
              class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">
              Get Started for Free
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== CTA Section End -->

    <!-- ====== Newsletter Section Start -->
    <section class="pt-17.5 sm:pt-22.5 xl:pt-27.5 pb-11">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="flex flex-wrap items-center justify-between gap-10">
          <div class="max-w-[352px] w-full">
            <h3 class="font-semibold text-heading-5 text-white mb-2">
              News & Update
            </h3>
            <p class="font-medium">
              Keep up to date with everything about our tool
            </p>
          </div>
          <div class="max-w-[534px] w-full">
            <form>
              <div class="flex items-center gap-4">
                <div class="max-w-[395px] w-full">
                  <input id="email" type="email" name="email" placeholder="Enter your Email"
                    class="rounded-lg border border-white/[0.12] bg-white/[0.05] focus:border-purple w-full py-3 px-6 outline-none" />
                </div>
                <a href="/#"
                  class="button-border-gradient relative rounded-lg text-white text-sm flex items-center gap-1.5 py-3.5 px-7 shadow-button hover:button-gradient-hover hover:shadow-none">
                  Subscribe
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Newsletter Section End -->
@endsection
