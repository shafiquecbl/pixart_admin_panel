@props(['headers' => [], 'rows' => [], 'actions' => false])

<div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    @foreach($headers as $header)
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                        {{ $header }}
                    </th>
                    @endforeach
                    @if($actions)
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>

@if(isset($pagination))
<div class="mt-5 flex items-center justify-between">
    <div class="flex items-center gap-2 text-sm text-gray-700">
        <span>Showing</span>
        <span class="font-medium">{{ $pagination['from'] }}</span>
        <span>to</span>
        <span class="font-medium">{{ $pagination['to'] }}</span>
        <span>of</span>
        <span class="font-medium">{{ $pagination['total'] }}</span>
        <span>results</span>
    </div>

    <div class="flex items-center gap-2">
        @foreach($pagination['links'] as $link)
        <button type="button"
            @class([ 'px-3 py-1 text-sm rounded-lg' , 'bg-blue-600 text-white'=> $link['active'],
            'text-gray-500 hover:bg-gray-50' => !$link['active'],
            'opacity-50 cursor-not-allowed' => $link['disabled']
            ])
            {{ $link['disabled'] ? 'disabled' : '' }}
            wire:click="gotoPage({{ $link['page'] }})"
            >
            {{ $link['label'] }}
        </button>
        @endforeach
    </div>
</div>
@endif
