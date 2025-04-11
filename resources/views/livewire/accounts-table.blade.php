<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Account Overview</h1>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                Add Account
            </button>
        </div>
    </div>

    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    <a href="#" wire:click="sortBy('account_name')" class="group inline-flex">
                                        Account Name
                                        @if ($sortField === 'account_name')
                                        <span class="ml-2 flex-none rounded text-gray-400">
                                            @if ($sortDirection === 'asc')
                                            ↑
                                            @else
                                            ↓
                                            @endif
                                        </span>
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <a href="#" wire:click="sortBy('account_type')" class="group inline-flex">
                                        Account Type
                                        @if ($sortField === 'account_type')
                                        <span class="ml-2 flex-none rounded text-gray-400">
                                            @if ($sortDirection === 'asc')
                                            ↑
                                            @else
                                            ↓
                                            @endif
                                        </span>
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <a href="#" wire:click="sortBy('contact_person')" class="group inline-flex">
                                        Contact Person
                                        @if ($sortField === 'contact_person')
                                        <span class="ml-2 flex-none rounded text-gray-400">
                                            @if ($sortDirection === 'asc')
                                            ↑
                                            @else
                                            ↓
                                            @endif
                                        </span>
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <a href="#" wire:click="sortBy('email')" class="group inline-flex">
                                        Email
                                        @if ($sortField === 'email')
                                        <span class="ml-2 flex-none rounded text-gray-400">
                                            @if ($sortDirection === 'asc')
                                            ↑
                                            @else
                                            ↓
                                            @endif
                                        </span>
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    <a href="#" wire:click="sortBy('status')" class="group inline-flex">
                                        Status
                                        @if ($sortField === 'status')
                                        <span class="ml-2 flex-none rounded text-gray-400">
                                            @if ($sortDirection === 'asc')
                                            ↑
                                            @else
                                            ↓
                                            @endif
                                        </span>
                                        @endif
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($accounts as $account)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $account->account_name }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $account->account_type }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $account->contact_person }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $account->email }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">
                                    <span class="inline-flex rounded-full px-2 text-xs font-semibold leading-5
                                            @if($account->status === 'Active')
                                                text-green-800 bg-green-100
                                            @elseif($account->status === 'Inactive')
                                                text-red-800 bg-red-100
                                            @else
                                                text-yellow-800 bg-yellow-100
                                            @endif">
                                        {{ $account->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        {{ $accounts->links() }}
    </div>
</div>
