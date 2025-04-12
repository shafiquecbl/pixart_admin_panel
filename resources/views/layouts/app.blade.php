<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-200">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="flex items-center h-16 px-4 border-b border-gray-200">
                    <a href="{{ route('dashboard') }}" class="text-xl font-semibold text-gray-800">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('ai-models.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('ai-models.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>AI Models</span>
                    </a>

                    <a href="{{ route('providers.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('providers.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>Providers</span>
                    </a>

                    <a href="{{ route('users.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('users.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span>Users</span>
                    </a>

                    <a href="{{ route('api-keys.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('api-keys.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                        <span>API Keys</span>
                    </a>

                    <a href="{{ route('ads.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('ads.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>
                        <span>Ads</span>
                    </a>

                    <a href="{{ route('pages.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('pages.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2"></path>
                        </svg>
                        <span>Pages</span>
                    </a>

                    <a href="{{ route('inspirations.index') }}" class="flex items-center px-4 py-3 text-gray-600 transition-colors rounded-lg hover:bg-gray-100 {{ request()->routeIs('inspirations.*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                        <span>Inspirations</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64">
            <!-- Header -->
            <header class="h-16 bg-white border-b border-gray-200">
                <div class="flex items-center justify-end h-full px-4">
                    <!-- User Dropdown -->
                    <div class="relative">
                        <button type="button" class="flex items-center space-x-3 text-gray-600 hover:text-gray-700 focus:outline-none">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full">
                                <span class="text-sm font-medium text-blue-600">{{ substr(auth()->user()->name ?? 'U', 0, 1) }}</span>
                            </div>
                            <span class="text-sm font-medium">{{ auth()->user()->name ?? 'User' }}</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('modals')
    @stack('scripts')
</body>

</html>