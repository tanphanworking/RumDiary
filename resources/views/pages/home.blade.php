@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative h-screen flex items-center justify-center text-white">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
            {{-- Add your video source here --}}
            {{-- <source src="{{ asset('videos/hero-background.mp4') }}" type="video/mp4"> --}}
        </video>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold">More than Visuals - We build Stories.</h1>
        </div>
    </section>

    {{-- Short Introduction --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Who We Are
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                    Rum Diary is a creative studio that helps brands build their visual identity through the power of storytelling.
                </p>
            </div>
        </div>
    </section>

    {{-- Featured Highlights --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center">Featured Highlights</h2>
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                {{-- Case Study 1 --}}
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        {{-- Placeholder for case study image --}}
                        <img class="h-48 w-full object-cover" src="https://via.placeholder.com/500x300" alt="Cheese Coffee">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                Case Study
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    Cheese Coffee
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    Repositioning the brand for Gen Z with a fantasy, wonderland, and surreal style.
                                </p>
                            </a>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Case Study 2 --}}
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://via.placeholder.com/500x300" alt="M Village">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                Case Study
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    M Village
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    A lifestyle shoot for a co-living space with a nostalgic, Indochine art style.
                                </p>
                            </a>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Case Study 3 --}}
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://via.placeholder.com/500x300" alt="FEN Izakaya">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                Case Study
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    FEN Izakaya
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    A menu photoshoot inspired by 90s cooking games with a retro, pixel art style.
                                </p>
                            </a>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to dive in?</span>
                <span class="block text-indigo-600">Start your project today.</span>
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="/start-a-project" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Start Your Project
                    </a>
                </div>
                <div class="ml-3 inline-flex">
                     <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Discuss an Idea
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
