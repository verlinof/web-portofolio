@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="p-8 md:p-6 lg:p-5">

</div>
@include('components.hero')
{{-- START About Me --}}
<div class="w-full bg-gray-100">
    <div class="p-3 md:p-10 ">
        <div>
            <p class="text-xl md:text-3xl text-center font-bold">About Me</p>
            <hr class="mt-1 w-24 md:w-36 mx-auto h-1 rounded-lg bg-primary-color">
        </div>
        <div class="p-3 lg:px-16 md:py-7 flex flex-wrap xl:flex-nowrap md:justify-around items-center">
            <img class="xl:mr-6 p-4 w-full md:w-96 rounded-3xl" src="{{ asset('/img/foto_diri.jpg') }}" alt="">
            <div class="xl:ml-9 font-semibold text-md md:text-2xl px-5 text-justify">
                Halo, perkenalkan, saya <span class="text-primary-color font-bold">Verlino Raya Fajri</span>, seorang mahasiswa di <span class="text-primary-color font-bold"> Universitas Gadjah Mada</span>, jurusan <span class="text-primary-color font-bold">Teknologi Rekayasa Perangkat Lunak</span>. Saya adalah individu yang selalu haus akan pengetahuan dan suka mengeksplorasi hal-hal baru, terutama dalam <span class="text-primary-color font-bold">dunia teknologi</span>. 
                Saya memiliki motivasi yang tinggi untuk menjadi seorang ahli di bidang pemrograman. Salah satu skill saya adalah kemampuan untuk <span class="text-primary-color font-bold">belajar dengan cepat</span> dan <span class="text-primary-color font-bold">kemampuan saya dalam memecahkan masalah</span>. Ini memungkinkan saya untuk menguasai berbagai bahasa pemrograman dan teknologi terkini. 
                Saat ini, saya memiliki keahlian dalam berbagai aspek pengembangan perangkat lunak, termasuk <span class="text-primary-color font-bold">front-end</span>, <span class="text-primary-color font-bold">back-end</span>, <span class="text-primary-color font-bold">database</span>, serta <span class="text-primary-color font-bold">algoritma</span>. Selain itu, saya juga memiliki keterampilan sosial yang baik. Saya dapat dengan <span class="text-primary-color font-bold">mudah berkolaborasi</span> dalam tim dan memiliki kemampuan <span class="text-primary-color font-bold">kepemimpinan yang kuat</span> ketika memimpin proyek.
            </div>
        </div>
    </div>
</div>
{{-- END About Me --}}
{{-- START Schools --}}
<div class="w-full">
    <div>
        <div class="p-3 md:p-10">
            <div>
                <p class="text-xl md:text-3xl text-center font-bold">Education</p>
                <hr class="mt-1 w-24 md:w-36 mx-auto h-1 rounded-lg bg-primary-color">
            </div>
            <div class="p-3 lg:px-16 md:py-7 flex flex-wrap justify-center lg:justify-between">
                {{-- Card --}}
                <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow p-3 my-3">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="{{ asset('/img/aby.jpeg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Smp IT Abu Bakar</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Lulus dengan nilai yang memuaskan, aktif di berbagai kegiatan dan organisasi,mengikuti perlombaan Paskibra 
                        </p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow p-3 my-3">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="{{ asset('/img/man3.jpeg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Man 3 Sleman</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Lulus dengan nilai yang memuaskan, mengikuti berbagai kegiatan dan juga organisasi, menjadi ketua divisi SDM di FKPO Sleman
                        </p>
                    </div>
                </div>

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
        </div>
    </div>
</div>
{{-- END Schools --}}
@endsection