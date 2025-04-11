@props(['status'])

@php
$classes = match(strtolower($status)) {
'active' => 'bg-green-50 text-green-600 border-green-200',
'inactive' => 'bg-red-50 text-red-600 border-red-200',
'on hold' => 'bg-indigo-50 text-indigo-600 border-indigo-200',
'completed' => 'bg-green-50 text-green-600 border-green-200',
'failed' => 'bg-red-50 text-red-600 border-red-200',
'voicemail' => 'bg-orange-50 text-orange-600 border-orange-200',
default => 'bg-gray-50 text-gray-600 border-gray-200'
};
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $classes }}">
    {{ $status }}
</span>