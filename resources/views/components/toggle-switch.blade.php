@props([
'id' => null,
'name' => '',
'checked' => false,
'value' => '',
'disabled' => false
])

<div class="flex items-center">
    <button type="button"
        role="switch"
        aria-checked="{{ $checked ? 'true' : 'false' }}"
        x-data="{ on: @js($checked) }"
        x-modelable="on"
        x-on:click="on = !on"
        @class([ 'relative inline-flex h-7 w-12 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2' , 'bg-blue-600'=> $checked,
        'bg-gray-200' => !$checked,
        'opacity-50 cursor-not-allowed' => $disabled
        ])
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes }}
        >
        <span
            aria-hidden="true"
            @class([ 'pointer-events-none inline-block h-6 w-6 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out' , 'translate-x-5'=> $checked,
            'translate-x-0' => !$checked
            ])
            ></span>
    </button>
    <input type="hidden" name="{{ $name }}" value="{{ $value }}" x-model="on">
</div>
