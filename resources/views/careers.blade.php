@extends('layouts.app')

@section('title', 'Careers')

<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/contact-us.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">CAREERS</h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
            Join the team that’s building the future. Explore current openings and become part of something meaningful.
        </p>
    </div>
</section>

<!-- Open Positions -->
<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-center text-3xl font-bold mb-10 text-red-600">Open Positions</h2>

        <div class="grid gap-8 md:grid-cols-2 max-w-6xl mx-auto">
            @foreach($jobs as $job)
            <div class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $job['title'] }}</h3>
                    <span class="text-sm font-medium text-red-500 uppercase tracking-wide">{{ $job['level'] }}</span>
                    <p class="text-gray-600 mt-3">{{ $job['description'] }}</p>
                </div>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-full text-sm">See Details</a>
                    <a href="#" class="bg-black hover:bg-gray-800 text-white font-semibold py-2 px-4 rounded-full text-sm">Apply Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
