@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="p-8 md:p-6 lg:p-5">
</div>

<section class="w-full">
    <div class="p-3 md:px-24">
        <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow p-3 my-3">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{ asset('/img/tilc.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Universitas Gadjah Mada</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    IPS diatas 3.5, mengikuti berbagai UKM dan Perlombaan, mempelajari banyak bahasa pemrograman, mempelajari framework web dan mobile app
                </p>
            </div>
        </div>
    </div>
</section>

@endsection