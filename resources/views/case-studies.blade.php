@extends('layouts.app')

@section('title', 'Case Studies')

@section('content')
<!-- Hero Section -->
<section class="bg-black text-white py-16 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-red-600">Case Studies</h1>
        <p class="text-lg max-w-3xl mx-auto text-gray-300">
            Explore our transformative work in web & mobile development, custom software, and immersive digital experiences.
        </p>
    </div>
</section>

<!-- Case Studies Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-center text-3xl font-bold mb-10 text-red-600">Featured Projects</h2>

        <div class="grid gap-10 md:grid-cols-2 max-w-6xl mx-auto">
            <!-- CraveShare -->
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="{{ asset('images/craveshare.png') }}" alt="CraveShare" class="w-full h-56 object-cover">
                <div class="p-6 text-center">
                    <span class="text-sm font-medium text-white bg-red-600 px-3 py-1 rounded-full">Web Application</span>
                    <h3 class="text-2xl font-bold mt-4 text-gray-800">CraveShare</h3>
                    <p class="text-gray-600 mt-2">
                        An EMR system crafted to revolutionize mental health care with intuitive patient and doctor workflows.
                    </p>
                    <a href="{{ route('case-studies.show', 'emr-system') }}" class="inline-block mt-6 bg-black text-white px-6 py-2 rounded-full font-semibold hover:bg-red-600 transition">
                        View Case Study
                    </a>
                    
                </div>
            </div>

            <!-- HRP -->
            <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition duration-300">
                <img src="{{ asset('images/hrp.png') }}" alt="HRP" class="w-full h-56 object-cover">
                <div class="p-6 text-center">
                    <span class="text-sm font-medium text-white bg-red-600 px-3 py-1 rounded-full">Mobile Application</span>
                    <h3 class="text-2xl font-bold mt-4 text-gray-800">Headache Relief Program (HRP)</h3>
                    <p class="text-gray-600 mt-2">
                        Designed to support millions with migraine relief via digital therapy, tracking, and analytics tools.
                    </p>
                    <a href="#" class="inline-block mt-6 bg-black text-white px-6 py-2 rounded-full font-semibold hover:bg-red-600 transition">
                        View Case Study
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
