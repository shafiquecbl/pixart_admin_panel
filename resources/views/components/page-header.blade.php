@props([
'title',
'searchPlaceholder' => 'Search...',
'createButtonText' => 'Add New',
'createRoute' => null
])

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-900">{{ $title }}</h1>

    <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="w-72">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg text-sm placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" placeholder="{{ $searchPlaceholder }}">
            </div>
        </div>

        @if($createRoute)
        <x-button href="{{ $createRoute }}" class="flex-shrink-0">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            {{ $createButtonText }}
        </x-button>
        @endif
    </div>
</div>