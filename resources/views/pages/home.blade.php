<x-app-layout>

    {{-- ── HERO ───────────────────────────────────────────────── --}}
    <x-hero />

    {{-- ── SERVICES ────────────────────────────────────────────── --}}
    <section id="services" class="py-20 lg:py-28 bg-chalk">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-semibold uppercase tracking-widest text-gold-dark">What We Offer</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-onyx mt-3 mb-4">
                    Everything a gentleman needs
                </h2>
                <p class="text-onyx/60 leading-relaxed">
                    From everyday haircuts to detailed grooming — our barbers are skilled across all styles and techniques.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card
                    icon="✂️"
                    title="Haircut & Styling"
                    description="Precision cuts tailored to your face shape and preference — from classic gentleman styles to modern textured looks."
                />
                <x-feature-card
                    icon="🪒"
                    title="Shave & Beard Trim"
                    description="Clean hot-towel shaves and detailed beard shaping for a sharp, well-groomed finish every time."
                />
                <x-feature-card
                    icon="💈"
                    title="Fade & Taper"
                    description="Low, mid, and high fades executed with care — smooth blends that keep your look clean between visits."
                />
                <x-feature-card
                    icon="👦"
                    title="Kids' Haircut"
                    description="Patient, friendly service for younger clients — making the barbershop a comfortable experience for kids."
                />
                <x-feature-card
                    icon="💆"
                    title="Scalp Treatment"
                    description="Relaxing scalp massage and treatment to promote healthy hair and leave you feeling refreshed."
                />
                <x-feature-card
                    icon="🎨"
                    title="Hair Color & Design"
                    description="Bold color jobs and creative hair designs for clients who want to express their personal style."
                />
            </div>
        </div>
    </section>

    {{-- ── SHOWCASE ─────────────────────────────────────────────── --}}
    <x-product-showcase
        mainImage="public/images/interior.png"
        sideImage="public/images/interior.png"
        :highlights="[
            'Clean, professional environment maintained daily',
            'Experienced barbers skilled across all hair types',
            'Quality tools and grooming products used on every client',
            'Walk-in friendly — no appointment necessary',
            'Conveniently located in Lumban, Laguna',
        ]"
    />

    {{-- ── PRICING ──────────────────────────────────────────────── --}}
    <section id="pricing" class="py-20 lg:py-28 bg-chalk">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-semibold uppercase tracking-widest text-gold-dark">Service Packages</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-onyx mt-3 mb-4">
                    Simple, honest pricing
                </h2>
                <p class="text-onyx/60 leading-relaxed">
                    Prices from the official Gunting Master Barbershop pricelist. Visit us to confirm current rates.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-6 max-w-5xl mx-auto items-start">

                <x-pricing-card
                    plan="Regular Haircut"
                    price="100"
                    description="Classic cuts for every style."
                    :features="['Barbers Cut', 'Semi Kalbo', 'Trim', 'Head Shave (Ahit Kalbo)', 'Flat Top']"
                    cta="Visit Us"
                    ctaHref="#get-started"
                />

                <x-pricing-card
                    plan="All Types of Fade"
                    price="100"
                    description="Every fade style, clean and precise."
                    :features="['Low Fade', 'Mid Fade', 'High Fade', 'Skin Fade', 'Bald Fade', 'Crop Fade', 'Taper Fade', 'Burst Fade Mullet']"
                    cta="Visit Us"
                    ctaHref="#get-started"
                    :featured="true"
                />

                <x-pricing-card
                    plan="Beard & Hair Dye"
                    price="80"
                    period="starting"
                    description="Grooming extras and color services."
                    :features="['Shave (Nakaupo) — ₱80', 'Shave with Facial — ₱150', 'Massage & Hot Towel — ₱150', 'Hair Dye (Dark Brown / Brown / Black) — ₱250']"
                    cta="Contact Us"
                    ctaHref="#contact"
                />

            </div>

            <p class="text-center text-xs text-onyx/40 mt-10">
                * Prices sourced from the official Gunting Master Barbershop pricelist. Subject to change — visit the shop to confirm current rates.
            </p>

        </div>
    </section>

    {{-- ── TESTIMONIALS ─────────────────────────────────────────── --}}
    <section id="testimonials" class="bg-onyx/4 py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-semibold uppercase tracking-widest text-gold-dark">Testimonials</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-onyx mt-3 mb-4">
                    What our clients say
                </h2>
                <p class="text-onyx/55 text-sm italic">
                    The reviews below are placeholder testimonials. They will be replaced with genuine customer feedback once collected.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <x-testimonial-card
                    photo="https://placehold.co/80x80/2E2E2E/C9A84C?text=JD"
                    name="[Client Name]"
                    position="Regular Client — Placeholder"
                    review="Always leave looking sharp. The barbers here really know what they're doing — consistent every single time. This is a placeholder review to be replaced with a real one."
                />

                <x-testimonial-card
                    photo="https://placehold.co/80x80/2E2E2E/C9A84C?text=RM"
                    name="[Client Name]"
                    position="Regular Client — Placeholder"
                    review="Best fade in Lumban. Clean shop, friendly staff, and the price is reasonable. I bring my kids here too. Placeholder review — to be updated with genuine feedback."
                />

                <x-testimonial-card
                    photo="https://placehold.co/80x80/2E2E2E/C9A84C?text=AL"
                    name="[Client Name]"
                    position="Regular Client — Placeholder"
                    review="Walk-ins are no problem here. Never waited too long and the service is always top-notch. This review is a placeholder and will be replaced with an actual customer testimonial."
                />

            </div>
        </div>
    </section>

    {{-- ── CTA ───────────────────────────────────────────────────── --}}
    <x-cta />

</x-app-layout>
