@extends('layouts.main')

@section('root')
@include('components.navbar')
<div class="w-full mt-20 flex justify-center">
    <div class="flex items-center md:w-[400px] lg:w-[500px] h-max p-8 md:p-9 lg:p-10 bg-white rounded-xl">
        <div class="w-full">
            <p class="top-0 text-center text-xl md:text-2xl lg:text-3xl font-bold mb-6">Edit Profile</p>
            <form action="{{ route('update-account') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2 lg:mb-2">
                    <label for="email" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('email') text-red-500 @enderror">Email</label>
                    <input name="email" type="email" id="email" value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('email') border-red-500 placeholder-red-400 @enderror" placeholder="youremail@mail.com">
                    <p class="text-red-500 text-[12px]">@error('email') {{ $message }} @enderror</p>
                </div>

                <div class="mb-2 lg:mb-2">
                    <img class="w-28 mx-auto h-28 mb-3 rounded-full shadow-lg" src="{{ asset('storage/'.$user->photo) }}" alt="Profile Picture">
                    <label for="photo" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('re_password') text-red-500 @enderror">Photo</label>
                    <input name="photo" value="{{ asset('storage/'.$user->photo) }}" type="file" accept="image/*" id="photo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full @error('photo') border-red-500 placeholder-red-400 @enderror" value="{{ old('photo') }}">
                    <p class="text-red-500 text-[12px]">@error('photo') {{ $message }} @enderror</p>
                </div>
                <div class="mb-8 lg:mb-10">
                </div>
                <button type="submit" class="text-white bg-primary-color hover:bg-secondary-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-lg w-full py-2.5 text-center">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection