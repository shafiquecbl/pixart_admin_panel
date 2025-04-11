@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Inspirations</h1>
            <p class="mt-1 text-sm text-gray-500">Browse and manage AI-generated inspirations</p>
        </div>
        <div>
            <x-button>
                Add New
                <svg class="ml-2 -mr-0.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </x-button>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($inspirations ?? [] as $inspiration)
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <img src="{{ $inspiration->image_url ?? 'https://via.placeholder.com/400x225' }}" alt="{{ $inspiration->title ?? 'Inspiration' }}" class="object-cover w-full h-full">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-medium text-gray-900">{{ $inspiration->title ?? 'Untitled' }}</h3>
                <p class="mt-1 text-sm text-gray-500">{{ $inspiration->description ?? 'No description available' }}</p>
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-sm font-medium text-gray-600">{{ substr($inspiration->user->name ?? 'U', 0, 1) }}</span>
                        </div>
                        <span class="text-sm text-gray-500">{{ $inspiration->user->name ?? 'Unknown' }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="p-1 text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <button class="p-1 text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No inspirations</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating a new inspiration.</p>
            <div class="mt-6">
                <x-button>
                    Add New Inspiration
                </x-button>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection