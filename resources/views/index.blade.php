@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="https://tailwindcss.com/img/card-left.jpg"
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="card"></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    <div class="flex item-center text-gray-400 text-sm mt-1">
                        <svg class="fill-currenr text-orange-500 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
