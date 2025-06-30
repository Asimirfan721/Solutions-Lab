@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-red-500 to-orange-400 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">
            <img src="{{ asset('images/hrp.png') }}" alt="HRP" class="w-full h-64 object-cover">
            <div class="p-8 text-center">
                <span class="inline-block text-xs font-semibold text-white bg-red-600 px-4 py-1 rounded-full mb-4 tracking-wider">Mobile Application</span>
                <h1 class="text-3xl font-extrabold text-gray-800 mb-4">Headache Relief Program (HRP)</h1>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    The Headache Relief Program is a mobile solution designed to support millions who suffer from chronic migraines.<br>
                    It offers digital therapy, real-time tracking of symptoms, and personalized analytics to monitor progress.<br>
                    Users can log triggers, receive behavioral guidance, and connect with professionals through the app.<br>
                    <br>
                    The app's intuitive design ensures accessibility for users of all ages and backgrounds, making it an essential tool in healthcare’s digital transformation.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-6 mt-8">
                    <div class="bg-gray-50 rounded-lg p-4 flex-1">
                        <h4 class="text-red-600 font-bold mb-2">Technologies</h4>
                        <p class="text-gray-700">React Native, Node.js</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 flex-1">
                        <h4 class="text-red-600 font-bold mb-2">Industry</h4>
                        <p class="text-gray-700">Healthcare</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 flex-1">
                        <h4 class="text-red-600 font-bold mb-2">Country</h4>
                        <p class="text-gray-700">United States</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
