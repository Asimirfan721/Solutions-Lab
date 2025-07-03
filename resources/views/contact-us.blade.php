@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="relative bg-cover bg-center h-[60vh] flex items-center justify-center" style="background-image: url('/images/contact-us.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg">Contact Us</h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
            We’d love to hear from you. Let’s build something amazing together.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
        <!-- Contact Form -->
        <div>
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Let's Connect</h3>
                <p class="text-red-600 font-semibold mb-8 text-center">We'd Love to Hear From You<br>Let's Get In Touch!</p>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="text" name="full_name" class="peer border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition placeholder-transparent" placeholder="Full Name *" required>
                            <label class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-focus:-top-5 peer-focus:text-xs peer-focus:text-red-500 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm pointer-events-none">Full Name *</label>
                        </div>
                        <div class="relative">
                            <input type="text" name="company_name" class="peer border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition placeholder-transparent" placeholder="Company Name *" required>
                            <label class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-focus:-top-5 peer-focus:text-xs peer-focus:text-red-500 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm pointer-events-none">Company Name *</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="email" name="email" class="peer border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition placeholder-transparent" placeholder="Email *" required>
                            <label class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-focus:-top-5 peer-focus:text-xs peer-focus:text-red-500 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm pointer-events-none">Email *</label>
                        </div>
                        <div class="relative">
                            <input type="text" name="phone" class="peer border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition placeholder-transparent" placeholder="Phone Number *" required>
                            <label class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-focus:-top-5 peer-focus:text-xs peer-focus:text-red-500 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm pointer-events-none">Phone Number *</label>
                        </div>
                    </div>
                    <div class="relative">
                        <textarea name="project_details" rows="5" class="peer border border-gray-300 rounded-lg px-4 py-3 w-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition placeholder-transparent" placeholder="Details about your project *" required></textarea>
                        <label class="absolute left-4 top-3 text-gray-400 text-sm transition-all peer-focus:-top-5 peer-focus:text-xs peer-focus:text-red-500 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm pointer-events-none">Details about your project *</label>
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-red-600 to-orange-500 hover:from-red-700 hover:to-orange-600 text-white font-semibold py-3 px-6 rounded-lg w-full shadow-lg transition text-lg">
                        Talk To Us
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div>
            <div class="bg-gradient-to-br from-red-500 to-orange-400 rounded-2xl shadow-xl p-8 text-white">
                <h4 class="text-2xl font-bold mb-6 text-center">Our Offices</h4>
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                        <span class="font-semibold text-lg">Pakistan Office</span>
                    </div>
                    <p class="text-sm mb-2 ml-7">
                        House # C-43, Tipu Sultan Cooperative Housing Society,<br>
                        Opposite Malir Cantt Check Post No.6, Karachi, Pakistan.
                    </p>
                    <p class="text-sm ml-7">
                        <span class="font-semibold">Phone:</span> +92-21-34027771<br>
                        <span class="font-semibold">Email:</span> info@instantsolutionslab.com
                    </p>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <i class="fas fa-map-marker-alt text-xl"></i>
                        <span class="font-semibold text-lg">USA Office</span>
                    </div>
                    <p class="text-sm mb-2 ml-7">
                        804 South Hamilton Street, Suite 110,<br>
                        Saginaw, Michigan, 48602
                    </p>
                    <p class="text-sm ml-7">
                        <span class="font-semibold">Phone:</span> +1-913-358-5807<br>
                        <span class="font-semibold">Email:</span> info@instantsolutionslab.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
