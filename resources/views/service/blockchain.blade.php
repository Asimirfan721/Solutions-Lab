@extends('layouts.app')

@section('title', 'Blockchain Development Services')

@section('content')
<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/block-chain.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg"> BlockChain</h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
         How to get the best
BlockChain Development Services? </p>
<p class ="text-red drop-shadow-lg"> We provide the right mix of skills to match your unique infrastructure, challenges, and strategic vision.

        </p>
    </div>
</section>

        <!-- Introduction -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">What Makes Us a Top Blockchain Development Company?</h2>
            <p class="text-gray-700 mb-3">
                At <strong>Instant Solutions Lab</strong>, we don't just use blockchain as a buzzword—we implement it to solve real-world business challenges. Whether it's decentralization, transparency, or automation you're aiming for, we deliver blockchain solutions that work.
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mt-4">
                <li>Tailored blockchain strategies based on your needs.</li>
                <li>Integration of innovative ecosystems, platforms, and alliances.</li>
                <li>Enterprise-grade decentralized app (dApp) development.</li>
                <li>Proven track record of delivering blockchain-powered business outcomes.</li>
            </ul>
        </div>

        <!-- Process -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">How We Deliver Our Blockchain Solutions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['title' => 'Requirement Gathering & Analysis', 'desc' => 'Understand your goals and define required features.'],
                    ['title' => 'Architecture & Design', 'desc' => 'Choose and build the right type of blockchain—public, private, or consortium.'],
                    ['title' => 'Development', 'desc' => 'Set up infrastructure, nodes, protocols, and consensus algorithms.'],
                    ['title' => 'Testing & QA', 'desc' => 'Ensure quality and security with end-to-end testing.'],
                    ['title' => 'Deployment & Launch', 'desc' => 'Launch the blockchain on live environments, public or private.'],
                    ['title' => 'Maintenance & Upgrades', 'desc' => 'Monitor and improve the system as your needs evolve.'],
                ] as $step)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
                    <h3 class="text-red-600 font-bold mb-2">{{ $step['title'] }}</h3>
                    <p class="text-gray-700 text-sm">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools and Tech -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tools We Use</h2>
            <p class="text-gray-700 mb-4">We build secure and scalable blockchain systems using modern tools and frameworks:</p>
            <div class="flex flex-wrap gap-4 text-sm text-gray-700">
                @foreach(['Smart Contracts', 'dApps', 'Solidity', 'Hyperledger', 'Ethereum', 'NFT', 'Tokenomics'] as $tool)
                    <span class="bg-gray-100 px-4 py-2 rounded-full shadow-sm">{{ $tool }}</span>
                @endforeach
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Technologies We Support</h2>
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
                    <p class="font-semibold">What is blockchain development and why does it matter?</p>
                    <p>Blockchain development builds decentralized systems that enhance security, transparency, and trust across industries.</p>
                </div>
                <div>
                    <p class="font-semibold">What blockchain services do you offer?</p>
                    <p>Smart contract development, dApps, public/private blockchains, wallet integrations, and more.</p>
                </div>
                <div>
                    <p class="font-semibold">How does your development process work?</p>
                    <p>We follow a structured approach: planning → architecture → coding → testing → launch → support.</p>
                </div>
                <div>
                    <p class="font-semibold">How long does blockchain development take?</p>
                    <p>It varies from a few weeks for simple apps to several months for full enterprise-grade solutions.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
