@extends('layouts.app')

@section('title', 'Cloud Computing Services')

@section('content')
<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/our-work.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold mb-4 text-white drop-shadow-lg tracking-wide">
            <span class="bg-gradient-to-r from-red-500 to-orange-400 bg-clip-text text-transparent">Cloud Computing</span>
        </h1>
        <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto drop-shadow font-medium">
            How to get the best <span class="text-orange-200 font-bold">Cloud Computing Services?</span>
        </p>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">

        <!-- Why Cloud Section -->
        <div class="bg-white rounded-2xl shadow-lg p-10 mb-14 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-red-600 mb-6 tracking-wide">Why Choose Our Cloud Computing Services?</h2>
            <p class="text-gray-700 mb-6 text-lg">
                At <strong>Instant Solutions Lab</strong>, we provide tailored cloud solutions for SMEs and large enterprises. With 24/7 access from any device, our services are designed to keep you agile and secure.
            </p>
            <ul class="flex flex-col items-center gap-3 mt-4">
                <li class="flex items-center gap-3 text-gray-700 text-base">
                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400 text-white font-bold shadow">✓</span>
                    Robust cloud infrastructure optimized for speed, security, and scalability.
                </li>
                <li class="flex items-center gap-3 text-gray-700 text-base">
                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400 text-white font-bold shadow">✓</span>
                    One-click reboots and OS installs (Ubuntu, Fedora, CentOS, etc.)
                </li>
                <li class="flex items-center gap-3 text-gray-700 text-base">
                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400 text-white font-bold shadow">✓</span>
                    Fully managed dedicated servers with reboots and reinstalls.
                </li>
                <li class="flex items-center gap-3 text-gray-700 text-base">
                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-br from-red-500 to-orange-400 text-white font-bold shadow">✓</span>
                    Host your data confidently with low-latency and high availability.
                </li>
            </ul>
        </div>

        <!-- Services List -->
        <div class="mb-14">
            <h2 class="text-3xl font-extrabold text-red-600 mb-8 text-center tracking-wide">Our Cloud Services Include</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach([
                    ['title' => 'Study', 'desc' => 'We assess your business goals and infrastructure to plan a custom DevOps and cloud strategy.'],
                    ['title' => 'Preparation', 'desc' => 'We provide a cost-effective CI/CD ready solution to transition your services to the cloud.'],
                    ['title' => 'Improve, Inquire, Uninstall', 'desc' => 'We continuously monitor, upgrade, and maintain system performance and security.'],
                    ['title' => 'Maintenance', 'desc' => 'Our team of cloud and security experts keep your cloud environment optimized and protected.'],
                ] as $item)
                <div class="bg-white rounded-xl p-8 shadow hover:shadow-xl transition duration-200 text-center">
                    <h3 class="text-xl font-bold text-orange-500 mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-700 text-base">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools Section -->
        <div class="mb-14">
            <h2 class="text-2xl font-bold text-red-600 mb-4 text-center">Tools We Use</h2>
            <p class="text-gray-700 mb-4 text-center">We work with the latest technologies to deliver the most efficient and secure cloud solutions:</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-700">
                @foreach(['Mobile Technologies', 'UI/UX', 'Web & Hybrid', 'Backend & Database', 'Cloud & Push Notification', 'App Analytics & Payments'] as $tool)
                    <span class="bg-gray-100 px-4 py-2 rounded-full shadow-sm font-medium">{{ $tool }}</span>
                @endforeach
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-14">
            <h2 class="text-2xl font-bold text-red-600 mb-4 text-center">Core Technologies</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                    <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium shadow">{{ $tech }}</span>
                @endforeach
            </div>
        </div>

        <!-- FAQs Accordion -->
        <div class="bg-white rounded-2xl shadow-lg p-10 max-w-2xl mx-auto">
            <h2 class="text-2xl font-extrabold text-red-600 mb-8 text-center">Frequently Asked Questions</h2>
            <div class="space-y-4" x-data="{ open: null }">
                @foreach([
                    ['q' => 'What is cloud computing?', 'a' => 'It is the delivery of computing resources like servers, storage, databases, networking, and software over the internet (“the cloud”).'],
                    ['q' => 'What types of services do you offer?', 'a' => 'We offer Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS).'],
                    ['q' => 'What are the key benefits?', 'a' => 'Flexibility, scalability, cost-efficiency, improved collaboration, and high data availability.'],
                    ['q' => 'How do I choose a cloud provider?', 'a' => 'Focus on uptime guarantees, data security, customer support, pricing transparency, and integration compatibility.'],
                ] as $i => $faq)
                <div class="border-b pb-4">
                    <button
                        @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                        class="flex items-center justify-between w-full text-left text-gray-800 font-semibold focus:outline-none transition"
                    >
                        <span>{{ $faq['q'] }}</span>
                        <svg :class="{'rotate-180': open === {{ $i }}}" class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open === {{ $i }}" x-transition class="mt-3 text-gray-700">
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js for accordion (add in your main layout if not already included) -->
<script src="//unpkg.com/alpinejs" defer></script>
@endsection
