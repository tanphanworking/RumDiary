@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
        <div class="max-w-3xl mx-auto">
            {{-- This is a simplified version. A real app would fetch this data dynamically. --}}
            @if($slug == 'cheese-coffee')
                <h1 class="text-4xl font-extrabold text-gray-900 font-serif">Cheese Coffee</h1>
                <p class="mt-2 text-xl text-gray-500">Industry: F&B</p>
                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-900 font-serif">Challenges & Objectives</h2>
                    <p class="mt-4 text-lg text-gray-500">The main challenge was to reposition the Cheese Coffee brand to appeal to a Gen Z audience. The objective was to create a "wonderland" and "surreal" visual style that would stand out.</p>
                </div>
                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-900 font-serif">Creative Storytelling & The Big Idea</h2>
                    <p class="mt-4 text-lg text-gray-500">The big idea was to create a whimsical and magical world for the brand, using storytelling to engage the audience. We focused on creating a fantasy-like experience.</p>
                </div>
                <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-900 font-serif">Outcome</h2>
                    <p class="mt-4 text-lg text-gray-500">The campaign resulted in a 350% increase in organic reach, successfully capturing the attention of the target audience.</p>
                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <img src="https://via.placeholder.com/600x400" alt="Project image 1" class="rounded-lg">
                        <img src="https://via.placeholder.com/600x400" alt="Project image 2" class="rounded-lg">
                    </div>
                </div>
                 <div class="mt-8">
                    <h2 class="text-2xl font-bold text-gray-900 font-serif">Client and Community Feedback</h2>
                    <blockquote class="mt-6 border-l-4 border-slate-200 pl-4 italic">
                        <p class="text-xl text-slate-600">"The new visual identity is a game-changer for us. Rum Diary's team truly understood our vision."</p>
                        <footer class="mt-4 font-semibold text-slate-800">- Client</footer>
                    </blockquote>
                </div>
            @elseif($slug == 'm-village')
                {{-- Content for M Village --}}
                <h1 class="text-4xl font-extrabold text-gray-900 font-serif">M Village</h1>
                <p class="mt-2 text-xl text-gray-500">Industry: Lifestyle / Co-living</p>
            @else
                 {{-- Content for FEN Izakaya --}}
                 <h1 class="text-4xl font-extrabold text-gray-900 font-serif">FEN Izakaya</h1>
                 <p class="mt-2 text-xl text-gray-500">Industry: F&B</p>
            @endif

            <div class="mt-12">
                <a href="/work" class="text-base font-semibold text-slate-600 hover:text-slate-500">Back to Our Work</a>
            </div>
        </div>
    </div>
</div>
@endsection

