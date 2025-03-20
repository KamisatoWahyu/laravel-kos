<button {{ $attributes->merge(['class' => 'bg-green-600 px-2 py-2 text-white text-sm font-bold rounded shadow duration-300 cursor-pointer']) }}>
    {{ $slot }}
</button>
