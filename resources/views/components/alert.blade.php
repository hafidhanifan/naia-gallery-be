@props(['type' => 'success', 'message' => ''])

@php
$colors = [
'success' => ['bg' => 'bg-green-50', 'text' => 'text-green-800', 'border' => 'border-green-300', 'icon' =>
'text-green-400'],
'error' => ['bg' => 'bg-red-50', 'text' => 'text-red-800', 'border' => 'border-red-300', 'icon' => 'text-red-400'],
'info' => ['bg' => 'bg-blue-50', 'text' => 'text-blue-800', 'border' => 'border-blue-300', 'icon' => 'text-blue-400'],
'warning' => ['bg' => 'bg-yellow-50', 'text' => 'text-yellow-800', 'border' => 'border-yellow-300', 'icon' =>
'text-yellow-400'],
];
@endphp


<div class="flex items-center p-4 mb-4 text-sm {{ $colors[$type]['text'] }} border {{ $colors[$type]['border'] }} rounded-lg {{ $colors[$type]['bg'] }}"
    role="alert">
    <svg class="shrink-0 inline w-4 h-4 me-3 {{ $colors[$type]['icon'] }}" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">{{ $type }}!</span> {{ $message }}
    </div>
</div>