@props(['placeholder' => 'Search'])

<input type="text" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'text-sm md:text-base flex-grow border border-gray-300  rounded placeholder:text-gray-400 text-gray-700 focus:outline-none focus:border-primary transition duration-300 ease-in-out px-2 md:px-3 py-1 md:py-2 w-auto']) }}>
