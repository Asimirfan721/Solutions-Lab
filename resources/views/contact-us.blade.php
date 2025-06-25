@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="bg-black text-white py-16 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-red-600">Contact Us</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">We’d love to hear from you. Let’s build something amazing together.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
        <!-- Contact Form -->
        <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Let's Connect</h3>
            <p class="text-red-600 font-semibold mb-6">We'd Love to Hear From You<br>Let's Get In Touch!</p>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="full_name" class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Full Name *" required>
                    <input type="text" name="company_name" class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Company Name *" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="email" name="email" class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Email *" required>
                    <input type="text" name="phone" class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Phone Number *" required>
                </div>

                <textarea name="project_details" rows="5" class="border border-gray-300 rounded px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Details about your project *" required></textarea>

                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded w-full transition">
                    Talk To Us
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-bold text-gray-800 mb-4">Pakistan Office</h4>
            <p class="text-gray-700 mb-4">
                House # C-43, Tipu Sultan Cooperative Housing Society,<br>
                Opposite Malir Cantt Check Post No.6, Karachi, Pakistan.
            </p>
            <p class="text-gray-700 mb-4">
                <strong>Phone:</strong> +92-21-34027771<br>
                <strong>Email:</strong> info@instantsolutionslab.com
            </p>

            <h4 class="text-xl font-bold text-gray-800 mt-8 mb-4">USA Office</h4>
            <p class="text-gray-700 mb-4">
                804 South Hamilton Street, Suite 110,<br>
                Saginaw, Michigan, 48602
            </p>
            <p class="text-gray-700">
                <strong>Phone:</strong> +1-913-358-5807<br>
                <strong>Email:</strong> info@instantsolutionslab.com
            </p>
        </div>
    </div>
</section>
@endsection
