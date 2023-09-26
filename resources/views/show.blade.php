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
            <img src="{{ asset( $doctor->image ) }}" alt="doctor" class="rounded-lg">
        </div>
        <div class="text-white flex flex-col justify-between" style="height:100%">
            <a href="{{route('doctors.index')}}"><span
                    class="px-3 py-1 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl inline-block align-middle">Home Page</span></a>
            <div>
                <span class="font-bold text-5xl">Dr. {{ $doctor->name }}</span><br>
                <span class="font-semibold text-3xl">{{ $doctor->specialty }}</span>
            </div>
            <span class="font-semibold text-2xl">{{ $doctor->email }}</span>
            <span class="text-xl">{{ $doctor->description }}</span>
            <span
                class="px-3 py-1 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl inline-block align-middle">Back</span>
        </div>
    </div>
</body>

</html>