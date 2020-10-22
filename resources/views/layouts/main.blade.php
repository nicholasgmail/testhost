<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movi App</title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col sm:flex-row  items-center justify-between px-4 py-6">
            <ul class="flex flex-col sm:flex-row items-center">
                <li><a href="{{ route('index')}}" class="text-2xl"><svg class="w-6 inline mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                            </path>
                        </svg>MovieApp</a></li>
                <li class="md:ml-16 mt-3 md:mt-0"><a href="{{ route('index')}}" class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>
            <div class="flex flex-wrap item-center justify-center">
                    <livewire:search-dropdown>
                <div class="ml-4 mt-3 md:mt-0">
                    <a href="#"><img src="https://tailwindcss.com/img/jonathan.jpg" class="rounded-full w-8 h-8"
                            alt="avatar"></a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts>
</body>

</html>
