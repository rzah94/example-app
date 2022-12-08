<x-layout>
    <x-slot:title>
        слот
    </x-slot>

    <p>Имя: {{$name}} </p>
    <p>Город: {{$city}}</p>
    <p>{{date('d.m.Y')}}</p>

    <p>
        {{$arr[0]}} {{$arr[1]}} {{$arr[2]}}
    </p>

    @if ($private)
        <p>
            {!! $bold !!}
        </p>
    @else 
        <p>
            Данные скрыты
        </p>

    @endif
</x-layout>