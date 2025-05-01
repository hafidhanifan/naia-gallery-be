@php
$isActive = trim($activePath, '/') === ''
? request()->path() === '/'
: request()->is(trim($activePath, '/'));
@endphp

<a href="{{ url($route) }}" class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group
       {{ $isActive ? 'bg-white shadow-lg shadow-gray-200 hover:!bg-white' : '' }}
       transition-all duration-200" sidebar-toggle-collapse>

    <div class="{{ $isActive ? 'bg-fuchsia-500 !text-white' : 'bg-white' }}
             shadow-lg shadow-gray-300 text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg
             text-center grid place-items-center">
        {!! $icon !!}
    </div>

    <span class="ml-3 text-dark-500 text-sm font-light" sidebar-toggle-item>{{ $label }}</span>
</a>