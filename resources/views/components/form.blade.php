@props(['route', 'post' => null, 'put' => null]);

@php
$method = $post || $put ? 'post' : 'get';
@endphp

<form action="{{$route}}" method="{{$method}}" {{$attributes->class(['flex flex-col gap-4'])}}>
    {{-- token --}}
    @csrf
    @if ($put)
    @method('put')
    @endif
    {{$slot}}
    <br>
</form>