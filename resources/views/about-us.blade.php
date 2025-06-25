@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[70vh]" style="background-image: url('/images/about-us-bg.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-5xl font-bold mb-4">About Us</h1>
        <h2 class="text-2xl text-red-500 font-semibold">Advance your Business</h2>
        <p class="mt-4 max-w-3xl text-white font-medium">
            Instant Solutions Lab puts that extra effort to push your project beyond its scope of success.
            We believe in delivering results with dedication, integrity, and undeterred effort.
        </p>
    </div>
</section>

<!-- Company Story -->
<section class="py-16 bg-white text-center px-6 md:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-6">Why do you need the Top Digital Services Company?</h2>

    <p class="text-gray-700 text-lg leading-relaxed max-w-4xl mx-auto">
        Beginning its journey back in 2021, Instant Solutions Lab started as a website development company.
        With time, we took onboard professionals from various technological expertise, rising as a team of specialists working together.
        <br><br>
        The company nurtured as the best digital marketing agency extending its reach within mobile application development,
        website development, content marketing, and UI/UX designing.
        <br><br>
        Instant Solutions Lab takes pride in its work while increasing its global presence and surpassing all expectations.
        We aim to provide services that leave a lasting impact.
        Working as a team, we follow a mentality that focuses on our motto:
        <br><br>
        <span class="italic text-black font-semibold text-lg">“Quality is thought of long after the price is forgotten”.</span>
        <br><br>
        Staying updated with the trends has made us acute with our approach to fulfilling our client’s needs.
        What started as a one-man-army freelance service has transformed into a global business deeply rooted in the services industry.
        <br><br>
        Our clientele knows our team of experts with titles like <strong>Best Digital Marketing Agency</strong>,
        <strong>Best Graphic Designing Company</strong>, <strong>Best Mobile Application Development Company</strong>,
        and <strong>Best Website Development Company</strong>.
        <br><br>
        When it comes to quality, we are sure to go beyond expectations and deliver solid results.
    </p>
</section>

<!-- Statistics Section -->
<section class="bg-gray-100 py-12">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 text-center gap-8">
        <div>
            <h3 class="text-4xl text-red-600 font-bold mb-2">250+</h3>
            <p class="text-gray-700">Satisfied Customers</p>
        </div>
        <div>
            <h3 class="text-4xl text-red-600 font-bold mb-2">150+</h3>
            <p class="text-gray-700">Completed Projects</p>
        </div>
        <div>
            <h3 class="text-4xl text-red-600 font-bold mb-2">80+</h3>
            <p class="text-gray-700">Successful Products</p>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section class="py-16 bg-white text-center px-6 md:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-6">Tools we use for our Digital Services</h2>
    <p class="text-gray-700 text-lg leading-relaxed max-w-4xl mx-auto">
        Getting started with the project is as difficult as completing it, but with your idea and our tools and strategies,
        together we can glide through this challenging journey.
    </p>
</section>

<!-- Chat Button -->
<div class="fixed bottom-6 right-6 z-50">
    <button class="bg-red-600 hover:bg-red-700 text-white p-4 rounded-full shadow-lg">
        <i class="fas fa-comments"></i>
    </button>
</div>

<!-- Footer -->
<footer class="bg-black text-white text-center py-6 mt-20">
    <p>&copy; {{ date('Y') }} Effort Less Solutions. All Rights Reserved.</p>
</footer>

@endsection
