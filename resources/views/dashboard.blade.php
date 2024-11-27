<div>
   <h1>Dashboard</h1>
   @if ($message = session()->get('message'))

    <div>{{$message}}</div>

  @endif
  <a href="{{route('links.create')}}">  Criar um novo Link</a>
   <ul>
    @foreach ( $links as $link)
        <li>
            {{-- <a href="/links/{{$link->id}}/edit">  {{$link->name}}</a> --}}
            <a href="{{route('links.edit', $link)}}">  {{$link->name}}</a>
            <form action="{{route('links.destroy', $link)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                @csrf
                @method('DELETE')

                <button>DELETAR</button>
            </form>
        </li>
    @endforeach
   </ul>
</div>
