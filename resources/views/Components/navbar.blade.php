{{--
    Sticky navigation bar.
    Links are passed as a simple array so it's easy to reuse/reorder per page.
--}}
@props([
    'logoText' => 'Morsels Bloom',
    'logoTagline' => 'PATISSERIE & ATELIER',
    'links' => [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Our Menu', 'href' => '#menu'],
        ['label' => 'Specialties', 'href' => '#specialties'],
        ['label' => 'Reviews', 'href' => '#reviews'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],
])

<header x-data="{ open: false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-tertiary">
    <nav class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-3 shrink-0">
                <img src="{{ asset('Images/Logo.jpg') }}" alt="{{ $logoText }} logo" class="h-10 w-auto rounded-full object-cover">
                <span class="leading-tight">
                    <span class="block font-display font-bold text-lg text-primary">{{ $logoText }}</span>
                    <span class="block text-[10px] tracking-widest text-neutral-muted">{{ $logoTagline }}</span>
                </span>
            </a>

            {{-- Desktop links --}}
            <ul class="hidden lg:flex items-center gap-8 text-sm font-medium text-neutral">
                @foreach($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="hover:text-primary hover:animate-bounce-pulse transition-colors">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Desktop actions --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="#signin" class="text-sm font-medium text-neutral hover:text-primary transition-colors px-2">
                    Sign In
                </a>
                <x-button href="#order" variant="primary" size="sm" icon="shopping-bag">
                    Order Now
                </x-button>
            </div>

            {{-- Mobile menu toggle --}}
            <button
                @click="open = !open"
                class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-full hover:bg-cream text-neutral"
                aria-label="Toggle menu"
            >
                <i data-lucide="menu" class="w-6 h-6" x-show="!open"></i>
                <i data-lucide="x" class="w-6 h-6" x-show="open" x-cloak></i>
            </button>
        </div>

        {{-- Mobile panel --}}
        <div x-show="open" x-cloak class="lg:hidden pb-6 border-t border-tertiary">
            <ul class="flex flex-col gap-1 pt-4 text-sm font-medium text-neutral">
                @foreach($links as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="block py-2 px-2 rounded-lg hover:bg-cream hover:text-primary hover:animate-bounce-pulse transition-colors">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="flex flex-col gap-3 mt-4">
                <a href="#signin" class="text-sm font-medium text-neutral text-center py-2 rounded-full border border-neutral/10 hover:bg-cream">
                    Sign In
                </a>
                <x-button href="#order" variant="primary" size="sm" icon="shopping-bag" class="w-full">
                    Order Now
                </x-button>
            </div>
        </div>
    </nav>
</header>
