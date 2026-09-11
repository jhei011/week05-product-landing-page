<header x-data="{ open: false }" class="sticky top-0 z-50 bg-chalk/95 backdrop-blur border-b border-onyx/10">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="/" class="flex items-center">
                @if(file_exists(public_path('images/logo.png')))
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Gunting Master Barbershop"
                         class="h-12 w-auto object-contain">
                @else
                    {{-- Text fallback when logo file is not yet placed in public/images/ --}}
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-onyx ring-2 ring-gold/40">
                            <span class="text-gold font-serif font-bold text-xs">GM</span>
                        </div>
                        <div class="flex flex-col leading-none">
                            <span class="font-serif text-base font-bold tracking-tight text-onyx">Gunting Master</span>
                            <span class="text-[10px] font-medium tracking-widest text-gold uppercase">Barbershop</span>
                        </div>
                    </div>
                @endif
            </a>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home"         class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Home</a>
                <a href="#services"     class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Services</a>
                <a href="#showcase"     class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Showcase</a>
                <a href="#pricing"      class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Pricing</a>
                <a href="#testimonials" class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Testimonials</a>
                <a href="#contact"      class="text-sm font-medium text-onyx/70 hover:text-onyx transition-colors">Contact</a>
            </div>

            <!-- Desktop CTAs -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#contact" class="text-sm font-semibold text-onyx/70 hover:text-onyx px-4 py-2 transition-colors">Sign In</a>
                <x-button href="#get-started" variant="primary">Book a Visit</x-button>
            </div>

            <!-- Mobile toggle -->
            <button @click="open = !open" class="md:hidden p-2 -mr-2 text-onyx" aria-label="Toggle menu">
                <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" x-cloak @click.away="open = false" class="md:hidden pb-6 flex flex-col gap-4" style="display:none">
            <a href="#home"         class="text-sm font-medium text-onyx/80">Home</a>
            <a href="#services"     class="text-sm font-medium text-onyx/80">Services</a>
            <a href="#showcase"     class="text-sm font-medium text-onyx/80">Showcase</a>
            <a href="#pricing"      class="text-sm font-medium text-onyx/80">Pricing</a>
            <a href="#testimonials" class="text-sm font-medium text-onyx/80">Testimonials</a>
            <a href="#contact"      class="text-sm font-medium text-onyx/80">Contact</a>
            <hr class="border-onyx/10">
            <a href="#contact" class="text-sm font-semibold text-onyx">Sign In</a>
            <x-button href="#get-started" variant="primary" class="w-full">Book a Visit</x-button>
        </div>
    </nav>
</header>
