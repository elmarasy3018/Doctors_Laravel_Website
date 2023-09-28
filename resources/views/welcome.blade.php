@include('header')
<div class="hero">
    <div class="head bg-[url('https://www.samer.treeegypt.com/assets/img/hero-bg.jpg')]">
        <div class="grid grid-cols-2 grid-rows-1 pt-40 pb-36">
            <div></div>
            <div>
                <span class="text-white text-6xl font-semibold">Dr. Samer Samy</span><br><br>
                <span class="text-sky-100 text-2xl font-medium">Neurosurgery Fellow, Consultant, and Chief at the
                    Neurosurgery Department of Alexandria University Student Hospital in Egypt. Consultant Spine Surgeon
                    at Smouha University Hospital and a Consultant Neurosurgeon at Alexandria Medical Center.
                </span>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="grid grid-cols-2 grid-rows-1">
            <div class="bg-[url('https://www.samer.treeegypt.com/assets/img/about-us.jpg')]"></div>
            <div class="px-14 py-20 bg-white text-neutral-800">
                <span class="text-4xl font-semibold">Know more about Dr. Samer Samy</span><br>
                <span class="text-3xl font-semibold">And when he gets his degrees?</span><br><br>
                <span class="text-xl font-medium">
                    M.B, B.Ch. of Medicine and Surgery at the Faculty of Medicine, Alexandria University in Egypt
                    between 1993-1999. Earned a Master's Degree in Surgery between 2001-2004 and a Doctorate Degree in
                    Neurosurgery between 2004-2010, both from the Neurosurgery Department at the Faculty of Medicine,
                    Alexandria University in Egypt.
                </span><br><br>
                <span class="text-2xl font-semibold">Alex Neuro Spine - Dr. Samer Samy</span>
            </div>
        </div>
    </div>
    <div class="leg"></div>
</div>
<div class="carousel">
    <div class="m-10">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach ($doctors as $doctor)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="grid 2xl:grid-cols-10 grid-cols-2 w-full h-56 md:h-96">
                                <div class="flex 2xl:justify-center justify-end 2xl:col-span-4">
                                    <img src="{{ asset($doctor->image) }}" alt="doctor"
                                        class="h-56 md:h-96 rounded-lg">
                                </div>
                                <div class="pt-10 2xl:pr-20 px-5 pr-8 text-white 2xl:col-span-6">
                                    <h1 class="font-bold 2xl:text-6xl text-4xl mb-2">Dr. {{ $doctor->name }}
                                    </h1>
                                    <h1 class="font-semibold 2xl:text-4xl text-2xl 2xl:mb-8 mb-4">
                                        {{ $doctor->specialty }}</h1>
                                    <h1 class="font-semibold 2xl:text-xl text-base 2xl:mb-8 mb-4">
                                        {{ $doctor->description }}</h1>
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>
<div class="news">
    <div class="grid grid-cols-2 gap-10 p-10 px-16 2xl:px-36 bg-white text-neutral-800">
        <div>
            <img src="{{ asset('images/brain-tumor.jpg') }}" class="rounded-lg 2xl:h-auto 2xl:w-10/12">
            <p class="pt-3">
                <span class="font-medium text-base">January 18, 2023</span><br>
                <span class="font-bold text-3xl">Navigating the Spectrum of Spine Problems: A
                    Comprehensive Medical Overview</span><br>
                <span class="font-semibold text-lg">The spine, a remarkable structure supporting our
                    body and facilitating movement, is susceptible to a
                    variety of complex medical issues. From degenerative conditions to traumatic injuries, spine
                    problems can significantly impact one's quality of life. In this blog post.</span>
            </p>
        </div>
        <div class="flex flex-col justify-between">
            <div class="flex">
                <img src="{{ asset('images/headache-types.jpg') }}"class="h-48 w-74 rounded-lg">
                <p class="pl-5"><span class="font-medium 2xl:text-base text-sm">January 18,
                        2023</span><br>
                    <span class="font-bold 2xl:text-2xl text-lg">Understanding Different Types of
                        Headaches:
                        AMedical Overview</span>
                </p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/brain-tumor.jpg') }}" class="h-48 w-74 rounded-lg">
                <p class="pl-5"><span class="font-medium 2xl:text-base text-sm">January 18,
                        2023</span><br>
                    <span class="font-bold 2xl:text-2xl text-lg">Navigating the Landscape of Brain
                        Tumor Types: A
                        Comprehensive Medical Guide</span>
                </p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/headache-types.jpg') }}" class="h-48 w-74 rounded-lg">
                <p class="pl-5"><span class="font-medium 2xl:text-base text-sm">January 18,
                        2023</span><br>
                    <span class="font-bold 2xl:text-2xl text-lg">Navigating the Spectrum of Spine
                        Problems: A
                        Comprehensive Medical Overview</span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="maps">
    <div class="flex justify-around bg-neutral-800 p-5">
        <div class="p-5 border border-white m-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6824.163098336363!2d29.932468000000004!3d31.218469999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c4895be55f8d%3A0xa69ba7a8c6faf5ca!2zRHIuIFNhbWVyIFNhbXkg2K8u2LPYp9mF2LEg2LPYp9mF2Yo!5e0!3m2!1sen!2seg!4v1695802183324!5m2!1sen!2seg"
                width="500" height="375" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="p-5 border border-white m-5">
            <div id="default-carousel" class="relative w-full text-center" data-carousel="slide"
                style="width:500px; height:375px;">
                <!-- Carousel wrapper -->
                <span class="text-white font-medium text-4xl">Testimonials</span>
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-center bg-white rounded-lg py-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span><br><br>
                            <span class="font-medium">
                                دكتور فوق الممتاز لا غبار عليه وعنده ضمير عكس دكاتره كتير مشهوره فسكندريه بدون ذكر
                                اسماء وعمرى ما قولت لحد يروحله ألا ورجع يدعيلي والله من فرحته بالتحسن ..احنا معاه من
                                سنيييين الحمد لله وربنا كتب الشفاء علي ايده 🤍🤍💚💚
                            </span><br><br>
                            <span class="font-semibold">Mohamed Mostafa</span><br>
                            <span>1 year ago</span>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-center bg-white rounded-lg py-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span><br><br>
                            <span class="font-medium">Great Doctor</span><br><br>
                            <span class="font-semibold">Ali Ali</span><br>
                            <span>2 year ago</span>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-center bg-white rounded-lg py-5">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span><br><br>
                            <span class="font-medium">
                                دكتور محترم جدا وشاطر ،،،،
                                العيادة نظيفة جدا ،،،،
                                المواعيد مظبوطة ،،،،
                            </span><br><br>
                            <span class="font-semibold">Mohamed Ahmed</span><br>
                            <span>1 year ago</span>
                        </div>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="hidden absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
                    class="hidden absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
</div>
@include('footer')
