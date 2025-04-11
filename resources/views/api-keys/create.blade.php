@extends('layouts.app')

@section('content')
<div class="flex-1 min-h-screen bg-gray-50">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-inter font-semibold text-gray-900">Create New API Key</h2>
                    <p class="mt-1 text-sm text-gray-600">Add a new API key to your system</p>
                </div>
                <a href="{{ route('api-keys.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 hover:text-gray-700">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Back to API Keys
                </a>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <form action="{{ route('api-keys.store') }}" method="POST" class="p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required>
                        @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="key" class="block text-sm font-medium text-gray-700">API Key</label>
                        <div class="mt-1 flex rounded-lg shadow-sm">
                            <input type="text" name="key" id="key"
                                class="flex-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-l-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                required>
                            <button type="button" onclick="generateApiKey()"
                                class="inline-flex items-center px-3 py-2 border border-l-0 border-gray-300 rounded-r-lg bg-gray-50 text-sm text-gray-500 hover:bg-gray-100">
                                Generate
                            </button>
                        </div>
                        @error('key')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status"
                            class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create API Key
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function generateApiKey() {
        const length = 32;
        const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            result += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById('key').value = result;
    }
</script>
@endpush

@endsection
