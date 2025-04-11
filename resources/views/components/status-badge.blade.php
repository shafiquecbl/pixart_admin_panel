@props([
'status' => 'active',
'size' => 'md'
])

@php
$baseClasses = 'inline-flex items-center rounded-full font-medium';

$sizeClasses = [
'sm' => 'px-2 py-0.5 text-xs',
'md' => 'px-2.5 py-0.5 text-sm',
'lg' => 'px-3 py-1 text-base'
][$size] ?? 'px-2.5 py-0.5 text-sm';

$statusClasses = [
'active' => 'bg-green-100 text-green-800',
'inactive' => 'bg-gray-100 text-gray-800',
'pending' => 'bg-yellow-100 text-yellow-800',
'error' => 'bg-red-100 text-red-800',
'warning' => 'bg-orange-100 text-orange-800',
'info' => 'bg-blue-100 text-blue-800'
][$status] ?? 'bg-gray-100 text-gray-800';

$classes = $baseClasses . ' ' . $sizeClasses . ' ' . $statusClasses;
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
