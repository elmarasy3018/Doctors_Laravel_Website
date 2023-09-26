<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-600">
    <div class="grid grid-cols-2 gap-10 m-10">
        <div>
            <img src="{{ asset($doctor->image) }}" alt="doctor" class="rounded-lg">
        </div>
        <div class="text-white flex flex-col justify-between" style="height:100%">
            <a href="{{ route('doctors.index') }}">
                <span
                    class="px-4 py-2 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl inline-block align-middle">
                    Home Page
                </span>
            </a>
            <div>
                <h1 class="font-bold text-6xl mb-2">Dr. {{ $doctor->name }}</h1>
                <h1 class="font-semibold text-4xl mb-8">{{ $doctor->specialty }}</h1>
                <h1 class="font-semibold text-xl mb-8">{{ $doctor->description }}</h1>
                <h1 class="text-2xl mb-1">{{ $doctor->phone }}</h1>
                <h1 class="text-2xl mb-4">{{ $doctor->address }}</h1>
                <h1 class="font-semibold text-2xl">{{ $doctor->email }}</h1>
            </div>
            <a href="{{ route('doctors.index') }}">
                <span class="px-4 py-2 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl">
                    Contact Us
                </span>
            </a>
        </div>
    </div>
</body>

</html>
