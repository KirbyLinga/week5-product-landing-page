{{--
    Single feature card. Pass a Lucide icon name (e.g. "leaf", "flame", "palette")
    plus a title/description. Used inside a responsive grid on the features section.
--}}
@props([
    'icon' => 'sparkles',
    'iconBg' => 'bg-tertiary text-primary', // swap per-card for the alternating pink/gold look
    'title' => 'Feature Title',
    'description' => 'Short description of this feature goes here.',
])

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
