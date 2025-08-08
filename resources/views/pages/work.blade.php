@extends('layouts.app')

@section('content')
<div class="bg-white">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-base font-semibold text-slate-600 tracking-wide uppercase">Portfolio</h2>
      <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl font-serif">Our Work</p>
      <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Each project is a story we are proud to tell. Explore our case studies to see how we bring brand visions to life.</p>
    </div>
  </div>
</div>

<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200 transform transition duration-500 hover:scale-105">
                <div class="flex-1 flex flex-col p-8">
                    <img class="w-full h-48 object-cover mx-auto flex-shrink-0" src="https://via.placeholder.com/500x300" alt="Cheese Coffee Project">
                    <h3 class="mt-6 text-gray-900 text-sm font-medium">Cheese Coffee</h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-gray-500 text-sm">F&B Industry</dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="w-0 flex-1 flex">
                            <a href="/work/cheese-coffee" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                <span class="ml-3">View Case Study</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

             <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200 transform transition duration-500 hover:scale-105">
                <div class="flex-1 flex flex-col p-8">
                    <img class="w-full h-48 object-cover mx-auto flex-shrink-0" src="https://via.placeholder.com/500x300" alt="M Village Project">
                    <h3 class="mt-6 text-gray-900 text-sm font-medium">M Village</h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-gray-500 text-sm">Lifestyle / Co-living</dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="w-0 flex-1 flex">
                            <a href="/work/m-village" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                <span class="ml-3">View Case Study</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

             <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200 transform transition duration-500 hover:scale-105">
                <div class="flex-1 flex flex-col p-8">
                    <img class="w-full h-48 object-cover mx-auto flex-shrink-0" src="https://via.placeholder.com/500x300" alt="FEN Izakaya Project">
                    <h3 class="mt-6 text-gray-900 text-sm font-medium">FEN Izakaya</h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-gray-500 text-sm">F&B Industry</dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="w-0 flex-1 flex">
                            <a href="/work/fen-izakaya" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                <span class="ml-3">View Case Study</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection
