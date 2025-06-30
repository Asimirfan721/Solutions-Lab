@extends('layouts.app')

@section('content')
<section class="text-white bg-gradient-to-r from-red-500 to-orange-500 py-10 text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Overview</h2>
        <p class="max-w-4xl mx-auto">{{ $caseStudy['overview'] }}</p>
    </div>
</section>

<section class="py-10 bg-white text-black">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <img src="{{ asset('images/' . $caseStudy['image']) }}" alt="Case Study Image" class="rounded-lg shadow">
        </div>
        <div class="md:w-1/2">
            <h3 class="text-2xl font-bold mb-4">Challenges</h3>
            <p>
                Development of the EMR system was based on a number of complex challenges that needed technical proficiency and innovative, creative thinking. This involved the need to come up with a flexible framework through which the Medical Health Centers would create custom survey and module forms to suit their needs. There was also a requirement to incorporate various functionalities into one system in a manner that it could be scaled for any number of MHCs. Ensuring security of sensitive data of patients and MHC was another important aspect.
            </p>
        </div>
    </div>
</section>

<section class="py-10 bg-gray-50">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2 order-2 md:order-1">
            <h3 class="text-2xl font-bold mb-4">Solutions</h3>
            <p>
                Development has taken care that strong encryption should be used and according to the rules set by HIPAA. The platform was designed in a way which can be used by admins, providers, and patients easily. Team tested everything, using the feedback to make improvements and also made provisions for the simple import and use of diagnostic libraries.
            </p>
        </div>
        <div class="md:w-1/2 order-1 md:order-2 flex justify-center">
            <div class="bg-white rounded-lg shadow p-6 w-full">
                <h4 class="font-semibold text-gray-700 mb-2">Technologies</h4>
                <p class="mb-4">React js &amp; Node js</p>
                <h4 class="font-semibold text-gray-700 mb-2">Industry</h4>
                <p class="mb-4">Health</p>
                <h4 class="font-semibold text-gray-700 mb-2">Country</h4>
                <p>United States</p>
            </div>
        </div>
    </div>
</section>

<section class="py-10 bg-white text-black">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <h3 class="text-2xl font-bold mb-4">Results</h3>
            <p>
                The results were just so: the way we had planned and worked for. The EMR system integrates critical functionality into a user-friendly, secure platform with a range of features, best equipping the mental health companies to run their operations efficiently. This will be an important asset for MHCs since it will streamline processes in helping them improve the quality of care given to their patients through innovative digital solutions.
            </p>
        </div>
        <div class="md:w-1/2"></div>
    </div>
</section>
@endsection
