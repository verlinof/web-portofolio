@extends('layouts.main')

@section('root')
    
<div class="flex justify-center items-center w-full h-screen bg-primary-color">
    <svg class=" absolute top-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
        fill="#0094C3" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,160C274.3,181,343,235,411,218.7C480,203,549,117,617,106.7C685.7,96,754,160,823,160C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>
    
    <div class="z-10 flex items-center md:w-[400px] lg:w-[500px] md:h-[450px] lg:h-[550px] p-7 lg:p-10 bg-white rounded-xl">        
        <div class="w-full">
            <p class="top-0 text-center text-2xl lg:text-3xl font-bold mb-8">Login</p>
            {{-- After Register --}}
            @if (session('pesan'))
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('pesan') }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>    
            @endif
            {{-- END After Register --}}

            <form action="/login" method="POST">
                @csrf
                <div class="mb-4 lg:mb-7">
                    <label for="username" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('username') text-red-500 @enderror dark:text-white">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('username') border-red-500 placeholder-red-400 @enderror" placeholder="Username" value="{{ old('username') }}">
                    <p class="text-red-500 text-[12px]">@error('username') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-4">
                    <label for="password" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('password') text-red-500 @enderror dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('password') border-red-500 placeholder-red-400 @enderror" placeholder="*****">
                    <p class="text-red-500 text-[12px]">@error('password') {{ $message }} @enderror</p>
                </div>
                <p class="font-normal text-sm">Doesn't have an Account? <a class="md:ms-1 font-semibold text-primary-color" href="/register">Register</a></p>
                <div class="flex items-start mb-8 lg:mb-12">
                </div>
                <button type="submit" class="text-white bg-primary-color hover:bg-secondary-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Login</button>
                @if (session('login_failed'))
                    <p class="text-red-500 text-[12px]">{{ session('login_failed') }}</p>
                @endif
            </form>
        </div>
    </div>

    <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0094C3" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,160C274.3,181,343,235,411,218.7C480,203,549,117,617,106.7C685.7,96,754,160,823,160C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</div>

@endsection