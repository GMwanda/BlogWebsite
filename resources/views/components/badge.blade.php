<button {{ $attributes->merge(['class' => ' bg-red-600 text-white rounded-xl px-3 py-1 text-base']) }}>
    {{ $slot }}
</button>
