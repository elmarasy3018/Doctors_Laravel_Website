<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors Website</title>
    @vite('resources/css/app.css')
    <style>
        .slides-container {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        .slides-container::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .navbar {
            transition: 100ms;
        }
    </style>
</head>

<body class="bg-neutral-800">
    <header>
        <nav class="bg-white border-gray-200 sticky top-0">
            <div class="flex justify-around items-center p-3">
                <div>
                    <i class="fa-solid fa-square-phone fa-lg"></i><span class="font-medium mx-2 mr-4">0122 883 3439 -
                        0112 080 1199</span>
                    <i class="fa-solid fa-envelope fa-lg"></i><span class="font-medium mx-2">info@drsamersamy.com</span>
                </div>
                <div>
                    <a href="https://www.facebook.com/AlexNeuroSpine" target="_blank"><i
                            class="fa-brands fa-square-facebook fa-lg mx-2"></i></a>
                    <a href="https://www.instagram.com/alexneurospine/" target="_blank"><i
                            class="fa-brands fa-instagram fa-lg mx-2"></i></a>
                    <a href="https://www.youtube.com/@AlexNeuroSpine" target="_blank"><i
                            class="fa-brands fa-youtube fa-lg mx-2"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <nav class="navbar fixed top-10 left-0 right-0 z-40">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('logos/2.png') }}" class="logo-1 h-16 mr-3" alt="Logo">
                    <img src="{{ asset('logos/1.png') }}" class="logo-2 h-16 mr-3 hidden" alt="Logo">
                </a>
                <div class="flex md:order-2">
                    <button type="button"
                        class="text-white px-4 py-2 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl inline-block align-middle">Contact Us</button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="ul text-white flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="{{ route('home') }}"
                                class="li block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-gray-300 md:p-0">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"
                                class="li block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-gray-300 md:p-0">About
                                Dr. Samer</a>
                        </li>
                        <li>
                            <a href="{{ route('doctors.index') }}"
                                class="li block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-gray-300 md:p-0">Publications
                                &amp; Scientific Activities</a>
                        </li>
                        <li>
                            <a href="{{ route('doctors.index') }}"
                                class="li block py-2 pl-3 pr-4 rounded md:hover:bg-transparent md:hover:text-gray-300 md:p-0">National
                                &amp; International Events</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
