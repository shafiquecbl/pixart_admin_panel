@extends('layouts.app')

@section('content')
<div class="flex-1 min-h-screen bg-gray-50">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-inter font-semibold text-gray-900">Create New Provider</h2>
                    <p class="mt-1 text-sm text-gray-600">Add a new provider to your system</p>
                </div>
                <a href="{{ route('providers.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 hover:text-gray-700">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Back to Providers
                </a>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <form action="{{ route('providers.store') }}" method="POST" class="p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Provider Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="api_url" class="block text-sm font-medium text-gray-700">API URL</label>
                        <input type="url" name="api_url" id="api_url"
                            class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required>
                        @error('api_url')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create Provider
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
