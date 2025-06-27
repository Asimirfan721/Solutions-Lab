@extends('layouts.app')

@section('title', 'Graphic Designing Services')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-red-600 mb-4">Graphic Designing Services</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                We craft powerful visual identities that communicate your brand’s purpose, vision, and value.
            </p>
        </div>

        <!-- Intro -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Us?</h2>
            <p class="text-gray-700 mb-3">
                Our design team blends creativity and business understanding to create visuals that resonate with your audience and leave a lasting impression.
            </p>
            <p class="text-gray-700 mb-3">
                As a top-tier visual design company, our mission is simple: 
                <span class="text-red-600 font-semibold">Create designs that stand apart and elevate brand value.</span>
            </p>
            <p class="text-gray-700">
                From basic logos to complete branding solutions, we deliver high-impact results with a personal touch—whether you’re a startup or an enterprise.
            </p>
        </div>

        <!-- Services -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Our Graphic Design Process</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Discovery', 'desc' => 'In-depth research and understanding of your business, goals, and audience.'],
                    ['title' => 'Concept Development', 'desc' => 'Initial design directions created to match your brand personality.'],
                    ['title' => 'Design Refinement', 'desc' => 'Iterative feedback process ensures the design is polished to perfection.'],
                    ['title' => 'Finalization', 'desc' => 'High-resolution design files with strong layout, typography, and harmony.'],
                    ['title' => 'Delivery', 'desc' => 'All formats delivered along with brand usage guidelines.']
                ] as $step)
                <div class="bg-white rounded-lg shadow p-6">
                    <h4 class="text-red-600 font-semibold mb-2">{{ $step['title'] }}</h4>
                    <p class="text-gray-700">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Tools & Expertise</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center text-gray-700">
                @foreach([
                    'Adobe Photoshop', 'Adobe Illustrator', 'Figma',
                    'Canva Pro', 'InDesign', 'Sketch'
                ] as $tool)
                <div class="bg-white p-4 rounded shadow hover:shadow-md transition">{{ $tool }}</div>
                @endforeach
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Technologies We Integrate</h3>
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
                    <p class="font-semibold">What is graphic design and why is it important?</p>
                    <p>It’s the art of communication through visuals—crucial for branding, marketing, and connecting with your audience.</p>
                </div>
                <div>
                    <p class="font-semibold">What design services do you offer?</p>
                    <p>Logo design, brand identity, brochures, packaging, social media kits, and more.</p>
                </div>
                <div>
                    <p class="font-semibold">How do you collaborate with clients?</p>
                    <p>We start with consultations, share drafts, gather feedback, and revise until satisfaction is achieved.</p>
                </div>
                <div>
                    <p class="font-semibold">How long does a project take?</p>
                    <p>It depends on the scope. A logo might take 3–5 days, while full branding could take a few weeks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsec
