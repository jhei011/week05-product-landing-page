@props([
    'eyebrow'      => 'Lumban, Laguna · Est. in the Community',
    'title'        => 'Look Sharp. Feel Confident.',
    'description'  => "Gunting Master Barbershop delivers precision haircuts, clean fades, and expert grooming in the heart of Lumban, Laguna. Walk in and walk out looking your best — every single time.",
    'primaryCta'   => 'Get Directions',
    'secondaryCta' => 'See Our Services',
    'image'        => '/images/portrait.png',
])

<section id="home" class="relative overflow-hidden bg-chalk">
    {{-- Decorative background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-gold/8 via-transparent to-onyx/5 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-onyx/3 pointer-events-none hidden lg:block"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-16 pb-20 lg:pt-24 lg:pb-28 grid lg:grid-cols-2 gap-12 items-center">

        {{-- Copy --}}
        <div class="text-center lg:text-left">

            <div class="inline-flex items-center gap-2 rounded-full bg-onyx/8 px-4 py-1.5 mb-6">
                <span class="h-1.5 w-1.5 rounded-full bg-gold"></span>
                <span class="text-xs font-semibold tracking-widest text-onyx/70 uppercase">{{ $eyebrow }}</span>
            </div>

            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.08] text-onyx mb-6">
                {{ $title }}
            </h1>

            <p class="text-base sm:text-lg text-onyx/65 max-w-xl mx-auto lg:mx-0 mb-10 leading-relaxed">
                {{ $description }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <x-button href="https://maps.google.com/?q=Gunting+Master+Barbershop+Santa+Cruz+Laguna" variant="primary" class="w-full sm:w-auto">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    {{ $primaryCta }}
                </x-button>
                <x-button href="#services" variant="secondary" class="w-full sm:w-auto">
                    {{ $secondaryCta }}
                </x-button>
            </div>

            {{-- Social proof --}}
            <div class="mt-10 flex flex-wrap items-center gap-6 justify-center lg:justify-start">
                <div class="flex items-center gap-2 text-sm text-onyx/55">
                    <span class="text-gold text-base">★★★★★</span>
                    <span>Loved by the community</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-onyx/55">
                    <span class="text-gold">✂</span>
                    <span>Precision cuts, every visit</span>
                </div>
            </div>
        </div>

        {{-- Visual --}}
        <div class="relative flex justify-center">
            {{-- Glow blob --}}
            <div class="absolute -inset-8 bg-gold/15 rounded-[3rem] blur-3xl"></div>

            {{-- Main image --}}
            <div class="relative w-full max-w-sm">
                <img src="{{ $image }}"
                     alt="Gunting Master Barbershop — interior preview"
                     class="relative rounded-3xl shadow-2xl shadow-onyx/30 w-full object-cover aspect-[4/5]">

                {{-- Floating badge --}}
                <div class="absolute -bottom-4 -left-4 bg-onyx text-chalk rounded-2xl px-5 py-4 shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gold text-onyx text-lg">✂</div>
                        <div>
                            <p class="text-xs text-chalk/60 leading-none mb-0.5">Walk-ins Welcome</p>
                            <p class="text-sm font-semibold leading-none">Open Daily</p>
                        </div>
                    </div>
                </div>

                {{-- Corner accent --}}
                <div class="absolute -top-3 -right-3 bg-gold text-onyx rounded-xl px-3 py-2 text-xs font-bold tracking-wide shadow-lg">
                    Lumban, LGN
                </div>
            </div>
        </div>

    </div>
</section>
