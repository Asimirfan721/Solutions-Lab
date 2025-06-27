@extends('layouts.app')

@section('title', 'Cloud Computing Services')

@section('content')
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">

        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-red-600 mb-4">Cloud Computing Development</h1>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                Empower your business with secure, scalable, and high-performance cloud computing services designed for reliability and speed.
            </p>
        </div>

        <!-- Why Cloud Section -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Choose Our Cloud Computing Services?</h2>
            <p class="text-gray-700 mb-3">
                At <strong>Instant Solutions Lab</strong>, we provide tailored cloud solutions for SMEs and large enterprises. With 24/7 access from any device, our services are designed to keep you agile and secure.
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mt-4">
                <li>Robust cloud infrastructure optimized for speed, security, and scalability.</li>
                <li>One-click reboots and OS installs (Ubuntu, Fedora, CentOS, etc.)</li>
                <li>Fully managed dedicated servers with reboots and reinstalls.</li>
                <li>Host your data confidently with low-latency and high availability.</li>
            </ul>
        </div>

        <!-- Services List -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Cloud Services Include:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['title' => 'Study', 'desc' => 'We assess your business goals and infrastructure to plan a custom DevOps and cloud strategy.'],
                    ['title' => 'Preparation', 'desc' => 'We provide a cost-effective CI/CD ready solution to transition your services to the cloud.'],
                    ['title' => 'Improve, Inquire, Uninstall', 'desc' => 'We continuously monitor, upgrade, and maintain system performance and security.'],
                    ['title' => 'Maintenance', 'desc' => 'Our team of cloud and security experts keep your cloud environment optimized and protected.'],
                ] as $item)
                <div class="bg-white rounded-lg p-6 shadow hover:shadow-md transition">
                    <h3 class="text-red-600 font-bold mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-700 text-sm">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools Section -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tools We Use</h2>
            <p class="text-gray-700 mb-4">We work with the latest technologies to deliver the most efficient and secure cloud solutions:</p>
            <div class="flex flex-wrap gap-4 text-sm text-gray-700">
                @foreach(['Mobile Technologies', 'UI/UX', 'Web & Hybrid', 'Backend & Database', 'Cloud & Push Notification', 'App Analytics & Payments'] as $tool)
                    <span class="bg-gray-100 px-4 py-2 rounded-full shadow-sm">{{ $tool }}</span>
                @endforeach
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Core Technologies</h2>
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
                    <p class="font-semibold">What is cloud computing?</p>
                    <p>It is the delivery of computing resources like servers, storage, databases, networking, and software over the internet (“the cloud”).</p>
                </div>
                <div>
                    <p class="font-semibold">What types of services do you offer?</p>
                    <p>We offer Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS).</p>
                </div>
                <div>
                    <p class="font-semibold">What are the key benefits?</p>
                    <p>Flexibility, scalability, cost-efficiency, improved collaboration, and high data availability.</p>
                </div>
                <div>
                    <p class="font-semibold">How do I choose a cloud provider?</p>
                    <p>Focus on uptime guarantees, data security, customer support, pricing transparency, and integration compatibility.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
