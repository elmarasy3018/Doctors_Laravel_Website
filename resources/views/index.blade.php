<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-600">
    <div class="grid grid-cols-3 gap-10 m-10">
        @foreach ($doctors as $doctor)
            <a href="{{ route('doctors.show', ['doctor' => $doctor->id]) }}">
                <div class="relative hover:-translate-y-5 hover:scale-105 ease-in-out duration-300">
                    <img src="{{ asset($doctor->image) }}" alt="doctor" class="rounded-lg">
                    <div
                        class="info opacity-0 hover:opacity-100 bg-gradient-to-t from-sky-400 absolute bottom-0 top-0 right-0 left-0 rounded-lg">
                        <div class="grid grid-cols-1 absolute bottom-0 text-white ml-4 mb-2">
                            <span class="font-semibold text-2xl">Dr. {{ $doctor->name }}</span>
                            <span class="font-semibold">{{ $doctor->specialty }}</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</body>

</html>
