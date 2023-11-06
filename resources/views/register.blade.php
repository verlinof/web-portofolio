@extends('layouts.main')

@section('root')
<div class="flex justify-center items-center w-full h-screen bg-primary-color">
    <svg class=" absolute top-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
        fill="#0094C3" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,160C274.3,181,343,235,411,218.7C480,203,549,117,617,106.7C685.7,96,754,160,823,160C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>

    <div class="z-10 flex items-center md:w-[400px] lg:w-[500px] h-max p-8 md:p-9 lg:p-10 bg-white rounded-xl">
        <div class="w-full">
            <p class="top-0 text-center text-xl md:text-2xl lg:text-3xl font-bold mb-6">Register</p>
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2 lg:mb-2">
                    <label for="username" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('username') text-red-500 @enderror">Username</label>
                    <input name="username" type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('username') border-red-500 placeholder-red-400 @enderror" placeholder="Username" value="{{ old('username') }}">
                    <p class="text-red-500 text-[12px]">@error('username') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="email" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('email') text-red-500 @enderror">Email</label>
                    <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('email') border-red-500 placeholder-red-400 @enderror" placeholder="youremail@mail.com" value="{{ old('email') }}">
                    <p class="text-red-500 text-[12px]">@error('email') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="password" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('password') text-red-500 @enderror">Password</label>
                    <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('password') border-red-500 placeholder-red-400 @enderror" placeholder="*****">
                    <p class="text-red-500 text-[12px]">@error('password') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="re-password" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('re_password') text-red-500 @enderror">Re-Password</label>
                    <input name="re_password" type="password" id="re-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('re_password') border-red-500 placeholder-red-400 @enderror" placeholder="*****">
                    <p class="text-red-500 text-[12px]">@error('re_password') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="photo" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('re_password') text-red-500 @enderror">Photo</label>
                    <input name="photo" type="file" accept="image/*" id="photo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full @error('photo') border-red-500 placeholder-red-400 @enderror" value="{{ old('photo') }}">
                    <p class="text-red-500 text-[12px]">@error('re_password') {{ $message }} @enderror</p>
                </div>
                <p class="font-normal text-sm">Already have an Account? <a class="md:ms-1 font-semibold text-primary-color" href="/login">Login</a></p>
                <div class="mb-8 lg:mb-10">
                </div>
                <button type="submit" class="text-white bg-primary-color hover:bg-secondary-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-lg w-full py-2.5 text-center">Register</button>
            </form>
        </div>
    </div>

    <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0094C3" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,160C274.3,181,343,235,411,218.7C480,203,549,117,617,106.7C685.7,96,754,160,823,160C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</div>
@endsection