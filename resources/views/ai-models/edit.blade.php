@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-6">
    <div class="md:flex md:items-center md:justify-between mb-6">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-semibold text-gray-900 leading-7">Edit AI Model</h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <a href="{{ route('ai-models.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <form action="{{ route('ai-models.update', $aiModel) }}" method="POST" enctype="multipart/form-data" class="space-y-6 p-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                <!-- Model ID -->
                <div>
                    <label for="model_id" class="block text-sm font-medium text-gray-700">Model ID <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <input type="text" name="model_id" id="model_id" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('model_id') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" value="{{ old('model_id', $aiModel->model_id) }}" required>
                    </div>
                    @error('model_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('name') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" value="{{ old('name', $aiModel->name) }}" required>
                    </div>
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="sm:col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <textarea name="description" id="description" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" required>{{ old('description', $aiModel->description) }}</textarea>
                    </div>
                    @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- AI Model Type -->
                <div>
                    <label for="ai_model_type" class="block text-sm font-medium text-gray-700">AI Model Type <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <select name="ai_model_type" id="ai_model_type" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('ai_model_type') border-red-300 text-red-900 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" required>
                            <option value="">Select Type</option>
                            <option value="Premium model" {{ old('ai_model_type', $aiModel->ai_model_type) == 'Premium model' ? 'selected' : '' }}>Premium model</option>
                            <option value="Standard model" {{ old('ai_model_type', $aiModel->ai_model_type) == 'Standard model' ? 'selected' : '' }}>Standard model</option>
                        </select>
                    </div>
                    @error('ai_model_type')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- iOS Model Type -->
                <div>
                    <label for="ios_model_type" class="block text-sm font-medium text-gray-700">iOS Model Type <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <select name="ios_model_type" id="ios_model_type" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('ios_model_type') border-red-300 text-red-900 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" required>
                            <option value="">Select Type</option>
                            <option value="Premium model" {{ old('ios_model_type', $aiModel->ios_model_type) == 'Premium model' ? 'selected' : '' }}>Premium model</option>
                            <option value="Standard model" {{ old('ios_model_type', $aiModel->ios_model_type) == 'Standard model' ? 'selected' : '' }}>Standard model</option>
                        </select>
                    </div>
                    @error('ios_model_type')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Prompt Engineering -->
                <div class="sm:col-span-2">
                    <label for="prompt_engineering" class="block text-sm font-medium text-gray-700">Prompt Engineering</label>
                    <div class="mt-1">
                        <textarea name="prompt_engineering" id="prompt_engineering" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ old('prompt_engineering', $aiModel->prompt_engineering) }}</textarea>
                    </div>
                    @error('prompt_engineering')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Provider -->
                <div>
                    <label for="provider_id" class="block text-sm font-medium text-gray-700">Provider <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <select name="provider_id" id="provider_id" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('provider_id') border-red-300 text-red-900 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" required>
                            <option value="">Select Provider</option>
                            @foreach($providers as $provider)
                            <option value="{{ $provider->id }}" {{ old('provider_id', $aiModel->provider_id) == $provider->id ? 'selected' : '' }}>{{ $provider->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('provider_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ad Type -->
                <div>
                    <label for="ad_type" class="block text-sm font-medium text-gray-700">Ad Type</label>
                    <div class="mt-1">
                        <select name="ad_type" id="ad_type" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option value="">Select Ad Type</option>
                            <option value="Interstitial" {{ old('ad_type', $aiModel->ad_type) == 'Interstitial' ? 'selected' : '' }}>Interstitial</option>
                            <option value="Banner" {{ old('ad_type', $aiModel->ad_type) == 'Banner' ? 'selected' : '' }}>Banner</option>
                            <option value="Reward" {{ old('ad_type', $aiModel->ad_type) == 'Reward' ? 'selected' : '' }}>Reward</option>
                        </select>
                    </div>
                    @error('ad_type')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Delay -->
                <div>
                    <label for="delay" class="block text-sm font-medium text-gray-700">Delay <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <input type="number" name="delay" id="delay" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('delay') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" value="{{ old('delay', $aiModel->delay) }}" required>
                    </div>
                    @error('delay')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div class="sm:col-span-2">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <div class="mt-1">
                        <input type="file" name="image" id="image" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('image') border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 @enderror" accept="image/*">
                    </div>
                    @if($aiModel->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($aiModel->image) }}" alt="{{ $aiModel->name }}" class="h-20 w-20 object-cover rounded-lg">
                    </div>
                    @endif
                    @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Popularity -->
                <div>
                    <div class="flex items-center">
                        <input type="checkbox" name="popularity" id="popularity" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" value="1" {{ old('popularity', $aiModel->popularity) ? 'checked' : '' }}>
                        <label for="popularity" class="ml-2 block text-sm text-gray-700">Popular Model</label>
                    </div>
                    @error('popularity')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Default -->
                <div>
                    <div class="flex items-center">
                        <input type="checkbox" name="is_default" id="is_default" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" value="1" {{ old('is_default', $aiModel->is_default) ? 'checked' : '' }}>
                        <label for="is_default" class="ml-2 block text-sm text-gray-700">Default Model</label>
                    </div>
                    @error('is_default')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div>
                    <div class="flex items-center">
                        <input type="checkbox" name="status" id="status" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" value="1" {{ old('status', $aiModel->status) ? 'checked' : '' }}>
                        <label for="status" class="ml-2 block text-sm text-gray-700">Active</label>
                    </div>
                    @error('status')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update AI Model
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
