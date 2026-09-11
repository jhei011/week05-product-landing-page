<footer id="contact" class="bg-onyx text-chalk">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 grid gap-12 md:grid-cols-2 lg:grid-cols-4">

        {{-- Brand column --}}
        <div>
            <div class="flex items-center gap-3 mb-5">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gold text-onyx font-serif font-bold text-sm ring-2 ring-gold/40">
                    GM
                </div>
                <div class="flex flex-col leading-none">
                    <span class="font-serif text-base font-bold text-chalk">Gunting Master</span>
                    <span class="text-[10px] font-medium tracking-widest text-gold uppercase">Barbershop</span>
                </div>
            </div>
            <p class="text-sm text-chalk/55 leading-relaxed">
                Professional haircuts, clean fades, and expert grooming for every gentleman — located in the heart of Lumban, Laguna.
            </p>
        </div>

        {{-- Quick Links --}}
        <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-gold mb-5">Quick Links</h4>
            <ul class="space-y-3 text-sm text-chalk/55">
                <li><a href="#home"         class="hover:text-chalk transition-colors">Home</a></li>
                <li><a href="#services"     class="hover:text-chalk transition-colors">Services</a></li>
                <li><a href="#showcase"     class="hover:text-chalk transition-colors">Showcase</a></li>
                <li><a href="#pricing"      class="hover:text-chalk transition-colors">Pricing</a></li>
                <li><a href="#testimonials" class="hover:text-chalk transition-colors">Testimonials</a></li>
            </ul>
        </div>

        {{-- Contact --}}
        <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-gold mb-5">Visit Us</h4>
            <ul class="space-y-3 text-sm text-chalk/55">
                <li class="flex items-start gap-2">
                    <span class="text-gold mt-0.5">📍</span>
                    <span>Lumban, Laguna, Philippines</span>
                </li>
                <li class="flex items-center gap-2">
                    <span class="text-gold">🕐</span>
                    <span>Open Daily — hours may vary</span>
                </li>
                <li class="flex items-center gap-2">
                    <span class="text-gold">✂</span>
                    <span>Walk-ins Welcome</span>
                </li>
                {{-- Phone: placeholder until verified --}}
                <li class="flex items-center gap-2">
                    <span class="text-gold">📞</span>
                    <span>[Contact number — to be updated]</span>
                </li>
            </ul>
        </div>

        {{-- Social --}}
        <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-gold mb-5">Follow Us</h4>
            <p class="text-xs text-chalk/40 mb-4">Social media links to be added when official accounts are confirmed.</p>
            <div class="flex gap-3">
                <a href="#" aria-label="Facebook"
                   class="flex h-9 w-9 items-center justify-center rounded-full bg-chalk/10 hover:bg-gold hover:text-onyx transition-colors text-sm font-bold">
                    f
                </a>
                <a href="#" aria-label="Instagram"
                   class="flex h-9 w-9 items-center justify-center rounded-full bg-chalk/10 hover:bg-gold hover:text-onyx transition-colors text-xs font-bold">
                    ig
                </a>
                <a href="#" aria-label="TikTok"
                   class="flex h-9 w-9 items-center justify-center rounded-full bg-chalk/10 hover:bg-gold hover:text-onyx transition-colors text-xs font-bold">
                    tt
                </a>
            </div>
        </div>

    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-chalk/10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-2">
            <p class="text-xs text-chalk/40">
                &copy; {{ date('Y') }} Gunting Master Barbershop. All rights reserved.
            </p>
            <p class="text-xs text-chalk/30">Lumban, Laguna, Philippines</p>
        </div>
    </div>
</footer>
