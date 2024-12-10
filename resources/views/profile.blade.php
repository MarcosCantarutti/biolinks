<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="profile-form" enctype="multipart/form-data">

                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{$user->photo}}" alt="Profile Picture">
                        </div>
                    </div>
                    <x-file-input name="photo"></x-file-input>
                </div>

                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />

                <x-textarea name="description" placeholder="Description" value="{{ old('name', $user->description) }}">

                </x-textarea>

                <x-input name="handler" prefix="biolinks.com.br/" placeholder="
                Handler" value="{{ old('handler', $user->handler) }}" />
            </x-form>

            <x-a :href="route('dashboard')">Cancel</x-a>
            <x-slot:actions>
                <x-button type='submit' form="profile-form">Update profile</x-button>
            </x-slot:actions>
        </x-card>

    </x-container>

</x-layout.app>