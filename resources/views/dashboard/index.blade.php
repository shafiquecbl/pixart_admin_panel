@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        <p class="mt-1 text-sm text-gray-500">Overview of your system statistics</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Total AI Models -->
        <div class="bg-white overflow-hidden rounded-lg border border-gray-200 p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-blue-50">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Total AI Models</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">18</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Increased by</span>
                                12% from last month
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Active Providers -->
        <div class="bg-white overflow-hidden rounded-lg border border-gray-200 p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-green-50">
                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Active Providers</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">5</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Increased by</span>
                                2 new this month
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Feedback Rating -->
        <div class="bg-white overflow-hidden rounded-lg border border-gray-200 p-5">
                    <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-yellow-50">
                    <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Feedback Rating</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">4.8</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Increased by</span>
                                0.3 from last month
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Active Ads -->
        <div class="bg-white overflow-hidden rounded-lg border border-gray-200 p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 p-3 rounded-lg bg-red-50">
                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Active Ads</dt>
                                <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">8</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                <svg class="self-center flex-shrink-0 h-5 w-5 text-red-500 transform rotate-180" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Decreased by</span>
                                2 fewer than last month
                            </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Activity -->
        <div class="bg-white border border-gray-200 rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-medium text-gray-900">Recent Activity</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New AI Model Added</p>
                            <p class="text-sm text-gray-500">GPT-5 Turbo has been added to the list of available models</p>
                            <p class="mt-1 text-xs text-gray-400">2 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New Provider</p>
                            <p class="text-sm text-gray-500">Anthropic has been added as a new provider</p>
                            <p class="mt-1 text-xs text-gray-400">1 day ago</p>
                    </div>
                </div>
            </div>
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                <svg class="h-5 w-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New Feedback</p>
                            <p class="text-sm text-gray-500">5 new feedback entries were received</p>
                            <p class="mt-1 text-xs text-gray-400">2 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center">
                                <svg class="h-5 w-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Ad Campaign Updated</p>
                            <p class="text-sm text-gray-500">Summer campaign has been updated with new creatives</p>
                            <p class="mt-1 text-xs text-gray-400">1 week ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Top AI Models -->
        <div class="bg-white border border-gray-200 rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-medium text-gray-900">Top AI Models</h2>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center text-sm font-medium text-yellow-600">1</div>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">GPT-4 Turbo</p>
                                    <p class="text-xs text-gray-500">Text Generation</p>
                                </div>
                                <div class="text-sm font-medium text-gray-900">4.9</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-sm font-medium text-gray-600">2</div>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">DALL-E 3</p>
                                    <p class="text-xs text-gray-500">Image Generation</p>
                                </div>
                                <div class="text-sm font-medium text-gray-900">4.7</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4">
                                <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center text-sm font-medium text-orange-600">3</div>
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Claude 3</p>
                                    <p class="text-xs text-gray-500">Text & Code</p>
                                </div>
                                <div class="text-sm font-medium text-gray-900">4.6</div>
                            </div>
                        </div>
                    </div>
                                    </div>
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-sm font-medium text-gray-600">4</div>
                                    </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Midjourney V6</p>
                                    <p class="text-xs text-gray-500">Image Generation</p>
                                </div>
                                <div class="text-sm font-medium text-gray-900">4.5</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
