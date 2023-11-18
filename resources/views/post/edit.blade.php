@extends('layouts.main')

@section('root')
@include('components.navbar')  

<div class="w-full flex justify-center">
    <div class="flex items-center md:w-[400px] lg:w-[500px] h-max p-8 md:p-9 lg:p-10 bg-white rounded-xl">
        <div class="w-full">
            <p class="top-0 text-center text-xl md:text-2xl lg:text-3xl font-bold mb-6">Edit Postingan</p>
            <form action="{{ route('posts.update', ["id" => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2 lg:mb-2">
                    <label for="title" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('title') text-red-500 @enderror">Title</label>
                    <input name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('title') border-red-500 placeholder-red-400 @enderror" placeholder="A Title of image" value="{{ $post->title }}">
                    <p class="text-red-500 text-[12px]">@error('title') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="description" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('description') text-red-500 @enderror">Description</label>
                    <input name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 lg:p-4 @error('description') border-red-500 placeholder-red-400 @enderror" placeholder="Description of the image" value="{{ $post->description }}">
                    <p class="text-red-500 text-[12px]">@error('description') {{ $message }} @enderror</p>
                </div>
                <div class="mb-2 lg:mb-2">
                    <label for="image" class="block mb-2 text-sm lg:text-lg font-medium text-gray-900 @error('image') text-red-500 @enderror">Image</label>
                    <input name="image" type="file" accept="image/*" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full @error('image') border-red-500 placeholder-red-400 @enderror"value="{{ old('image') }}">
                    <p class="text-red-500 text-[12px]">@error('image') {{ $message }} @enderror</p>
                </div>
                <div class="mb-8 lg:mb-10">
                </div>
                <button type="submit" class="text-white bg-primary-color hover:bg-secondary-color focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:text-lg w-full py-2.5 text-center">Edit</button>
            </form>
        </div>
    </div>
</div>

@endsection