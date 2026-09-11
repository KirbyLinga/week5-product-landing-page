@extends('layouts.app')

@section('title', 'Morsels Bloom — Handcrafted Cakes, Pastries & Dessert Boxes')
@section('description', 'Freshly baked cakes, French macarons, and dessert boxes handcrafted daily. Order online or visit our atelier.')

@section('content')

    {{-- 1. HERO SECTION --}}
    <x-hero />

    {{-- 2. FEATURES SECTION (6 cards, alternating icon backgrounds) --}}
    <section id="features" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Why Morsels Bloom</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">
                    Baked With Passion, Delivered With Care
                </h2>
                <p class="text-neutral-muted mt-4">
                    Every creation is carefully prepared using quality ingredients and thoughtful craftsmanship.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card
                    icon="leaf"
                    icon-bg="bg-tertiary text-primary"
                    title="Premium Ingredients"
                    description="We carefully select quality ingredients to create delicious and memorable treats."
                />
                <x-feature-card
                    icon="croissant"
                    icon-bg="bg-secondary/20 text-secondary-dark"
                    title="Freshly Baked"
                    description="Our pastries and baked goods are prepared fresh to preserve their flavor and texture."
                />
                <x-feature-card
                    icon="palette"
                    icon-bg="bg-tertiary text-primary"
                    title="Custom Designs"
                    description="Personalized cakes and desserts designed to match your celebration and style."
                />
                <x-feature-card
                    icon="cake-slice"
                    icon-bg="bg-tertiary text-primary"
                    title="Celebration Cakes"
                    description="Beautiful handcrafted cakes for birthdays, weddings, anniversaries, and special occasions."
                />
                <x-feature-card
                    icon="party-popper"
                    icon-bg="bg-secondary/20 text-secondary-dark"
                    title="Event Catering"
                    description="Sweet treats and dessert packages prepared for parties, gatherings, and special events."
                />
                <x-feature-card
                    icon="smile"
                    icon-bg="bg-tertiary text-primary"
                    title="Personalized Service"
                    description="Work directly with us to create desserts that fit your occasion, theme, and preferences."
                />
            </div>
        </div>
    </section>

    {{-- 3. PRODUCT SHOWCASE --}}
    <section id="specialties" class="bg-cream py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid lg:grid-cols-2 gap-12 items-start">

                {{-- Left: image + trust badges --}}
                <div>
                    <span class="text-xs font-bold tracking-widest text-primary uppercase">Explore Our Specialties</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3 mb-6">
                        Beautifully Crafted, Deliciously Made
                    </h2>

                    <div class="relative rounded-3xl overflow-hidden shadow-soft">
                        <img
                            src="{{ asset('Images/Products/Bcake2.jpg') }}"
                            alt="The Bloom Deluxe Confection Box"
                            class="w-full h-64 sm:h-72 lg:h-80 object-cover"
                        >
                        <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur px-4 py-2 rounded-xl shadow-card text-xs font-semibold text-neutral flex items-center gap-2">
                            <i data-lucide="gift" class="w-4 h-4 text-primary"></i>
                            The Bloom Deluxe Confection Box
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-3 mt-5">
                            @foreach(['Freshly Baked', 'Made with Ripe Bananas', 'Soft & Moist', 'Perfect for Sharing'] as $badge)
                            <span class="inline-flex items-center gap-1.5 bg-white text-xs font-medium text-neutral px-3 py-1.5 rounded-full border border-neutral/10">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-primary"></i>
                                {{ $badge }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Right: key highlights list --}}
                <div>
                    <p class="text-neutral-muted mb-6 mt-2 lg:mt-16">
                        Discover our selection of handcrafted cakes, pastries, and confectionery
                        creations made for everyday indulgence and unforgettable celebrations.
                    </p>

                    <div class="flex flex-col gap-4">
                        @php
                                $highlights = [
                                    ['icon' => 'cake-slice', 'title' => 'Signature Cakes', 'text' => 'Celebration cakes crafted with edible florals, silky swiss meringue, and gold leaf accents.'],
                                    ['icon' => 'circle-dot', 'title' => 'French Macarons', 'text' => 'Delicately crisp almond shells layered with velvety ganache and fruit curd fillings.'],
                                    ['icon' => 'cookie', 'title' => 'Hand-Piped Cupcakes', 'text' => 'Whipped vanilla buttercream swirls topped with berry reductions and edible blooms.'],
                                    ['icon' => 'gift', 'title' => 'Curated Dessert Boxes', 'text' => 'Mixed petit fours, tarts, and artisanal confections nestled in gift-ready luxury packaging.'],
                                ];
                            @endphp

                        @foreach($highlights as $item)
                            <div class="flex items-start gap-4 bg-white rounded-2xl p-5 shadow-card">
                                <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-tertiary text-primary shrink-0">
                                    <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
                                </span>
                                <div>
                                    <h4 class="font-display font-bold text-neutral">{{ $item['title'] }}</h4>
                                    <p class="text-sm text-neutral-muted mt-1">{{ $item['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <x-button href="#menu" variant="primary" size="lg" icon="arrow-down" iconPosition="right" class="w-full sm:w-auto mt-6">
                        View Full Menu
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- Product grid (mobile view / dashboard-style browse) --}}
    <section id="menu" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Fresh From Our Atelier</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">Our Sweetest Favorites</h2>
                <p class="text-neutral-muted mt-4">
                    Handmade every morning in limited small batches. Order early to secure today's bake.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $products = [
                    ['tag' => 'Specialty', 'img' => asset('Images/Products/Bcake1.jpg'), 'title' => 'Banana Cakes', 'desc' => 'Soft and moist banana cakes made with ripe bananas, perfect for a simple and satisfying sweet treat.', 'price' => 'For ₱50'],

                    ['tag' => 'Popular', 'img' => asset('Images/Products/Bites.jpg'), 'title' => 'Choco Pops', 'desc' => 'Delicious chocolate-coated bites with a rich and sweet flavor, perfect for sharing or enjoying on your own.', 'price' => 'For ₱15'],

                    ['tag' => 'Handcrafted', 'img' => asset('Images/Products/Puto1.jpg'), 'title' => 'Banana Cupcakes', 'desc' => 'Soft and fluffy banana cupcakes made with sweet ripe bananas for a delicious homemade treat.', 'price' => 'Box of 10 · For ₱50'],

                    ['tag' => 'Gift Ready', 'img' => asset('Images/Products/Donuchi.jpg'), 'title' => 'Graham Nest', 'desc' => 'A creamy and crunchy graham-based sweet treat made for satisfying your dessert cravings.', 'price' => 'For ₱10'],

                    ['tag' => 'Fresh Baked', 'img' => asset('Images/Products/Donut1.jpg'), 'title' => 'Mini Donuts', 'desc' => 'Soft and delicious mini donuts made fresh and finished with a sweet, irresistible touch.', 'price' => 'Box of 15 · For ₱225'],

                    ['tag' => 'Small Batch', 'img' => asset('Images/Products/Polvoron1.jpg'), 'title' => 'Flavoured Polvoron', 'desc' => 'Deliciously crumbly polvoron available in flavorful varieties, perfect for everyday snacking or sharing.', 'price' => 'For ₱10'],

                    ];
                @endphp

                @foreach($products as $product)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-card hover:shadow-soft hover:-translate-y-1 transition-all duration-200 border border-neutral/5">
                        <div class="relative">
                            <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-48 object-cover">
                            <span class="absolute top-3 right-3 bg-white/95 text-primary text-xs font-bold px-3 py-1 rounded-full">
                                {{ $product['tag'] }}
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-display font-bold text-neutral">{{ $product['title'] }}</h3>
                            <p class="text-sm text-neutral-muted mt-2">{{ $product['desc'] }}</p>
                            <div class="flex items-center justify-between mt-5">
                                <div>
                                    <p class="text-[10px] uppercase tracking-wide text-neutral-muted">Price</p>
                                    <p class="font-bold text-primary">{{ $product['price'] }}</p>
                                </div>
                                <x-button href="#order" variant="primary" size="sm" icon="shopping-cart">
                                    Order Now
                                </x-button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- 5. REVIEWS --}}
    <section id="reviews" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Kind Words</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">
                    Loved by Sweet-Tooth Customers
                </h2>
                <p class="text-neutral-muted mt-4">
                    Hear from customers who made their celebrations a little sweeter with Morsels Bloom.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-review-card
                    quote="The cake was absolutely beautiful and tasted even better. Everyone at the party loved it!"
                    name="Emily Chen"
                    role="Customer"
                    initials="EC"
                    :rating="5"
                />
                <x-review-card
                    quote="The pastries were fresh, beautifully packaged, and delivered right on time."
                    name="Marco Vasquez"
                    role="Birthday Customer"
                    initials="MV"
                    :rating="5"
                />
                <x-review-card
                    quote="Morsels Bloom made our celebration extra special. The desserts were beautiful and delicious."
                    name="Sophia Rodriguez"
                    role="Wedding Customer"
                    initials="SR"
                    :rating="5"
                />
            </div>
        </div>
    </section>

    {{-- 6. CALL-TO-ACTION / CONTACT SECTION --}}
    <section id="contact" class="bg-cream py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="relative bg-primary rounded-3xl overflow-hidden px-8 py-14 sm:px-14 sm:py-16 lg:px-20 lg:py-20 text-white">
                {{-- Decorative blobs --}}
                <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-primary-light/40 blur-2xl"></div>
                <div class="absolute -right-4 bottom-0 w-40 h-40 rounded-full bg-secondary/30 blur-2xl"></div>

                <div class="relative max-w-2xl mx-auto text-center">
                    <span class="inline-block bg-white/15 text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">
                        Get Started Today
                    </span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl mb-4">
                        Ready to Sweeten Your Day?
                    </h2>
                    <p class="text-white/85 mb-10 max-w-xl mx-auto">
                        Join our community of happy customers or reach out to our team — we'd love to help you find the perfect treat.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button href="#register" variant="secondary" size="lg" icon="user-plus">
                            Register Now
                        </x-button>
                        <x-button href="#contact-sales" variant="outlined" size="lg" icon="phone" class="!bg-transparent !text-white !border-white/30 hover:!bg-white/10">
                            Contact Sales
                        </x-button>
                    </div>

                    <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 mt-10 text-xs text-white/70">
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> Free to join</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> No commitment</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> Friendly support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
