@extends('layouts.app')

@section('content')
    <div class="bg-white">
        {{-- Mission & Vision --}}
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 font-serif">Our Mission & Vision</h2>
                <p class="mt-4 text-lg text-gray-500">
                    Our vision is to become Vietnam's top visual storytelling studio. Our mission is to tell brand stories boldly and create distinctive worlds for every brand.
                </p>
            </div>
        </div>

        {{-- Why Us --}}
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 font-serif">Why Us</h2>
                </div>
                <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-slate-800 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Insights-First Creativity</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    We start with deep insights to ensure our creative work is not just beautiful, but also effective.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-slate-800 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Strategic Vision</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    We provide a strategic vision that helps brands navigate the competitive landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-slate-800 rounded-md shadow-lg">
                                      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l-3 3m0 0l-3-3m3 3V3m0 18v-4m-3 3l3-3m0 0l3 3m-3-3v4" />
                                      </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Distinctive Worlds</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Our ability to create "distinctive worlds" for every brand sets us apart.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Our Team --}}
        <div class="bg-white">
            <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12">
                    <h2 class="text-3xl font-extrabold tracking-tight text-center sm:text-4xl font-serif">Meet our team</h2>
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-8">
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1509967419530-da38b4704bc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Portrait of Thư Huỳnh">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Thư Huỳnh</h3>
                                    <p class="text-slate-600">Creative Director</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Portrait of Phan Thanh Tân">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Phan Thanh Tân</h3>
                                    <p class="text-slate-600">Art Director</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Portrait of Jolie">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Jolie</h3>
                                    <p class="text-slate-600">Producer</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Portrait of Phạm Quốc Tuấn">
                                </div>
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>Phạm Quốc Tuấn</h3>
                                    <p class="text-slate-600">Account Manager</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Our Process --}}
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <h2 class="text-3xl font-extrabold text-gray-900 text-center font-serif">Our Process</h2>
                <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <h3 class="text-lg font-medium text-gray-900">1. Deep Insights</h3>
                        <p class="mt-2 text-base text-gray-500">We dive deep to understand your brand, audience, and goals.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-medium text-gray-900">2. Brand DNA Direction</h3>
                        <p class="mt-2 text-base text-gray-500">We define the core direction for your brand's visual identity.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-medium text-gray-900">3. Crafting Brand Personality</h3>
                        <p class="mt-2 text-base text-gray-500">We bring your brand to life with a unique personality and voice.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-medium text-gray-900">4. Execution</h3>
                        <p class="mt-2 text-base text-gray-500">We execute with precision and a commitment to excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
