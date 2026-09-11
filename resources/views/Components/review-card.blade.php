{{--
    Customer review card.

    Usage:
    <x-review-card
        quote="The cake was absolutely beautiful and tasted even better."
        name="Emily Chen"
        position="Customer"
        :rating="5"
    />
--}}
@props([
    'quote' => 'This is a placeholder review quote.',
    'name' => 'Customer Name',
    'position' => 'Customer',
    'avatar' => null,
    'initials' => null,
    'rating' => 5,
])

<div class="bg-white rounded-2xl p-8 shadow-card border border-neutral/5 flex flex-col h-full">
    <div class="flex items-center gap-1 text-secondary mb-4">
        @for($i = 0; $i < $rating; $i++)
            <i data-lucide="star" class="w-4 h-4 fill-secondary"></i>
        @endfor
    </div>

    <p class="text-sm text-neutral-muted italic leading-relaxed flex-1">
        "{{ $quote }}"
    </p>

    <div class="flex items-center gap-3 mt-6 pt-6 border-t border-neutral/10">
        @if($avatar)
            <img src="{{ $avatar }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover">
        @else
            <span class="w-10 h-10 rounded-full bg-tertiary text-primary flex items-center justify-center text-xs font-bold">
                {{ $initials ?? strtoupper(substr($name, 0, 1) . (strpos($name, ' ') !== false ? substr($name, strpos($name, ' ') + 1, 1) : '')) }}
            </span>
        @endif
        <div class="leading-tight">
            <p class="text-sm font-semibold text-neutral">{{ $name }}</p>
            <p class="text-xs text-primary font-medium">{{ $position }}</p>
        </div>
    </div>
</div>
