@include('header')
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
            <h1 class="font-bold 2xl:text-6xl text-4xl mb-2">Dr. {{ $doctor->name }}</h1>
            <h1 class="font-semibold 2xl:text-4xl text-2xl 2xl:mb-8 mb-4">{{ $doctor->specialty }}</h1>
            <h1 class="font-semibold 2xl:text-xl text-base 2xl:mb-8 mb-4">{{ $doctor->description }}</h1>
            <h1 class="2xl:text-2xl text-lg 2xl:mb-1">{{ $doctor->phone }}</h1>
            <h1 class="2xl:text-2xl text-lg mb-4">{{ $doctor->address }}</h1>
            <h1 class="font-semibold 2xl:text-2xl text-lg">{{ $doctor->email }}</h1>
        </div>
        <a href="{{ route('doctors.index') }}">
            <span
                class="px-4 py-2 bg-sky-500 hover:bg-sky-600 rounded-full font-semibold text-xl inline-block align-middle">
                Contact Us
            </span>
        </a>
    </div>
</div>
@include('footer')
