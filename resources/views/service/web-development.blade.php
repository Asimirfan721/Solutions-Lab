@extends('layouts.app')

@section('title', 'Web Application Development')

@section('content')
<!-- Hero Section with Background Image -->
<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/website-development.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">Web Application Development</h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
            We design websites that are appealing, user-friendly, and performance-driven to help you achieve results that matter.
        </p>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">
        <!-- Why Hire Section -->
        <div class="bg-white rounded-lg shadow-md p-6 md:p-10 mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Hire the Best Web App Development Company?</h2>
            <p class="text-gray-700 mb-4">
                Your website is your digital front door — the first impression for your audience. At <strong>Instant Solutions Lab</strong>, we ensure it's a memorable one.
            </p>
            <p class="text-gray-700 mb-4">
                Our customized, responsive, and visually striking designs ensure your brand captures attention and drives results. We focus on performance, user experience, and impact.
            </p>
            <p class="text-gray-700">
                From SEO-optimized architecture to high-converting designs, we ensure your business is future-ready.
            </p>
        </div>

        <!-- Services Offered -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Our Web App Development Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Python', 'desc' => 'Structured and efficient web development.'],
                    ['title' => 'Laravel', 'desc' => 'Robust, modern PHP frameworks tailored for performance.'],
                    ['title' => 'PHP', 'desc' => 'Fully customized web applications with high scalability.'],
                    ['title' => 'Node.js', 'desc' => 'High-performance backend solutions.'],
                    ['title' => 'UX Design', 'desc' => 'Stunning and intuitive interfaces.']
                ] as $tech)
                <div class="bg-white shadow p-6 rounded-lg border hover:shadow-lg transition duration-200">
                    <h4 class="text-red-600 font-semibold text-lg mb-2">{{ $tech['title'] }}</h4>
                    <p class="text-gray-700">{{ $tech['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools Used -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Tools of the Trade</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-gray-700">
                @foreach([
                    'Mobile Technologies', 'UI/UX', 'Web & Hybrid',
                    'Backend & Database', 'Cloud & Push Notification', 'App Analytics & Payments'
                ] as $tool)
                <div class="bg-white p-4 rounded shadow text-center hover:shadow-md transition">{{ $tool }}</div>
                @endforeach
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Technologies</h3>
            <div class="flex flex-wrap gap-4 text-gray-700">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full shadow text-sm font-medium">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        <!-- FAQ -->
        <div class="bg-white rounded-lg shadow-md p-6 md:p-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">FAQs</h2>
            <p class="text-gray-800 font-semibold mb-2">What is Web Application Development?</p>
            <p class="text-gray-700">
                Web application development is the process of creating software that runs in web browsers.
                It includes planning, coding, testing, and deployment of interactive, dynamic, and functional platforms
                for businesses and users alike.
            </p>
        </div>
    </div>
</section>
@endsection
