<x-layout.app>

    <x-layout.app>

        <x-container>
            <div class="absolute top-10 left-10 flex flex-col gap-4">
                <x-button outline :href="route('profile')">
                    Update Profile
                </x-button>
                <x-button outline :href="route('links.create')">
                    Create a new link
                </x-button>
                <x-button outline :href="route('logout')">
                    Logout
                </x-button>
            </div>
            <div class="text-center space-y-4 w-2/3">
                <x-img src="/storage/{{$user->photo}}" alt="Profile Picture" />
                <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
                <div class="text-sm  opacity-80">{{$user->description}}</div>


                <ul class="space-y-2">
                    @foreach ( $links as $link)
                    <li class="flex items-center gap-2 justify-center">

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

                        <x-button href="{{route('links.edit', $link)}}" wide outline info> {{$link->name}}</x-button>

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
