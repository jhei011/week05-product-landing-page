@props([
    'plan'        => 'Service',
    'price'       => null,        // null = contact for pricing
    'period'      => '',
    'description' => '',
    'features'    => [],
    'cta'         => 'Visit Us',
    'ctaHref'     => '#get-started',
    'featured'    => false,
])

<div @class([
    'relative rounded-2xl p-8 flex flex-col',
    'bg-onyx text-chalk shadow-2xl shadow-onyx/40 scale-105 ring-1 ring-onyx'   => $featured,
    'bg-white text-onyx ring-1 ring-onyx/10 shadow-sm hover:shadow-md transition-shadow' => ! $featured,
])>

    @if($featured)
        <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 rounded-full bg-gold text-onyx text-xs font-bold uppercase tracking-widest px-4 py-1 shadow-md">
            Most Popular
        </span>
    @endif

    <h3 @class([
        'font-serif text-xl font-bold mb-1',
        'text-chalk' => $featured,
        'text-onyx'  => ! $featured,
    ])>
        {{ $plan }}
    </h3>

    <p @class([
        'text-sm mb-6',
        'text-chalk/60' => $featured,
        'text-onyx/55'  => ! $featured,
    ])>
        {{ $description }}
    </p>

    <div class="mb-8">
        @if($price !== null)
            <span @class(['font-serif text-4xl font-bold', 'text-chalk' => $featured, 'text-onyx' => !$featured])>
                ₱{{ $price }}
            </span>
            @if($period)
                <span @class(['text-sm ml-1', 'text-chalk/55' => $featured, 'text-onyx/45' => !$featured])>
                    {{ $period }}
                </span>
            @endif
        @else
            <span @class(['font-serif text-lg font-semibold italic', 'text-chalk/70' => $featured, 'text-onyx/55' => !$featured])>
                Contact us for current pricing
            </span>
        @endif
    </div>

    <ul class="space-y-3 mb-10 flex-1">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <span @class([
                    'mt-0.5 font-bold',
                    'text-gold-light' => $featured,
                    'text-gold-dark'  => ! $featured,
                ])>✓</span>
                <span @class([
                    'text-chalk/80' => $featured,
                    'text-onyx/70'  => ! $featured,
                ])>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button
        href="{{ $ctaHref }}"
        :variant="$featured ? 'ghost' : 'secondary'"
        @class(['w-full', '!bg-gold !text-onyx hover:!bg-gold-dark border-0' => $featured])
    >
        {{ $cta }}
    </x-button>

</div>
