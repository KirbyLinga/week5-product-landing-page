{{--
    Reusable pricing card component.

    Usage:
    <x-pricing-card
        name="Starter"
        price="₱499"
        period="per batch"
        description="Perfect for small gatherings and personal cravings."
        :features="['6 pcs Banana Cake', 'Free delivery within town', 'Basic packaging']"
        buttonLabel="Order Starter"
        buttonHref="#"
    />
--}}
@props([
    'name' => 'Plan',
    'price' => '₱0',
    'period' => '',
    'description' => '',
    'features' => [],
    'buttonLabel' => 'Get Started',
    'buttonHref' => '#',
    'highlighted' => false,
])

<div {{ $attributes->merge(['class' => 'rounded-2xl p-8 flex flex-col h-full ' . ($highlighted ? 'bg-primary text-white shadow-soft ring-2 ring-primary' : 'bg-white shadow-card border border-neutral/5')]) }}>
    <h3 class="font-display font-bold text-lg {{ $highlighted ? 'text-white' : 'text-neutral' }}">{{ $name }}</h3>

    <div class="mt-4 mb-2">
        <span class="text-3xl font-extrabold {{ $highlighted ? 'text-white' : 'text-primary' }}">{{ $price }}</span>
        @if($period)
            <span class="text-sm {{ $highlighted ? 'text-white/70' : 'text-neutral-muted' }}">/{{ $period }}</span>
        @endif
    </div>

    <p class="text-sm {{ $highlighted ? 'text-white/80' : 'text-neutral-muted' }} mb-6">{{ $description }}</p>

    @if(count($features) > 0)
        <ul class="space-y-3 mb-8 flex-1">
            @foreach($features as $feature)
                <li class="flex items-start gap-2 text-sm {{ $highlighted ? 'text-white/90' : 'text-neutral-muted' }}">
                    <i data-lucide="check-circle-2" class="w-4 h-4 mt-0.5 shrink-0 {{ $highlighted ? 'text-tertiary' : 'text-primary' }}"></i>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>
    @endif

    <x-button href="{{ $buttonHref }}" variant="{{ $highlighted ? 'secondary' : 'primary' }}" size="lg" class="w-full justify-center">
        {{ $buttonLabel }}
    </x-button>
</div>
