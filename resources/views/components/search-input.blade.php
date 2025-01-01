@props(['placeholder' => 'Search'])

<input type="text" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'text-sm flex-grow border border-gray-800 rounded placeholder:text-gray-400 text-gray-700 focus:outline-none focus:border-primary transition duration-300 ease-in-out px-2 py-1 w-auto']) }}>
