<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="Email confirmation" />
                <x-input type="password" name="password" placeholder="Password" />
            </x-form>

            <x-a :href="route('login')">Already have an account?</x-a>
            <x-slot:actions>
                <x-button type='submit' form="register-form">Register</x-button>
            </x-slot:actions>
        </x-card>

    </x-container>
</x-layout.app>