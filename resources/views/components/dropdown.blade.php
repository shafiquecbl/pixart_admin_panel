@props([
'align' => 'right',
'width' => '48',
'contentClasses' => 'py-1 bg-white',
'variant' => 'default'
])

@php
switch ($align) {
case 'left':
$alignmentClasses = 'origin-top-left left-0';
break;
case 'top':
$alignmentClasses = 'origin-top';
break;
case 'right':
default:
$alignmentClasses = 'origin-top-right right-0';
break;
}

switch ($width) {
case '48':
$width = 'w-48';
break;
}

$variantClasses = [
'default' => 'rounded-md shadow-lg ring-1 ring-black ring-opacity-5',
'popup' => 'rounded-lg shadow-xl border border-gray-200'
][$variant] ?? 'rounded-md shadow-lg ring-1 ring-black ring-opacity-5';
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $width }} {{ $alignmentClasses }}"
        style="display: none;"
        @click="open = false">
        <div class="{{ $contentClasses }} {{ $variantClasses }}">
            {{ $content }}
        </div>
    </div>
</div>