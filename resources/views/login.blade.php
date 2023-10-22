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
            <form>
                <div class="mb-4 lg:mb-7">
                    <label for="email" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4" placeholder="Verlinof" required>
                </div>
                <div class="mb-2 lg:mb-4">
                    <label for="password" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4" placeholder="********" required>
                </div>
                <p class="font-normal text-sm">Doesn't have an Account? <a class="md:ms-1 font-semibold text-primary-color" href="/register">Register</a></p>
                <div class="flex items-start mb-8 lg:mb-12">
                </div>
                <button type="submit" class="text-white bg-primary-color hover:bg-secondary-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Login</button>
            </form>
        </div>
    </div>

    <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0094C3" fill-opacity="1" d="M0,160L34.3,154.7C68.6,149,137,139,206,160C274.3,181,343,235,411,218.7C480,203,549,117,617,106.7C685.7,96,754,160,823,160C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</div>

@endsection