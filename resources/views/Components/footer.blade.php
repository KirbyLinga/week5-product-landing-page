{{--
    Site footer. Links/socials/contact passed as arrays so it stays reusable.
--}}
@props([
    'logoText' => 'Morsel Bloom',
    'tagline' => 'Filipino Sweet Treats Made with Love',
    'description' => 'Home-baked Filipino delicacies — banana cakes, choco pops, puto, mini donuts, and polvoron — crafted fresh for your merienda and celebrations.',
    'quickLinks' => [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Reviews', 'href' => '#testimonials'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],
    'socials' => [
        ['label' => 'Facebook', 'caption' => 'Follow us', 'icon' => 'facebook', 'href' => '#'],
        ['label' => 'Instagram', 'caption' => 'Daily bakes', 'icon' => 'instagram', 'href' => '#'],
        ['label' => 'TikTok', 'caption' => 'Pastry tips', 'icon' => 'music-2', 'href' => '#'],
    ],
    'address' => 'Barangay Poblacion, Philippines',
    'phone' => '+63 917 123 4567',
    'email' => 'hello@morselbloom.com',
    'hours' => 'Mon–Sat: 7:00 AM – 6:00 PM | Sun: 8:00 AM – 2:00 PM',
    'year' => date('Y'),
])

<footer class="bg-cream border-t border-tertiary">
    <div class="max-w-[1800px] mx-auto px-6 sm:px-10 lg:px-16 py-14">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Company info --}}
            <div>
                <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('Images/Logo.jpg') }}" alt="{{ $logoText }} logo" class="h-9 w-auto rounded-full object-cover">
                    <span class="font-display font-bold text-primary">{{ $logoText }}</span>
                </div>
                <p class="text-sm font-semibold text-secondary-dark mb-2">{{ $tagline }}</p>
                <p class="text-sm text-neutral-muted leading-relaxed">{{ $description }}</p>
            </div>

            {{-- Quick links --}}
            <div>
                <h4 class="font-display font-bold text-neutral mb-4">Quick Links</h4>
                <ul class="flex flex-col gap-2 text-sm text-neutral-muted">
                    @foreach($quickLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="hover:text-primary transition-colors">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Social & community --}}
            <div>
                <h4 class="font-display font-bold text-neutral mb-4">Social & Community</h4>
                <ul class="flex flex-col gap-3">
                    @foreach($socials as $social)
                        <li>
                            <a href="{{ $social['href'] }}" class="flex items-center justify-between text-sm text-neutral hover:text-primary transition-colors group">
                                <span class="flex items-center gap-2">
                                    <i data-lucide="{{ $social['icon'] }}" class="w-4 h-4"></i>
                                    {{ $social['label'] }}
                                </span>
                                <span class="text-xs text-neutral-muted group-hover:text-primary">{{ $social['caption'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-display font-bold text-neutral mb-4">Contact & Bakery Studio</h4>
                <ul class="flex flex-col gap-3 text-sm text-neutral-muted">
                    <li class="flex items-start gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 text-primary shrink-0"></i>
                        {{ $address }}
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-primary shrink-0"></i>
                        {{ $phone }}
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-primary shrink-0"></i>
                        {{ $email }}
                    </li>
                    <li class="flex items-start gap-2">
                        <i data-lucide="clock" class="w-4 h-4 mt-0.5 text-primary shrink-0"></i>
                        {{ $hours }}
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-12 pt-6 border-t border-neutral/10 text-xs text-neutral-muted">
            <p>© {{ $year }} {{ $logoText }}. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
        