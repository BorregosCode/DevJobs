@props(['value'])

<label {{ $attributes->merge(['class' => ' uppercase block font-bold text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
