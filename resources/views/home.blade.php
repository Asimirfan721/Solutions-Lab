@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-black text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-red-500 text-xl font-semibold mb-4">Where Ingenuity Meets Renovation</h3>
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
            We Take Care of your <br>
            <span class="text-red-600">App Development</span><br>
            Digital Needs
        </h1>
        <div class="mt-6 flex justify-center gap-4">
            <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full">
                LET’S TURN THAT IDEA INTO REALITY
            </a>
            <a href="#" class="bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-full">
                READY TO TALK BUSINESS?
            </a>
        </div>
    </div>

    <!-- Social Sidebar -->
   <div class="fixed top-1/3 right-0 z-50 flex flex-col items-center space-y-3">
    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded">
        <i class="fab fa-facebook-f text-black"></i>
    </a>
    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded">
        <i class="fab fa-linkedin-in text-black"></i>
    </a>
    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded">
        <i class="fab fa-youtube text-black"></i>
    </a>
    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded">
        <i class="fab fa-instagram text-black"></i>
    </a>
</div>
</section>

<!-- Services Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-center text-red-600 text-xl font-semibold mb-2">Comprehensive Digital Solution</h2>
        <h3 class="text-center text-3xl md:text-4xl font-bold mb-10">Where Ingenuity Meets Renovation</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
            <div class="bg-white border p-6 shadow hover:shadow-lg transition">
                <div class="text-4xl text-red-600 mb-4">
                    {!! $service->icon !!} <!-- icon HTML from DB -->
                </div>
                <h4 class="font-bold text-lg mb-2">{{ $service->title }}</h4>
                <p class="text-gray-600 text-sm">{{ $service->description }}</p>
               <a href="{{ $service->link }}" class="text-red-600 mt-3 inline-block font-semibold">Learn More</a>

            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Chat Button -->
<div class="fixed bottom-6 right-6 z-50">
    <button class="bg-red-600 hover:bg-red-700 text-white p-4 rounded-full shadow-lg">
        <i class="fas fa-comments"></i>
    </button>
</div>
@endsection
