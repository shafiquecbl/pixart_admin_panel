@props([
'type' => 'button',
'variant' => 'primary',
'size' => 'md',
'disabled' => false,
'href' => null
])

@php
$baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg focus:outline-none transition-colors duration-200';

$sizeClasses = [
'sm' => 'px-3 py-1.5 text-sm',
'md' => 'px-4 py-2 text-sm',
'lg' => 'px-5 py-2.5 text-base'
][$size] ?? 'px-4 py-2 text-sm';

$variantClasses = [
'primary' => 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2',
'secondary' => 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2',
'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-offset-2',
'search' => 'bg-white text-gray-500 border border-gray-300 hover:bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2'
][$variant] ?? 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2';

$classes = $baseClasses . ' ' . $sizeClasses . ' ' . $variantClasses;
if ($disabled) {
$classes .= ' opacity-50 cursor-not-allowed';
}
@endphp

@if ($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }} {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>
@endif