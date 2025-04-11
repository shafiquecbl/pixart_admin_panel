@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-6">
    <div class="md:flex md:items-center md:justify-between mb-6">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-semibold text-gray-900 leading-7">AI Model Details</h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4 space-x-2">
            <a href="{{ route('ai-models.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Back to List
            </a>
            <a href="{{ route('ai-models.edit', $aiModel) }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-16 w-16 rounded-lg object-cover" src="{{ Storage::url($aiModel->image) }}" alt="{{ $aiModel->name }}">
                </div>
                <div class="ml-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $aiModel->name }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Model ID: {{ $aiModel->model_id }}</p>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Description</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->description }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">AI Model Type</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->ai_model_type }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">iOS Model Type</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->ios_model_type }}</dd>
                </div>

                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Prompt Engineering</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->prompt_engineering ?? 'Not specified' }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Provider</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->provider->name }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Ad Type</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->ad_type ?? 'Not specified' }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Delay</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->delay }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Added Date</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $aiModel->added_date->format('M d, Y') }}</dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Popular Model</dt>
                    <dd class="mt-1">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $aiModel->popularity ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $aiModel->popularity ? 'Yes' : 'No' }}
                        </span>
                    </dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Default Model</dt>
                    <dd class="mt-1">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $aiModel->is_default ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $aiModel->is_default ? 'Yes' : 'No' }}
                        </span>
                    </dd>
                </div>

                <div>
                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                    <dd class="mt-1">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $aiModel->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $aiModel->status ? 'Active' : 'Inactive' }}
                        </span>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection
