<x-layout.app>

    <x-layout.app>

        <x-container>
            <div class="text-center space-y-4">
                <x-img src="/storage/{{$user->photo}}" alt="Profile Picture" />
                <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
                <div class="text-sm  opacity-80">{{$user->description}}</div>


                <ul class="space-y-2">
                    @foreach ( $links as $link)
                    <li class="flex items-center gap-2">

                        @unless ($loop->last)
                        <x-form :route="route('links.down', $link)" patch>
                            <x-button>
                                <x-icons.down class="w-6 h-6" />
                            </x-button>
                        </x-form>

                        @else
                        <x-button disabled>
                            <x-icons.down class="w-6 h-6" />
                        </x-button>
                        @endunless

                        @unless ($loop->first)
                        <x-form :route="route('links.up', $link)" patch>
                            <x-button>
                                <x-icons.up class="w-6 h-6" />
                            </x-button>
                        </x-form>
                        @else
                        <x-button disabled>
                            <x-icons.up class="w-6 h-6" />
                        </x-button>
                        @endunless

                        <x-button href="{{route('links.edit', $link)}}" block outline info> {{$link->name}}</x-button>

                        <x-form :route="route('links.destroy', $link)" delete
                            onsubmit="return confirm('Tem certeza que deseja deletar?')">
                            <x-button outline>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                        </x-form>

                    </li>
                    @endforeach
                </ul>
            </div>
        </x-container>
    </x-layout.app>
</x-layout.app>

<x-layout.app>
    <div>
        <h1>Dashboard</h1>
        <h2>User {{auth()->user()->name}} :: {{ auth()->id() }}</h2>
        <a href="{{route('profile')}}">Atualizar Profile</a>
        @if ($message = session()->get('message'))

        <div>{{$message}}</div>

        @endif
        <a href="{{route('links.create')}}"> Criar um novo Link</a>
        <ul>
            @foreach ( $links as $link)
            <li style="display: flex; gap: 10px;">

                {{-- unless == a menos que --}}
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

                <a href="{{route('links.edit', $link)}}"> {{$link->name}}</a>

                @can('destroy', $link)
                <form action="{{route('links.destroy', $link)}}" method="post"
                    onsubmit="return confirm('Tem certeza que deseja deletar?');">
                    @csrf
                    @method('DELETE')

                    <button>DELETAR</button>
                </form>
                @endcan

            </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>
