{{--
    Hero section. Text content is passed as props so this component
    is reusable across any product/business, not just this one.
--}}
@props([
    'eyebrow' => 'Filipino Sweet Treats • Made Fresh Daily',
    'eyebrowIcon' => 'sparkles',
    'headline' => 'Handcrafted Filipino Sweet Treats Made to',
    'headlineHighlight' => 'Sweeten Every Moment.',
    'description' => "From classic banana cakes and puto to choco pops, mini donuts, and polvoron — every treat is lovingly made from quality ingredients for your merienda and celebrations.",
    'primaryCta' => ['label' => 'Order Now', 'href' => '#order', 'icon' => 'arrow-right'],
    'secondaryCta' => ['label' => 'Explore Our Menu', 'href' => '#menu', 'icon' => 'utensils'],
    'image' => asset('Images/Products/DonutHero.jpg'),
    'imageBadgeTitle' => 'Filipino Favorites',
    'imageBadgeSubtitle' => 'MADE FRESH EVERY MORNING',
    'rating' => '4.9/5',
    'ratingCaption' => 'Loved across 1,200+ happy customers',
    'avatarInitials' => ['EC', 'MV', 'SR'],
])

<section id="home" class="bg-cream overflow-hidden">
    <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16 py-12 lg:py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left: copy --}}
            <div>
                <span class="inline-flex items-center gap-2 bg-tertiary text-primary text-xs font-semibold px-4 py-2 rounded-full">
                    <i data-lucide="{{ $eyebrowIcon }}" class="w-3.5 h-3.5"></i>
                    {{ $eyebrow }}
                </span>

                <h1 class="font-display font-extrabold text-neutral text-4xl sm:text-5xl lg:text-6xl leading-[1.05] mt-6">
                    {{ $headline }}
                    <span class="text-primary italic bg-tertiary px-2 rounded-lg box-decoration-clone">{{ $headlineHighlight }}</span>
                </h1>

                <p class="text-neutral-muted text-base sm:text-lg mt-6 max-w-xl">
                    {{ $description }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <x-button href="{{ $primaryCta['href'] }}" variant="primary" size="lg" icon="{{ $primaryCta['icon'] }}">
                        {{ $primaryCta['label'] }}
                    </x-button>
                    <x-button href="{{ $secondaryCta['href'] }}" variant="outlined" size="lg" icon="{{ $secondaryCta['icon'] }}">
                        {{ $secondaryCta['label'] }}
                    </x-button>
                </div>

                {{-- Social proof strip --}}
                <div class="flex items-center gap-4 mt-10 pt-8 border-t border-neutral/10">
                    <div class="flex -space-x-3">
                        @foreach($avatarInitials as $initials)
                            <span class="w-10 h-10 rounded-full bg-tertiary border-2 border-white flex items-center justify-center text-xs font-bold text-primary">
                                {{ $initials }}
                            </span>
                        @endforeach
                        <span class="w-10 h-10 rounded-full bg-primary border-2 border-white flex items-center justify-center text-[10px] font-bold text-white">
                            +1k
                        </span>
                    </div>
                    <div>
                        <div class="flex items-center gap-1 text-secondary">
                            @for($i = 0; $i < 5; $i++)
                                <i data-lucide="star" class="w-4 h-4 fill-secondary"></i>
                            @endfor
                            <span class="text-neutral font-semibold text-sm ml-1">{{ $rating }}</span>
                        </div>
                        <p class="text-xs text-neutral-muted mt-1">{{ $ratingCaption }}</p>
                    </div>
                </div>
            </div>

            {{-- Right: product image with floating badges --}}
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-soft border-8 border-white">
                    <img src="{{ $image }}" alt="Product showcase" class="w-full h-[280px] sm:h-[340px] lg:h-[420px] object-cover">

                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-4 py-2 rounded-xl shadow-card flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-tertiary text-primary flex items-center justify-center">
                            <i data-lucide="store" class="w-4 h-4"></i>
                        </span>
                        <div class="leading-tight">
                            <p class="text-xs font-bold text-primary">{{ $imageBadgeTitle }}</p>
                            <p class="text-[10px] tracking-wide text-neutral-muted">{{ $imageBadgeSubtitle }}</p>
                        </div>
                    </div>

                    <div class="absolute bottom-4 right-4 bg-white/95 backdrop-blur px-3 py-1.5 rounded-lg shadow-card text-xs font-semibold text-neutral flex items-center gap-1">
                        <i data-lucide="star" class="w-3.5 h-3.5 text-secondary fill-secondary"></i>
                        {{ $rating }} from 1,200+ celebratory tables
                    </div>
                </div>

                <div class="absolute -bottom-6 -left-6 w-24 h-24 rounded-full bg-secondary text-white flex flex-col items-center justify-center text-center shadow-soft text-xs font-bold leading-tight">
                    100% BUTTER & JOY
                </div>
            </div>
        </div>
    </div>
</section>
