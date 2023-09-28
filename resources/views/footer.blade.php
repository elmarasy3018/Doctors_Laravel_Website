</main>
<footer>
    <nav>
        <div class="flex justify-around bg-white py-3">
            <div class="flex justify-center flex-col">
                <div><img src="{{ asset('logos/1.png') }}" alt="doctor" class="rounded-lg"></div>
            </div>
            <div class="flex justify-center flex-col">
                <div class="font-bold text-2xl pb-2">Contact Us</div>
                <div><i class="fa-solid fa-square-phone fa-lg"></i><span class="font-medium mx-2">0112 080
                        1199</span></div>
                <div><i class="fa-solid fa-square-phone fa-lg"></i><span class="font-medium mx-2">0122 883
                        3439</span></div>
                <div><i class="fa-solid fa-envelope fa-lg"></i><span
                        class="font-medium mx-2">info@drsamersamy.com</span>
                </div>
                <div><i class="fa-solid fa-location-dot fa-lg"></i><span class="font-medium mx-2">182 Omar Lotfy
                        Street Sporting, Alexandria</span></div>
            </div>
            <div class="flex justify-center flex-col">
                <div class="font-bold text-2xl pb-2">More Info</div>
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
    <nav class="bg-gray-100 border-gray-200">
        <div class="flex justify-around items-center p-2">
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
<script>
    const navbar = document.querySelector('.navbar');
    const logo1 = document.querySelector('.logo-1');
    const logo2 = document.querySelector('.logo-2');
    const ul = document.querySelector('.ul');
    window.addEventListener('scroll', () => {
        if (window.scrollY >= 48) {
            navbar.classList.add('bg-white');
            navbar.classList.add('shadow-2xl');
            navbar.classList.remove('top-5');
            navbar.classList.add('top-0');
            navbar.classList.remove('py-5');
            logo1.classList.add('hidden');
            logo2.classList.remove('hidden');
            ul.classList.add('text-blue-800');
            ul.classList.remove('text-white');
        } else {
            navbar.classList.remove('bg-white');
            navbar.classList.remove('shadow-2xl');
            navbar.classList.remove('top-0');
            navbar.classList.add('top-5');
            navbar.classList.add('py-5');
            logo1.classList.remove('hidden');
            logo2.classList.add('hidden');
            ul.classList.add('text-white');
            ul.classList.remove('text-blue-800');
        }
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/864870fe8f.js" crossorigin="anonymous"></script>
</body>

</html>
