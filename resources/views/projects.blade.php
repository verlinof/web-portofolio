@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="p-8 md:p-6 lg:p-5">
</div>

<section class="w-full py-[15px] md:py-[25px]">
    <h1 class="font-bold text-xl md:text-2xl text-center">PROJECTS</h1>
    <div class="p-3 lg:px-20 xl:px-32 md:py-7 grid grid-cols-1 gap-x-5 gap-y-3 md:grid-cols-2 lg:grid-cols-3 lg:gap-x-10 lg:gap-y-8">
        {{-- Card --}}
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/police information system.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Police Information System</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Java</span> and <span class="text-primary-color">MySQL</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        This Police Information System is a desktop application that uses Java and MySQL and is used to record various criminal records. This App can perform CRUD on the database
                    </p>
                </div>
                <a href="#" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text- transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/note-maker-api.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Note Maker API</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Laravel</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        API for Note App allow users to perform CRUD(Create, Read, Update, Delete) while Authorization for User, Multi-Level Role, Admin, etc.
                    </p>
                </div>
                <a href="https://github.com/verlinof/test-backend/tree/main" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/moviekuy.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">MovieKuy</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Kotlin</span> and <span class="text-primary-color">Firebase</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        MovieKuy is a mobile application that features CRUD functionalities for admin, authorization, multi-level roles, and it operates using Firebase as its backend.
                    </p>
                </div>
                <a href="https://github.com/verlinof/MovieKuy-update" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/web-monitoring.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Web Monitoring</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">React</span>,  <span class="text-primary-color">Matpotlib</span>, <span class="text-primary-color">Tailwind</span> and <span class="text-primary-color">Leaflet</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        This web monitoring system is used to monitor a rocket with constantly changing coordinates, detect sensors on the rocket, and gather data from a website API functioning as a web socket.
                    </p>
                </div>
                <a href="https://github.com/verlinof/web-monitoring" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/broiler-monitoring.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Broiler Monitoring</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Kotlin</span> and <span class="text-primary-color">Laravel</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        The Broiler Monitoring application is used for monitoring chicken coops. This application allows users to input daily coop data, view the coop's real-time condition, and receive notifications regarding the coop's status. The API itself is built using Laravel.
                    </p>
                </div>
                <a href="https://github.com/askar-ef/Broiler-Monitoring" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/broiler-monitoring-api.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Broiler Monitoring API</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Laravel</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        The Broiler Monitoring application is used for monitoring chicken coops. This application allows users to input daily coop data, view the coop's real-time condition, and receive notifications regarding the coop's status. The API itself is built using Laravel.
                    </p>
                </div>
                <a href="https://github.com/askar-ef/Broiler-Monitoring" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>
        <div class="bg-white border border-gray-300 rounded-lg shadow p-3">
            <div class="h-full flex flex-col justify-between">
                <div class="w-full h-44">
                    <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('/img/projects/blogkuy.png') }}" alt="" />
                </div>
                <div class="w-full h-full py-3 flex flex-col">
                    <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white">BlogKuy</h5>
                    <p class="my-2 font-semibold text-gray-700 dark:text-gray-400">
                        Built using <span class="text-primary-color">Laravel</span> and <span class="text-primary-color">Bootstrap</span>
                    </p>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">
                        BlogKuy is a website designed to allow users to create blogs, and others can view them on the main page of BlogKuy. This website is developed using Laravel and Bootstrap. However, the development of this website was discontinued due to consuming a significant amount of time.
                    </p>
                </div>
                <a href="https://github.com/verlinof/blogKuy" type="button" class="text-white w-full bg-gradient-to-r from-teal-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition ease-in-out duration-300">Project Details</a>
            </div>
        </div>

    </div>
</section>
@include('components.footer')
@endsection