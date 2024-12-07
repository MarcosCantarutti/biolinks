<x-layout.app>
<div>
    <h1>Profile</h1>

    @if ($message = session()->get('message'))

        <div>{{$message}}</div>

    @endif

    <form action="{{route('profile')}}"  method="POST" enctype="multipart/form-data">
        {{-- token --}}
        @csrf
        @method('PUT')

        <div>
            <img src="/storage/{{$user->photo}}" alt="Profile picture">
            <input type="file" name="photo" >
        </div>

        <div>
            <input type="text" name="name" placeholder="Nome"
            value="{{ old('name', $user->name ) }}">


            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <textarea type="text" name="description" placeholder="Descrição"
            >{{ old('description', $user->description) }}</textarea>


            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <span>biolinks.com.br/</span>
            <input type="text" name="handler" placeholder="@seulink"
            value="{{ old('handler', $user->handler) }}">


            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>

        <a href="{{route('dashboard')}}">Cancelar</a>
        <button>Atualizar</button>
    </form>
</div>
</x-layout.app>
