@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="p-8 md:p-6 lg:p-5">
</div>

<div class="w-full flex flex-wrap justify-center p-5">
    <div class="w-full mb-3">
        <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Tambah Postingan</a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 w-full">
        <div>
            @if (count($posts) > 0)
            @foreach ($posts as $post)
            <a href="">
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            </a>
            @endforeach
            @else
            <h1 class="font-semibold text-xl">Tidak ada data.</h1>
            @endif
        </div>
    </div>
    <div class="flex">
        {{ $posts->links() }}
    </div>

</div>
@endsection