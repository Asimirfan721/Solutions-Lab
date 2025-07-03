@extends('layouts.app')

@section('title', 'Digital Marketing Services')

@section('content')
 <section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/block-chain.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg"> Digital Marketing </h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
          Maximize reach. Boost conversions. Build long-term brand authority with our expert strategies. </p>
 
        </p>
    </div>
</section>

        <!-- Intro Section -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Our Digital Marketing Services Stand Out</h2>
            <p class="text-gray-700 mb-3">
                At <strong>Instant Solutions Lab</strong>, we craft customized content strategies even for industries that may seem "unexciting" at first glance—because every brand has a story worth telling.
            </p>
            <p class="text-gray-700">
                From B2B content marketing to social media amplification and SEO, we help your brand shine across digital channels. Let us help you tell your story, grow your traffic, and convert leads.
            </p>
        </div>

        <!-- Services List -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">What We Offer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['title' => 'Discovery & Planning', 'desc' => 'Aligning goals with strategy and analyzing your target market.'],
                    ['title' => 'Website & Content Optimization', 'desc' => 'Enhancing UX, page speed, and SEO factors.'],
                    ['title' => 'Search Engine Marketing & PPC', 'desc' => 'Google Ads and paid campaigns for targeted leads.'],
                    ['title' => 'Social Media Marketing', 'desc' => 'Building your online presence and driving engagement.'],
                    ['title' => 'Email Marketing', 'desc' => 'Segmented campaigns that increase customer loyalty.'],
                    ['title' => 'Search Engine Optimization (SEO)', 'desc' => 'Boosting visibility through on-page and off-page strategies.'],
                    ['title' => 'Analytics & Reporting', 'desc' => 'We track progress and optimize results with deep insights.'],
                ] as $service)
                <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition">
                    <h3 class="text-red-600 font-bold mb-2">{{ $service['title'] }}</h3>
                    <p class="text-gray-700 text-sm">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tools We Use</h2>
            <div class="flex flex-wrap gap-4 text-sm text-gray-700">
                @foreach([
                    'Google Analytics', 'Google Ads', 'Meta Business Suite', 'Mailchimp', 
                    'Ahrefs', 'SEMrush', 'Buffer', 'Hootsuite', 'Canva', 'WordPress SEO Plugins'
                ] as $tool)
                <span class="bg-gray-100 px-4 py-2 rounded-full shadow-sm">{{ $tool }}</span>
                @endforeach
            </div>
        </div>

        <!-- Technologies (if applicable) -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Technologies We Integrate</h2>
            <div class="flex flex-wrap gap-4">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        <!-- FAQs -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Frequently Asked Questions</h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <p class="font-semibold">What is digital marketing?</p>
                    <p>It’s the use of digital platforms—search engines, websites, social media, email, and mobile apps—to promote products and services.</p>
                </div>
                <div>
                    <p class="font-semibold">What services do you offer?</p>
                    <p>SEO, PPC, email campaigns, content creation, analytics, and social media marketing.</p>
                </div>
                <div>
                    <p class="font-semibold">When will I start seeing results?</p>
                    <p>SEO takes 3–6 months, while PPC and social media can show faster results, sometimes within days.</p>
                </div>
                <div>
                    <p class="font-semibold">How do I choose the right provider?</p>
                    <p>Choose an agency with a strategic approach, transparency, real results, and a solid portfolio.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
