@extends('layouts.app')

@section('title', 'Mobile App Development')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-red-600 mb-4">Mobile App Development Services</h1>
            <p class="text-gray-700 text-lg max-w-3xl mx-auto">
                Our expert developers deliver seamless iOS and Android apps—from idea to execution—with performance, design, and security in mind.
            </p>
        </div>

        <!-- Why Choose Us -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Us?</h2>
            <p class="text-gray-700 mb-3">
                Instant Solutions Lab specializes in full-cycle mobile app development including UI/UX design, native & cross-platform apps, app testing, and launch strategies.
            </p>
            <p class="text-gray-700 mb-3">
                Our apps integrate cutting-edge tech like AR, VR, AI, and IoT, ensuring smooth performance, secure backends, and third-party system integration.
            </p>
            <p class="text-gray-700">
                <strong class="text-red-600">We follow the 3D Rule:</strong> Design Artistically, Develop Proficiently, Deliver Reliably.
            </p>
        </div>

        <!-- Services Offered -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Our Mobile App Development Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['title' => 'UI/UX Strategy', 'desc' => 'Design user-friendly interfaces for an optimal experience.'],
                    ['title' => 'Skilled Mobile Developers', 'desc' => 'Custom mobile app solutions built to meet your vision.'],
                    ['title' => 'Tailored App Development', 'desc' => 'Develop powerful apps using native & hybrid tools.'],
                    ['title' => 'REST API Integration', 'desc' => 'Enable scalable and flexible backend architecture.']
                ] as $service)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-red-600 text-lg font-semibold mb-2">{{ $service['title'] }}</h4>
                    <p class="text-gray-700">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools & Technologies -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Tools of the Trade</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center text-gray-700">
                @foreach([
                    'Mobile Technologies', 'UI/UX', 'Web & Hybrid',
                    'Backend & Database', 'Cloud & Push Notification', 'App Analytics & Payments'
                ] as $tool)
                <div class="bg-white p-4 rounded shadow hover:shadow-md transition">{{ $tool }}</div>
                @endforeach
            </div>
        </div>

        <!-- Tech Stack -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Technologies We Use</h3>
            <div class="flex flex-wrap gap-4">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full shadow text-sm font-medium">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        <!-- FAQs -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">FAQs</h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <p class="font-semibold">What is mobile application development?</p>
                    <p>
                        It’s the process of designing, building, and deploying software that runs on mobile platforms like Android & iOS,
                        providing functional, engaging, and scalable applications for users.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
