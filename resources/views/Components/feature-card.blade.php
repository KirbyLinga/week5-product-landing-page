{{--
    Single feature / product card.
    Supports two modes:
    1. Feature mode (default): icon + title + description
    2. Product mode: tag + image + title + description + price

    Usage (feature):
    <x-feature-card icon="leaf" title="Premium Ingredients" description="..." />

    Usage (product):
    <x-feature-card :tag="$product['tag']" :img="$product['img']" :title="$product['title']" :desc="$product['desc']" :price="$product['price']" />
--}}

@props([
    // Feature mode props
    'icon' => null,
    'iconBg' => 'bg-tertiary text-primary',

    // Product mode props
    'tag' => null,
    'img' => null,
    'desc' => null,
    'price' => null,

    // Shared props
    'title' => 'Title',
    'description' => null,
])

@if($img)
    {{-- Product Card Mode --}}
    <div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4 flex flex-col']) }}>
        <img src="{{ $img }}" alt="{{ $title }}" class="rounded-xl w-full h-40 object-cover mb-3">
        @if($tag)
            <span class="text-xs font-semibold text-pink-600 mb-1">{{ $tag }}</span>
        @endif
        <h3 class="text-lg font-bold text-neutral">{{ $title }}</h3>
        @if($desc)
            <p class="text-sm text-neutral-muted flex-1">{{ $desc }}</p>
        @endif
        @if($price)
            <p class="mt-2 font-semibold text-primary">{{ $price }}</p>
        @endif
    </div>
@else
    {{-- Feature Card Mode --}}
    <div {{ $attributes->merge(['class' => 'bg-white rounded-2xl p-8 shadow-card hover:shadow-soft hover:-translate-y-1 transition-all duration-200']) }}>
        <span class="inline-flex items-center justify-center w-12 h-12 rounded-xl {{ $iconBg }} mb-5">
            <i data-lucide="{{ $icon }}" class="w-6 h-6"></i>
        </span>

        <h3 class="font-display font-bold text-lg text-neutral mb-2">
            {{ $title }}
        </h3>

        <p class="text-sm text-neutral-muted leading-relaxed">
            {{ $description }}
        </p>
    </div>
@endif
