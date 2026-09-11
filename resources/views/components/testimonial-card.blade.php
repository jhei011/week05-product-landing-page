@props([
    'photo'    => 'https://placehold.co/80x80/2E2E2E/C9A84C?text=%20',
    'name'     => '[Customer Name]',
    'position' => 'Regular Client',
    'review'   => 'Placeholder review — to be replaced with a genuine customer testimonial.',
    'rating'   => 5,
])

<div class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-onyx/6 hover:shadow-md transition-shadow">

    {{-- Stars --}}
    <div class="flex text-gold mb-4 text-sm tracking-widest">
        @for ($i = 0; $i < $rating; $i++)
            ★
        @endfor
    </div>

    {{-- Review text --}}
    <p class="text-onyx/70 text-sm leading-relaxed mb-6">&ldquo;{{ $review }}&rdquo;</p>

    {{-- Reviewer --}}
    <div class="flex items-center gap-3">
        <img src="{{ $photo }}"
             alt="{{ $name }}"
             class="h-11 w-11 rounded-full object-cover ring-2 ring-gold/30">
        <div>
            <p class="text-sm font-semibold text-onyx">{{ $name }}</p>
            <p class="text-xs text-onyx/50">{{ $position }}</p>
        </div>
    </div>

</div>
