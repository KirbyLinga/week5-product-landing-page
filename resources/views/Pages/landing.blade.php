@extends('layouts.app')

@section('title', 'Morsel Bloom — Handcrafted Filipino Sweet Treats')
@section('description', 'Home-baked Filipino delicacies — banana cakes, choco pops, puto, mini donuts, and polvoron. Freshly made daily. Order online today!')

@section('content')

    {{-- 1. HERO SECTION --}}
    <x-hero />

    {{-- 2. FEATURES SECTION (6 cards) --}}
    <section id="features" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Why Morsel Bloom</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">Baked With Love, Delivered With Care</h2>
                <p class="text-neutral-muted mt-4">Every treat is carefully prepared using quality ingredients and time-honored Filipino recipes.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card icon="leaf" icon-bg="bg-tertiary text-primary" title="Quality Ingredients" description="We use carefully selected ingredients to create delicious Filipino treats." />
                <x-feature-card icon="flame" icon-bg="bg-secondary/20 text-secondary-dark" title="Freshly Baked Daily" description="Our banana cakes, puto, and pastries are baked fresh every morning." />
                <x-feature-card icon="palette" icon-bg="bg-tertiary text-primary" title="Custom Orders" description="Personalized dessert trays designed for your celebration and theme." />
                <x-feature-card icon="cake-slice" icon-bg="bg-tertiary text-primary" title="Celebration Cakes" description="Beautiful handcrafted cakes for birthdays, fiestas, and special occasions." />
                <x-feature-card icon="package" icon-bg="bg-secondary/20 text-secondary-dark" title="Merienda Packs" description="Assorted sweet treat packages for office snacks and family bonding." />
                <x-feature-card icon="heart" icon-bg="bg-tertiary text-primary" title="Made with Love" description="Every order is prepared with the same care as for our own family." />
            </div>
        </div>
    </section>

    {{-- 3. PRODUCT SHOWCASE --}}
    <section id="menu" class="bg-cream py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Our Specialties</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">Filipino Favorites, Freshly Baked</h2>
                <p class="text-neutral-muted mt-4">Discover our best-selling homemade treats.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card tag="Best Seller" img="{{ asset('Images/Products/Bcake1.jpg') }}" title="Banana Cakes" desc="Soft and moist banana cakes made with ripe bananas." price="From ₱50" />
                <x-feature-card tag="Popular" img="{{ asset('Images/Products/Bites.jpg') }}" title="Choco Pops" desc="Delicious chocolate-coated bites with a rich, sweet flavor." price="From ₱15" />
                <x-feature-card tag="Classic" img="{{ asset('Images/Products/Puto1.jpg') }}" title="Puto" desc="Soft and fluffy Filipino steamed rice cakes." price="From ₱25" />
                <x-feature-card tag="Fun Snack" img="{{ asset('Images/Products/Donut1.jpg') }}" title="Mini Donuts" desc="Bite-sized donuts with various toppings." price="From ₱20" />
                <x-feature-card tag="Traditional" img="{{ asset('Images/Products/Polvoron1.jpg') }}" title="Polvoron" desc="Crumbly Filipino shortbread-style candy." price="From ₱30" />
                <x-feature-card tag="New" img="{{ asset('Images/Products/Donuchi.jpg') }}" title="Donuchi" desc="A fusion of donut and churro flavors." price="From ₱35" />
            </div>
        </div>
    </section>

    {{-- 4. PRODUCT HIGHLIGHTS --}}
    <section id="specialties" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-soft border-8 border-cream">
                        <img src="{{ asset('Images/Products/Bcake2.jpg') }}" alt="Banana Cake" class="w-full h-[300px] sm:h-[380px] lg:h-[460px] object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-2xl overflow-hidden shadow-soft border-4 border-white hidden sm:block">
                        <img src="{{ asset('Images/Products/Polvoron2.jpg') }}" alt="Polvoron" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <span class="text-xs font-bold tracking-widest text-primary uppercase">Crafted with Care</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">Every Bite Tells a Story</h2>
                    <p class="text-neutral-muted mt-4 max-w-lg">From banana cakes to polvoron, every product is made from scratch using traditional Filipino recipes.</p>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-tertiary text-primary flex items-center justify-center shrink-0"><i data-lucide="check" class="w-3.5 h-3.5"></i></span><div><p class="text-sm font-semibold text-neutral">100% Homemade</p><p class="text-xs text-neutral-muted">No preservatives, no artificial flavors.</p></div></li>
                        <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-tertiary text-primary flex items-center justify-center shrink-0"><i data-lucide="check" class="w-3.5 h-3.5"></i></span><div><p class="text-sm font-semibold text-neutral">Fresh Daily</p><p class="text-xs text-neutral-muted">Baked every morning for the best taste.</p></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. PRICING SECTION --}}
    <section id="pricing" class="bg-cream py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Pricing Plans</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">Affordable Treats for Every Occasion</h2>
                <p class="text-neutral-muted mt-4">Choose a package that fits your needs.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <x-pricing-card name="Starter" price="₱499" period="per batch" description="Perfect for small gatherings and personal cravings." :features="['6 pcs Banana Cake', '12 pcs Mini Donuts', 'Free delivery within town', 'Basic packaging']" buttonLabel="Order Starter" buttonHref="#order" />
                <x-pricing-card name="Professional" price="₱1,499" period="per tray" description="Great for office merienda, parties, and family bonding." :features="['12 pcs Banana Cake', '24 pcs Mini Donuts', '1 box Choco Pops', '1 box Polvoron', 'Free delivery within province', 'Gift packaging']" buttonLabel="Order Professional" buttonHref="#order" highlighted="true" />
                <x-pricing-card name="Enterprise" price="₱3,999" period="per event" description="Ideal for large celebrations, fiestas, and corporate events." :features="['Custom dessert tray', '20+ pcs assorted treats', 'Free nationwide delivery', 'Premium gift box', 'Priority order handling', 'Dedicated support']" buttonLabel="Order Enterprise" buttonHref="#order" />
            </div>
        </div>
    </section>

    {{-- 6. TESTIMONIALS SECTION --}}
    <section id="testimonials" class="bg-white py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-widest text-primary uppercase">Testimonials</span>
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl text-neutral mt-3">What Our Customers Say</h2>
                <p class="text-neutral-muted mt-4">Real reviews from real customers who love our homemade Filipino treats.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-review-card quote="The banana cake was absolutely moist and delicious! Everyone at our family gathering loved it." name="Maria Santos" position="Loyal Customer" :rating="5" />
                <x-review-card quote="The choco pops were a hit at my kid's birthday party. Fresh, affordable, and delivered on time!" name="Juan Dela Cruz" position="Birthday Celebrant" :rating="5" />
                <x-review-card quote="Morsel Bloom's polvoron reminds me of my lola's recipe. Authentic taste and beautifully packaged." name="Ana Reyes" position="Satisfied Customer" :rating="5" />
            </div>
        </div>
    </section>

    {{-- 7. CALL-TO-ACTION / CONTACT SECTION --}}
    <section id="contact" class="bg-cream py-16 lg:py-20">
        <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16">
            <div class="relative bg-primary rounded-3xl overflow-hidden px-8 py-14 sm:px-14 sm:py-16 lg:px-20 lg:py-20 text-white">
                <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-primary-light/40 blur-2xl"></div>
                <div class="absolute -right-4 bottom-0 w-40 h-40 rounded-full bg-secondary/30 blur-2xl"></div>
                <div class="relative max-w-2xl mx-auto text-center">
                    <span class="inline-block bg-white/15 text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">Order Today</span>
                    <h2 class="font-display font-extrabold text-3xl sm:text-4xl mb-4">Ready to Sweeten Your Day?</h2>
                    <p class="text-white/85 mb-10 max-w-xl mx-auto">Whether it is a personal merienda or a big celebration — we would love to make your moment sweeter with Morsel Bloom.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button href="#register" variant="secondary" size="lg" icon="user-plus">Register Now</x-button>
                        <x-button href="#contact-sales" variant="outlined" size="lg" icon="phone" class="!bg-transparent !text-white !border-white/30 hover:!bg-white/10">Contact Us</x-button>
                    </div>
                    <div class="flex flex-wrap justify-center gap-x-6 gap-y-2 mt-10 text-xs text-white/70">
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> Freshly baked daily</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> Free delivery within town</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5"></i> Custom orders welcome</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

