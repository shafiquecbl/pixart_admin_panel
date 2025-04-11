@props(['href' => '#', 'icon' => null])

<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out']) }} href="{{ $href }}">
    <div class="flex items-center">
        @if($icon)
        <div class="flex-shrink-0 mr-3">
            {!! $icon !!}
        </div>
        @endif
        <span>{{ $slot }}</span>
    </div>
</a>