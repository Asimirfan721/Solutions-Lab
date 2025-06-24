<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Effort Less Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-white text-gray-900">

    <!-- Navigation/Header -->
    <header class="bg-black text-white py-4 shadow">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-red-600">Effort Less Solutions</h1>
            <nav class="space-x-6">
                <a href="/" class="hover:text-red-500">Home</a>
                <a href="/about-us" class="hover:text-red-500">About Us</a>
                <a href="/services" class="hover:text-red-500">Services</a>
                <a href="/case-studies" class="hover:text-red-500">Case Studies</a>
                <a href="/careers" class="hover:text-red-500">Careers</a>
                <a href="/contact-us" class="hover:text-red-500">Contact Us</a>
            </nav>
            <a href="/contact-us" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Get in Touch
            </a>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

</body>
</html>
