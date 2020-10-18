@extends('layouts.main')

@section('content')
<!-- movi-info -->
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img class="w-64 md:w-96" style="width:24rem" src="https://tailwindcss.com/img/card-left.jpg" alt="img-card">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap item-center text-gray-400 text-sm">
                <svg class="fill-currenr text-orange-500 my-auto w-4 h-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                    </path>
                </svg>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
                <span class="mx-2">|</span>
                <span>Action, Thriller, Drama</span>
            </div>
            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis tempore magni, nulla maiores at dicta
                officiis totam, quia sint nisi optio perspiciatis fugit. Quaerat repudiandae itaque earum incidunt, odit
                eveniet officiis quia natus quam! Voluptates consequuntur libero animi deserunt alias, harum, quae ea
                reprehenderit dignissimos itaque, amet maiores rem quod?
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div class="">Bong Joon-ho</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                    <div class="ml-8">
                        <div class="">Han Jin-won</div>
                        <div class="text-sm text-gray-400">
                            Screenplay
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button
                    class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition eas-in-out dutration-150">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>
</div> <!-- !end movi-info -->
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    <div class="text-gray-400 text-sm">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    <div class="text-gray-400 text-sm">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    <div class="text-gray-400 text-sm">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    <div class="text-gray-400 text-sm">
                        John Smith
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    <div class="text-gray-400 text-sm">
                        John Smith
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
