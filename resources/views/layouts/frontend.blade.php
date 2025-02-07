<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('assets/pictures/favicon.png') }}">
  <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title', 'My Personal Blog Project')</title>
  @stack('styles')
</head>
<body x-data="{ page: 'home', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
  <!-- ===== Header Start ===== -->
  @include('frontend.partials.header')
  <!-- ===== Header End ===== -->

  <main>
    @yield('content')
  </main>
  <!-- ===== Footer Start ===== -->
  <!-- ====== Footer Section Start -->
  @include('frontend.partials.footer')
<!-- ====== Footer Section End -->
  <!-- ===== Footer End ===== -->

  <!-- ====== Back To Top Start ===== -->
  <button
  class="hidden items-center justify-center w-10 h-10 rounded-[4px] shadow-solid-5 bg-purple hover:opacity-70 fixed bottom-8 right-8 z-999"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ '!flex' : scrollTop }">
  <svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path
      d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>
  <!-- ====== Back To Top End ===== -->
<script defer src="{{ asset('assets/scripts/scripts.js') }}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"90ccad09de263e4e","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"9a6015d415bb4773a0bff22543062d3b","b":1}' crossorigin="anonymous"></script>
@stack('scripts')
</body>

</html>
