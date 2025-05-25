<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500',
]) }}>
    {{ $slot }}
</button>
