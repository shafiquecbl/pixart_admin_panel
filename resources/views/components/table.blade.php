@props(['headers' => []])

<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-white">
                <tr>
                    @foreach($headers as $header)
                    <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        {{ $header }}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
@if(isset($pagination))
<div class="mt-4 flex items-center justify-between">
    <div class="text-sm text-gray-500">
        Page {{ $pagination['current_page'] }} of {{ $pagination['total_pages'] }}
    </div>
    <div class="flex items-center space-x-2">
        @foreach(range(1, $pagination['total_pages']) as $page)
        <button type="button" @class([ 'px-3 py-1 text-sm rounded-lg' , 'bg-indigo-600 text-white'=> $page === $pagination['current_page'],
            'text-gray-500 hover:bg-gray-50' => $page !== $pagination['current_page']
            ])>
            {{ $page }}
        </button>
        @endforeach
    </div>
</div>
@endif