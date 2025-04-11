@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-8">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Providers</h1>
                <p class="mt-1 text-sm text-gray-500">Manage your API providers</p>
            </div>
            <div class="w-96">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" name="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" placeholder="Search providers...">
                </div>
            </div>
        </div>
        <button type="button" onclick="openAddProviderDialog()" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Add Provider
        </button>
    </div>

    <!-- Providers Table -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            No #
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            API URL
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($providers as $provider)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $provider->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $provider->api_url }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-4 w-8 rounded-full bg-gray-200 flex items-center {{ $provider->status ? 'bg-blue-600' : 'bg-gray-200' }}">
                                    <div class="h-3 w-3 rounded-full bg-white transform transition-transform duration-200 ease-in-out {{ $provider->status ? 'translate-x-4' : 'translate-x-1' }}"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button type="button" onclick="openEditProviderDialog({{ $provider->id }})" class="text-blue-600 hover:text-blue-900">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button" onclick="deleteProvider({{ $provider->id }})" class="ml-3 text-red-600 hover:text-red-900">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            No providers found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($providers->hasPages())
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $providers->links() }}
        </div>
        @endif
    </div>
</div>

<!-- Add/Edit Provider Dialog -->
<div id="providerDialog" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex min-h-screen items-center justify-center p-4 text-center sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <form id="providerForm" method="POST">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900" id="modal-title">Add New Provider</h3>
                        <p class="mt-1 text-sm text-gray-500">Fill in the details to add a new provider to your system.</p>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Enter provider name">
                        </div>
                        <div>
                            <label for="api_url" class="block text-sm font-medium text-gray-700">API URL</label>
                            <input type="url" name="api_url" id="api_url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Enter API URL">
                        </div>
                        <div class="flex items-center">
                            <button type="button" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-gray-200" role="switch" aria-checked="false" id="status">
                                <span class="sr-only">Provider status</span>
                                <span aria-hidden="true" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0"></span>
                            </button>
                            <span class="ml-3" id="status-label">
                                <span class="text-sm font-medium text-gray-900">Status</span>
                                <span class="text-sm text-gray-500" id="status-text">(Inactive)</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                        Save
                    </button>
                    <button type="button" onclick="closeProviderDialog()" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function openAddProviderDialog() {
        document.getElementById('modal-title').textContent = 'Add New Provider';
        document.getElementById('providerForm').reset();
        document.getElementById('providerDialog').classList.remove('hidden');
    }

    function openEditProviderDialog(id) {
        document.getElementById('modal-title').textContent = 'Edit Provider';
        // Fetch provider data and populate form
        document.getElementById('providerDialog').classList.remove('hidden');
    }

    function closeProviderDialog() {
        document.getElementById('providerDialog').classList.add('hidden');
    }

    function deleteProvider(id) {
        if (confirm('Are you sure you want to delete this provider?')) {
            // Handle delete
        }
    }

    // Handle status toggle
    const statusToggle = document.getElementById('status');
    const statusText = document.getElementById('status-text');

    statusToggle.addEventListener('click', function() {
        const isActive = this.getAttribute('aria-checked') === 'true';
        this.setAttribute('aria-checked', !isActive);
        this.classList.toggle('bg-blue-600');
        this.classList.toggle('bg-gray-200');
        const toggle = this.querySelector('span:not(.sr-only)');
        toggle.classList.toggle('translate-x-5');
        toggle.classList.toggle('translate-x-0');
        statusText.textContent = isActive ? '(Inactive)' : '(Active)';
    });
</script>
@endpush
@endsection
