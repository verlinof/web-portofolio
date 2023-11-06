@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="w-full mt-20 flex justify-center">
        <div class="flex flex-col items-center pb-10">
            <img class="w-28 h-28 mb-3 rounded-full shadow-lg" src="{{ asset('storage/'.$user->photo) }}" alt="Profile Picture">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->username }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{ route('edit-account') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Edit</a>
                <form action="{{ route('delete-account') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600 border border-gray-300 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-gray-200">Delete</button>
                </form>
            </div>
        </div>
</div>

@endsection