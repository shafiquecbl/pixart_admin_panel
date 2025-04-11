@extends('layouts.app')

@section('content')
<div class="flex-1 min-h-screen bg-gray-50">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-inter font-semibold text-gray-900">Create New Ad</h2>
                    <p class="mt-1 text-sm text-gray-600">Add a new advertisement to your system</p>
                </div>
                <a href="{{ route('ads.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 hover:text-gray-700">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Back to Ads
                </a>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <form action="{{ route('ads.store') }}" method="POST" class="p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                            <input type="text" name="position" id="position"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                required>
                            @error('position')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select name="type" id="type"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                                required>
                                <option value="banner">Banner</option>
                                <option value="interstitial">Interstitial</option>
                                <option value="rewarded">Rewarded</option>
                            </select>
                            @error('type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="android_ad_id" class="block text-sm font-medium text-gray-700">Android Ad ID</label>
                            <input type="text" name="android_ad_id" id="android_ad_id"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            @error('android_ad_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label for="ios_ad_id" class="block text-sm font-medium text-gray-700">iOS Ad ID</label>
                            <input type="text" name="ios_ad_id" id="ios_ad_id"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            @error('ios_ad_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="android_status" class="block text-sm font-medium text-gray-700">Android Status</label>
                            <select name="android_status" id="android_status"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('android_status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="ios_status" class="block text-sm font-medium text-gray-700">iOS Status</label>
                            <select name="ios_status" id="ios_status"
                                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('ios_status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create Ad
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
