@props(['type'])

@php
	switch ($type) {
		case 'info':
			$class = 'text-blue-800 bg-blue-50';
			break;
		case 'danger':
			$class = 'text-red-800 bg-red-50';
			break;
		default:
			$class = 'text-neutral-800 bg-neutral-50';
			break;
	}
@endphp


<div class="p-4 mb-4 text-sm rounded-lg {{ $class }}" role="alert">
    <span class="font-medium">¡Alerta!</span> {{  $slot }}
</div>
