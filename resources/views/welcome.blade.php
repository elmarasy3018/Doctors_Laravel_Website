<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    </style>
</head>

<body class="bg-gray-600">

    <header>
        <nav class="bg-white border-gray-200">
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
        <div class="videos">
            <div class="m-5">
                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden md:h-96">
                        @foreach ($doctors as $doctor)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <div class="grid grid-cols-2 w-full h-56 md:h-96 mx-5">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset($doctor->image) }}" alt="doctor" class="h-56 md:h-96 rounded-lg">
                                    </div>
                                    <div class="pt-10 text-white mr-24">
                                        <h1 class="font-bold 2xl:text-6xl text-4xl mb-2">Dr. {{ $doctor->name }}</h1>
                                        <h1 class="font-semibold 2xl:text-4xl text-2xl 2xl:mb-8 mb-4">{{
                                            $doctor->specialty }}</h1>
                                        <h1 class="font-semibold 2xl:text-xl text-base 2xl:mb-8 mb-4">{{
                                            $doctor->description }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="bg-neutral-900 text-neutral-50">
                <div id="app"
                    class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
                    <h1 class="font-cabinetGrotesk text-3xl lg:text-4xl font-bold mb-10 leading-tight text-center">
                        Latest
                        News</h1>
                    <div class="relative">
                        <div
                            class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                            <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                                <div class="w-full h-full object-cover grid grid-row-2">
                                    <img src="https://images.pexels.com/photos/9754/mountains-clouds-forest-fog.jpg?auto=compress&cs=tinysrgb&w=1600"
                                        alt="mountain_image">
                                    <img src="https://images.pexels.com/photos/9754/mountains-clouds-forest-fog.jpg?auto=compress&cs=tinysrgb&w=1600"
                                        alt="mountain_image">
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                            <button role="button"
                                class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                                aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                            <button role="button"
                                class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                                aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-around bg-neutral-800">
            <div class="p-5 border border-white m-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6824.163098336363!2d29.932468000000004!3d31.218469999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4895be55f8d%3A0xa69ba7a8c6faf5ca!2zRHIuIFNhbWVyIFNhbXkg2K8u2LPYp9mF2LEg2LPYp9mF2Yo!5e0!3m2!1sen!2seg!4v1695802183324!5m2!1sen!2seg"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="p-5 border border-white m-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6824.163098336363!2d29.932468000000004!3d31.218469999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4895be55f8d%3A0xa69ba7a8c6faf5ca!2zRHIuIFNhbWVyIFNhbXkg2K8u2LPYp9mF2LEg2LPYp9mF2Yo!5e0!3m2!1sen!2seg!4v1695802183324!5m2!1sen!2seg"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </main>
    <footer>
        <nav>
            <div class="flex justify-around bg-white">
                <div class="flex flex-col">
                    <div><img src="{{ asset('logos/1.png') }}" alt="doctor" class="rounded-lg"></div>
                    <div><i class="fa-solid fa-square-phone fa-lg"></i><span class="font-medium mx-2">0112 080
                            1199</span></div>
                    <div><i class="fa-solid fa-square-phone fa-lg"></i><span class="font-medium mx-2">0122 883
                            3439</span></div>
                    <div><i class="fa-solid fa-envelope fa-lg"></i><span
                            class="font-medium mx-2">info@drsamersamy.com</span></div>
                    <div><i class="fa-solid fa-location-dot fa-lg"></i><span class="font-medium mx-2">182 Omar Lotfy
                            Street Sporting, Alexandria</span></div>
                </div>
                <div class="flex flex-col">
                    <div class="font-bold text-2xl">Organizations</div>
                </div>
                <div class="flex flex-col">
                    <div class="font-bold text-2xl">More Info</div>
                    <a href=""><span class="font-medium text-lg hover:text-blue-900 hover:underline">News</span></a>
                    <a href=""><span class="font-medium text-lg hover:text-blue-900 hover:underline">About Dr.
                            Samer</span></a>
                    <a href=""><span class="font-medium text-lg hover:text-blue-900 hover:underline">National &
                            International Events</span></a>
                    <a href=""><span class="font-medium text-lg hover:text-blue-900 hover:underline">Publications
                            & Scientific Activities</span></a>
                </div>
            </div>
        </nav>
        <nav class="bg-white border-gray-200">
            <div class="flex justify-around items-center p-3">
                <div>
                    <a href="https://www.facebook.com/AlexNeuroSpine" target="_blank"><i
                            class="fa-brands fa-square-facebook fa-lg mx-2"></i></a>
                    <a href="https://www.instagram.com/alexneurospine/" target="_blank"><i
                            class="fa-brands fa-instagram fa-lg mx-2"></i></a>
                    <a href="https://www.youtube.com/@AlexNeuroSpine" target="_blank"><i
                            class="fa-brands fa-youtube fa-lg mx-2"></i></a>
                </div>
                <div>
                    <span class="font-medium mx-2 mr-4">Designed and Developed By Mohamed EL Marasy</span>
                </div>
            </div>
        </nav>
    </footer>
    <script>
        const slidesContainer = document.querySelector(".slides-container");
        const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");
        nextButton.addEventListener("click", () => {
            slidesContainer.scrollLeft += slideWidth;
        });
        prevButton.addEventListener("click", () => {
            slidesContainer.scrollLeft -= slideWidth;
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/864870fe8f.js" crossorigin="anonymous"></script>
</body>

</html>