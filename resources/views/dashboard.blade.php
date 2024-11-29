<div>
   <h1>Dashboard</h1>
   <h2>User {{auth()->user()->name}} :: {{ auth()->id() }}</h2>
   @if ($message = session()->get('message'))

    <div>{{$message}}</div>

  @endif
  <a href="{{route('links.create')}}">  Criar um novo Link</a>
   <ul>
    @foreach ( $links as $link)
        <li style="display: flex; gap: 10px;">

            {{-- unless == a menos que  --}}
            @unless ($loop->last)
                <form action="{{route('links.down', $link)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button>down</button>
                </form>
            @endunless

            @unless ($loop->first)
                <form action="{{route('links.up', $link)}}" method="post">
                    @csrf
                    @method('PATCH')

                    <button>up</button>
                </form>
            @endunless

            <a href="{{route('links.edit', $link)}}">  {{$link->name}}</a>

            @can('destroy', $link)
                <form action="{{route('links.destroy', $link)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar?');">
                    @csrf
                    @method('DELETE')

                    <button>DELETAR</button>
                </form>
            @endcan

        </li>
    @endforeach
   </ul>
</div>
