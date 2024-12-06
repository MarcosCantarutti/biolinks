@props(['route', 'post' => null]);

<form action="{{$route}}"  method="{{$post ? 'post' : 'get'}}"
{{$attributes->class(['flex flex-col gap-4'])}}>
    {{-- token --}}
    @csrf
    {{$slot}}
<br>
</form>
