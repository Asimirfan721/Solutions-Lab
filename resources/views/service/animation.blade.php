@extends('layouts.app')

@section('title', 'Animation Services')

@section('content')
<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/animation.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">Top Tier Animation </h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
            Whether it's 2D, 3D, whiteboard, or motion graphics — we bring your stories to life with stunning visuals and engaging motion.
        </p>
    </div>
</section>

        <!-- Overview -->
        <div class="bg-white shadow-md rounded-lg p-8 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Choose Our Animation Services?</h2>
            <p class="text-gray-700 mb-4">
                At <strong>Instant Solutions Lab</strong>, we help brands create unforgettable visual content. Our animations boost your marketing, clarify your messaging, and give your brand a voice in motion.
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>Highly customized animation services for every industry</li>
                <li>Creative storytelling that resonates with your audience</li>
                <li>End-to-end production—from storyboard to delivery</li>
                <li>On-trend visuals using cutting-edge tools and techniques</li>
            </ul>
        </div>

        <!-- Animation Types -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Animation Capabilities</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    '2D Character Animation',
                    '3D Animation',
                    'Whiteboard Explainers',
                    'Motion Graphics',
                    'Commentary Videos',
                    'Live-Action Integration'
                ] as $type)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
                    <h3 class="text-red-600 font-bold text-lg">{{ $type }}</h3>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Our Process -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Animation Process</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-gray-700">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-red-600 font-semibold mb-2">1. Concept & Planning</h4>
                    <p>Visual storytelling, moodboards, and sketches to plan your video narrative.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-red-600 font-semibold mb-2">2. Production</h4>
                    <p>Illustration, keyframing, transitions, and syncing with voice/music.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h4 class="text-red-600 font-semibold mb-2">3. Post-Production</h4>
                    <p>Final polishing, audio mastering, visual tweaks, and export in required formats.</p>
                </div>
            </div>
        </div>

        <!-- Tools & Tech -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tools We Use</h2>
            <div class="flex flex-wrap gap-3 text-sm text-gray-700">
                @foreach(['Adobe After Effects', 'Adobe Photoshop', 'ZBrush', 'Blender', 'Premiere Pro'] as $tool)
                    <span class="bg-gray-100 px-4 py-2 rounded-full shadow-sm">{{ $tool }}</span>
                @endforeach
            </div>
        </div>

        <!-- Tech Stack (if relevant) -->
        <div class="mb-12">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Supported Technologies</h3>
            <div class="flex flex-wrap gap-3 text-sm text-red-700">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                    <span class="bg-red-100 px-4 py-2 rounded-full">{{ $tech }}</span>
                @endforeach
            </div>
        </div>

        <!-- FAQs -->
        <div class="bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Frequently Asked Questions</h2>
            <div class="space-y-5 text-gray-700">
                <div>
                    <p class="font-semibold">What types of animations do you offer?</p>
                    <p>We offer 2D, 3D, whiteboard, explainer videos, live-action integrations, and motion graphics.</p>
                </div>
                <div>
                    <p class="font-semibold">How long does it take to complete an animation?</p>
                    <p>Depending on complexity, animations may take a few days to several weeks. Timelines are always shared upfront.</p>
                </div>
                <div>
                    <p class="font-semibold">What is your animation workflow?</p>
                    <p>It includes ideation, storyboarding, production (illustration + motion), post-production, and delivery.</p>
                </div>
                <div>
                    <p class="font-semibold">Do you provide revisions?</p>
                    <p>Yes, we include revision rounds to ensure your satisfaction with the final result.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
