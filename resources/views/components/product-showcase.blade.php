@props([
    'mainImage'   => 'https://placehold.co/900x560/1A1A1A/C9A84C?text=Barbershop+Interior',
    'sideImage'   => 'https://placehold.co/300x600/2E2E2E/C9A84C?text=Barber+Station',
    'highlights'  => [],
])

<section id="showcase" class="bg-onyx/4 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-semibold uppercase tracking-widest text-gold-dark">Barbershop Showcase</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-onyx mt-3 mb-4">
                Craftsmanship you can see
            </h2>
            <p class="text-onyx/60 leading-relaxed">
                Step inside Gunting Master — a clean, professional space built for the modern gentleman. Every station is set up for precision, every visit is an experience.
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-8 items-center">

            {{-- Main large image --}}
            <div class="lg:col-span-3 rounded-3xl overflow-hidden shadow-xl shadow-onyx/15 ring-1 ring-onyx/8">
                <img src="{{ $mainImage }}"
                     alt="Gunting Master Barbershop interior"
                     class="w-full h-auto object-cover">
            </div>

            {{-- Side image + highlights --}}
            <div class="lg:col-span-2 flex flex-col items-center lg:items-start gap-8">

                <div class="relative">
                    <img src="{{ $sideImage }}"
                         alt="Barber station at Gunting Master"
                         class="w-44 rounded-2xl shadow-xl shadow-onyx/15 ring-1 ring-onyx/8 object-cover">
                    <div class="absolute -bottom-3 -right-3 bg-gold text-onyx rounded-xl px-3 py-2 text-xs font-bold shadow-md">
                        Pro Setup
                    </div>
                </div>

                <ul class="space-y-4 w-full">
                    @foreach($highlights as $highlight)
                        <li class="flex items-start gap-3 text-sm text-onyx/70">
                            <span class="mt-0.5 text-gold font-bold text-base leading-none">✓</span>
                            <span>{{ $highlight }}</span>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </div>
</section>
