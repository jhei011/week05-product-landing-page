@props([
    'variant' => 'primary', // primary | secondary | ghost
    'href' => '#',
])

@php
$base = 'inline-flex items-center justify-center gap-2 rounded-full px-6 py-3 text-sm font-semibold tracking-wide transition-all duration-200 ease-out';

$variants = [
    'primary'   => 'bg-onyx text-chalk shadow-md shadow-onyx/20 hover:bg-onyx-light hover:shadow-lg hover:-translate-y-0.5',
    'secondary' => 'bg-transparent text-onyx border-2 border-onyx/25 hover:border-onyx hover:-translate-y-0.5',
    'ghost'     => 'bg-gold/15 text-onyx hover:bg-gold/30',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
