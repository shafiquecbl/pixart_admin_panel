@props([
'variant' => 'primary',
'size' => 'md',
'href' => null,
'type' => 'button'
])

@php
$baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors duration-150';

$variantClasses = match($variant) {
'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500',
'secondary' => 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50 focus:ring-indigo-500',
'success' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-500',
'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500',
default => 'bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500'
};

$sizeClasses = match($size) {
'sm' => 'px-3 py-1.5 text-sm',
'md' => 'px-4 py-2 text-sm',
'lg' => 'px-5 py-2.5 text-base',
default => 'px-4 py-2 text-sm'
};

$classes = $baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses;
@endphp

@if($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
@endif