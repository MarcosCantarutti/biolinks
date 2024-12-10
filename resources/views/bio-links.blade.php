<x-layout.app>

    <x-layout.app>

        <x-container>

            <div class="text-center space-y-4 w-2/3">
                <x-img src="/storage/{{$user->photo}}" alt="Profile Picture" />
                <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
                <div class="text-sm  opacity-80">{{$user->description}}</div>


                <ul class="space-y-2">
                    @foreach ( $user->links as $link)
                    <li class="flex items-center gap-2 justify-center">

                        <x-button href="{{$link->link}}" wide outline info target="_blank"> {{$link->name}}</x-button>



                    </li>
                    @endforeach
                </ul>
            </div>
        </x-container>
    </x-layout.app>
</x-layout.app>
