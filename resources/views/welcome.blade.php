<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
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
        <div>
            <h3>My Google Maps Demo</h3>
            <!--The div element for the map -->
            <div id="map"></div>

            <!-- prettier-ignore -->
            <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
            ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "beta"});</script>
            <script>
                // Initialize and add the map
                let map;
                async function initMap() {
                    // The location of Uluru
                    const position = {
                        lat: -25.344,
                        lng: 131.031
                    };
                    // Request needed libraries.
                    //@ts-ignore
                    const {
                        Map
                    } = await google.maps.importLibrary("maps");
                    const {
                        AdvancedMarkerElement
                    } = await google.maps.importLibrary("marker");

                    // The map, centered at Uluru
                    map = new Map(document.getElementById("map"), {
                        zoom: 4,
                        center: position,
                        mapId: "DEMO_MAP_ID",
                    });
                    // The marker, positioned at Uluru
                    const marker = new AdvancedMarkerElement({
                        map: map,
                        position: position,
                        title: "Uluru",
                    });
                }
                initMap();
            </script>
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
                    <a href=""><span
                            class="font-medium text-lg hover:text-blue-900 hover:underline">News</span></a>
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
    <script src="https://kit.fontawesome.com/864870fe8f.js" crossorigin="anonymous"></script>
</body>

</html>
