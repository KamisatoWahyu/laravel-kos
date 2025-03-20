@props(['level' => 'h1'])

@switch($level)
    @case('h1')
        <h1 {{ $attributes->merge(['class' =>'font-bold text-4xl']) }}>{{ $slot }}</h1>
    @break

    @case('h2')
        <h2 {{ $attributes->merge(['class'=>'font-bold text-xl']) }}>{{ $slot }}</h2>
    @break

    @case('h3')
        <h3 {{ $attributes->merge(['class'=>'font-bold text-lg']) }}>{{ $slot }}</h3>
    @break

    @default
        <h1 {{ $attributes->merge(['class'=>'font-bold text-2xl']) }}>{{ $slot }}</h1>
@endswitch
