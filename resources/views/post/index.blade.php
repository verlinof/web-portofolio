@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="m-5">
    <a href="{{ route('posts.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Tambah Postingan</a>
</div>
<div class="p-5 flex w-full justify-center md:p-8 lg:p-5">
    @if (count($posts) > 0)
    <div class="grid w-full grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @foreach ($posts as $post)
        <div class="w-full">    
            <a href="{{ asset('storage/posts/image_square/'.$post["image"]) }}" data-lightbox="gallery" data-title="{{ $post["title"] }}">
                <img class="h-auto w-full rounded-lg" src="{{ asset('storage/posts/image_square/'.$post["image"]) }}" alt="">
            </a>
            <div class="flex mt-2 z-10 w-full justify-between">
                <a href="/posts/edit/{{ $post["id"] }}" class="px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Edit</a>
                <form action="{{ route('posts.destroy', ["id" => $post["id"]]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah anda ingin menghapus postingan ini?')" class="px-4 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-md hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <h1 class="font-semibold text-xl">Tidak ada data.</h1>
        @endif
    </div>

    {{-- <div class="flex">
        {{ $posts->links() }}
    </div> --}}

</div>
@endsection