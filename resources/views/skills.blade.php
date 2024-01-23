@extends('layouts.main')

@section('root')
@include('components.navbar')

<div class="p-8 md:p-6 lg:p-5">
</div>

<section class="px-5 w-full py-[15px] md:py-[30px]">
    <div class="max-w-6xl mx-auto flex flex-col gap-y-8">
        <h1 class="font-bold text-xl md:text-2xl text-center">SCOPE OF SKILL</h1>
        <div class="grid grid-cols-2 gap-x-3 lg:grid-cols-3 lg:gap-x-6 gap-y-12">
            {{-- Data --}}
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/frontend-development.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">Front End Development</p>
                <p class="font-semibold text-center">
                    Responsive Website, Fetch API, Interactive Website.
                </p>
            </div>
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/backend-development.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">Back End Development</p>
                <p class="font-semibold text-center">
                    Restful API, Busines Logic, SQL Database, NoSQL Database, Authentication, Etc.
                </p>
            </div>
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/mobile-development.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">Mobile Development</p>
                <p class="font-semibold text-center">
                    Fetch API, CRUD Application, Background App, Etc.
                </p>
            </div>
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/software-research.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">Software Research</p>
                <p class="font-semibold text-center">
                    Software Requirements, Tech Stack, Algorithm, Software Usage.
                </p>
            </div>
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/ui-design.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">UI Design</p>
                <p class="font-semibold text-center">
                    UI Design, Prototype, Wireframe.
                </p>
            </div>
            <div class="flex flex-col items-center gap-y-3">
                <img src="{{ asset("/img/skills/system-design.svg") }}" class="h-[45px] w-[45px] md:h-[50px] md:w-[50px]" alt="">
                <p class="font-bold text-center md:text-xl">System Design</p>
                <p class="font-semibold text-center">
                    Software Architecture, Technical Diagram, Database Design
                </p>
            </div>
        </div>
    </div>
</section>

<section class="px-5 w-full py-[15px] md:py-[30px]">
    <div class="max-w-6xl mx-auto flex flex-col gap-y-8">
        <h1 class="font-bold text-xl md:text-2xl text-center">TECH THAT I USED</h1>
        <div class="grid grid-cols-2 gap-x-3 lg:grid-cols-3 lg:gap-x-6 gap-y-12">
            <div class="items-center my-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/laravel-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/react-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/tailwind-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/bootstrap-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/kotlin-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/python-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/java-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/figma-icon.png") }}" alt="">
            </div>
            <div class="items-center my-auto mx-auto border-gray-500">
                <img class="w-max h-auto" src="{{ asset("img/tech/firebase-icon.png") }}" alt="">
            </div>
        </div>
    </div>

    </div>
</section>
@endsection