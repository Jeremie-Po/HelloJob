@php
    $classes = 'rounded-xl p-4 bg-white/5 border border-transparent hover:border-blue-600 group transition-colors duration-300'
@endphp

<div {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</div>