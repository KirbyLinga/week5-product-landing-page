{{--
    Reusable button/link component.
    Variants mirror the design system reference:
    primary (solid magenta), secondary (soft pink chip), inverted (dark), outlined (bordered)

    Usage:
    <x-button href="#" variant="primary" icon="shopping-bag">Order Now</x-button>
    <x-button as="button" variant="outlined" icon="utensils">Explore Our Menu</x-button>
--}}
@props([
    'href' => '#',
    'as' => 'a',              // 'a' or 'button'
    'type' => 'button',       // only used when as="button"
    'variant' => 'primary',   // primary | secondary | inverted | outlined | ghost
    'size' => 'md',           // sm | md | lg
    'icon' => null,           // lucide icon name, e.g. "shopping-bag", "arrow-right"
    'iconPosition' => 'left', // left | right
])

@php
    $base = 'inline-flex items-center justify-center gap-2 font-semibold rounded-full transition-all duration-200 shadow-card hover:shadow-soft hover:-translate-y-0.5';

    $variants = [
        'primary'   => 'bg-primary text-white hover:bg-primary-dark',
        'secondary' => 'bg-tertiary text-primary hover:bg-tertiary-dark',
        'inverted'  => 'bg-neutral text-white hover:bg-neutral/90',
        'outlined'  => 'bg-white text-neutral border border-neutral/15 hover:bg-cream shadow-none',
        'ghost'     => 'bg-transparent text-neutral hover:bg-cream shadow-none',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-sm md:text-base',
        'lg' => 'px-8 py-4 text-base md:text-lg',
    ];

    $iconSize = ['sm' => 'w-4 h-4', 'md' => 'w-4 h-4 md:w-5 md:h-5', 'lg' => 'w-5 h-5'][$size] ?? 'w-4 h-4';

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
    $tag = $as === 'button' ? 'button' : 'a';
@endphp

<{{ $tag }}
    @if($tag === 'a') href="{{ $href }}" @else type="{{ $type }}" @endif
    {{ $attributes->merge(['class' => $classes]) }}
>
    @if($icon && $iconPosition === 'left')
        <i data-lucide="{{ $icon }}" class="{{ $iconSize }}"></i>
    @endif

    {{ $slot }}

    @if($icon && $iconPosition === 'right')
        <i data-lucide="{{ $icon }}" class="{{ $iconSize }}"></i>
    @endif
</{{ $tag }}>
