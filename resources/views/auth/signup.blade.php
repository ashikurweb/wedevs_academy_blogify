@extends('layouts.auth')
@section('title', 'Sign Up')

@section('content')
<div class="flex items-center justify-center min-h-screen relative">
    <div class="relative w-full max-w-lg p-6 bg-white/10 backdrop-blur-2xl border border-white/15 shadow-2xl rounded-2xl">
        <h2 class="text-center text-3xl font-extrabold text-white">Create a New Account</h2>
        <form action="{{ route('register') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-3">
                <label for="full_name" class="block text-gray-300 text-md mb-1 font-medium">Full Name</label>
                <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" class="w-full px-4 py-3 rounded-lg bg-black/30 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 @error('full_name') ring-red-500 @enderror" placeholder="Enter your full name">

                @error('full_name')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="block text-gray-300 text-md mb-1 font-medium">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-lg bg-black/30 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Enter your email address">

                @error('email')
                    <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="block text-gray-300 text-md mb-1 font-medium">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 rounded-lg bg-black/30 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="******">

                @error('password')
                    <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="block text-gray-300 text-md mb-1 font-medium">Confirm Password</label>
                <input type="password" class="w-full px-4 py-3 rounded-lg bg-black/30 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="******" name="password_confirmation">
            </div>

            <button class="w-full mb-3 mt-3 bg-purple-600 hover:bg-purple-700 transition-all text-white py-3 rounded-lg font-medium shadow-lg">
                Sign Up
            </button>
        </form>
        <p class="text-center text-gray-400 text-sm mt-6">
            Already have an account? <a href="{{ route('login') }}" class="text-purple-400 hover:underline">Sign In</a>
        </p>
    </div>
</div>
@endsection
