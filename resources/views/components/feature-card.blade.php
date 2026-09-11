@props([
    'icon'        => '✂️',
    'title'       => 'Service Title',
    'description' => 'Short service description goes here.',
])

<div class="group rounded-2xl bg-white p-8 shadow-sm ring-1 ring-onyx/6 hover:shadow-xl hover:shadow-onyx/10 hover:-translate-y-1 transition-all duration-200">
    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gold/15 text-2xl mb-5 group-hover:bg-gold/28 transition-colors">
        {{ $icon }}
    </div>
    <h3 class="font-serif text-lg font-semibold text-onyx mb-2">{{ $title }}</h3>
    <p class="text-sm text-onyx/65 leading-relaxed">{{ $description }}</p>
</div>
