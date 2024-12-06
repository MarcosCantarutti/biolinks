<x-layout.app>
    <div>
    <h1>Register</h1>

    @if ($message = session()->get('message'))

        <div>{{$message}}</div>

    @endif

    <form action="{{route('register')}}" method="POST">
        {{-- token --}}
        @csrf
        <div>
            <input type="text" name="name" placeholder="Nome"
            value="{{ old('name') }}">


            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="email" name="email" placeholder="Email"
            value="{{ old('email') }}">


            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="email_confirmation" name="email_confirmation" placeholder="Email confirmação"
            value="{{ old('email_confirmation') }}">
        </div>
        <div>
            <input type="password" name="password" placeholder="Senha">

            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

<br>
        <button>Registrar</button>
    </form>
</div>
</x-layout.app>
