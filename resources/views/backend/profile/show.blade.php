@extends('layouts.backend')
@section('title', 'User Profile')

@push('styles')
<style>
    body {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }
    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    #showImage {
        width: 128px;
        height: 128px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid white;
        margin-bottom: 20px;
    }
    .form-group {
        width: 100%;
        margin-bottom: 15px;
    }
    .form-input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: white;
        outline: none;
    }
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
    .button-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .custom-button {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
    }
    .delete-button {
        background-color: #ff4d4d;
        color: white;
    }
    .delete-button:hover {
        background-color: #cc0000;
    }
    .update-button {
        background-color: #6a0dad;
        color: white;
    }
    .update-button:hover {
        background-color: #4c0f7e;
    }
</style>
@endpush

@section('content')
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="profile-container mt-5">
        <label for="profileImage" class="cursor-pointer">
            <img id="showImage" src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=200" alt="Profile Picture">
        </label>
        <input type="file" id="profileImage" class="hidden" accept="image/*" onchange="previewImage(event)">

        <div class="form-group">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-input @error('full_name') ring-red-500 @enderror" value="{{ $user->full_name }}">

            @error('full_name')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-input @error('email') ring-red-500 @enderror" value="{{ $user->email }}" placeholder="Email">

            @error('email')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-input @error('password') ring-red-500 @enderror')" placeholder="Password">

            @error('password')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" name="new_password" class="form-input @error('new_password') ring-red-500 @enderror" placeholder="New Password">

            @error('new_password')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-input @error('confirm_password') ring-red-500 @enderror" placeholder="Confirm Password">

        </div>

        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-input @error('phone') ring-red-500 @enderror" value="{{ $user->phone }}" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-input @error('address') ring-red-500 @enderror" name="address" placeholder="Address">{{ $user->address }}</textarea>

            @error('address')
                <p class="text-red-500 text-xs mt-1 p-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="button-container">
            <button class="custom-button delete-button">Delete Account</button>
            <button class="custom-button update-button">Update Profile</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('showImage');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
