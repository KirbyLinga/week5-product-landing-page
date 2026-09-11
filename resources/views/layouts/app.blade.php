<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Morsels Bloom — Patisserie & Atelier')</title>
    <meta name="description" content="@yield('description', 'Handcrafted cakes, pastries, and dessert boxes made fresh daily with premium ingredients.')">

    {{-- Fonts: Epilogue (headings/display) + Plus Jakarta Sans (body/labels) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Lucide Icons (static, no build step needed — used via <i data-lucide="name">) --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>

    {{-- Alpine.js — powers small interactions like the mobile nav toggle --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- Vite / Tailwind build --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-neutral antialiased bg-white">

    {{-- Navbar is included on every page --}}
    <x-navbar />

    {{-- Page-specific content is injected here --}}
    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')

    {{-- Renders every <i data-lucide="..."> tag into an inline SVG icon --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>
</html>
