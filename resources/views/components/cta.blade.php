@props([
    'title'       => "Ready for a Fresh Cut?",
    'description' => "Walk in or visit us today — no appointment needed. Gunting Master Barbershop is open daily in Lumban, Laguna.",
])

<section id="get-started" class="py-20 lg:py-24">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">

        <div class="relative overflow-hidden rounded-3xl bg-onyx px-8 py-16 sm:px-16 text-center">

            {{-- Decorative glows --}}
            <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-gold/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-10 h-64 w-64 rounded-full bg-gold/8 blur-3xl pointer-events-none"></div>

            {{-- Barber pole accents --}}
            <div class="absolute top-0 left-8 bottom-0 w-px bg-gradient-to-b from-transparent via-gold/30 to-transparent hidden sm:block"></div>
            <div class="absolute top-0 right-8 bottom-0 w-px bg-gradient-to-b from-transparent via-gold/30 to-transparent hidden sm:block"></div>

            <div class="relative">
                <span class="inline-block text-3xl mb-4">✂</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-chalk mb-4">
                    {{ $title }}
                </h2>
                <p class="text-chalk/65 max-w-xl mx-auto mb-10 leading-relaxed">
                    {{ $description }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">

                    {{-- Get Directions --}}
                    <x-button
                        href="https://maps.google.com/?q=Gunting+Master+Barbershop+Santa+Cruz+Laguna"
                        variant="ghost"
                        class="!bg-gold !text-onyx hover:!bg-gold-dark border-0 w-full sm:w-auto"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Get Directions
                    </x-button>

                    {{-- Contact Us --}}
                    <x-button
                        href="#contact"
                        variant="secondary"
                        class="!border-chalk/25 !text-chalk hover:!border-chalk w-full sm:w-auto"
                    >
                        Contact Us
                    </x-button>

                </div>
            </div>
        </div>

    </div>
</section>
