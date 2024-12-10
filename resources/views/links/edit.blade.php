<x-layout.app>

    <x-layout.app>

        <x-container>
            <x-card title="Editing  Link :: {{ $link->id }}">
                <x-form :route="route('links.edit', $link)" put id="edit-form">
                    <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                    <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
                </x-form>

                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-slot:actions>
                    <x-button type='submit' form="edit-form">Update link</x-button>
                </x-slot:actions>
            </x-card>

        </x-container>
    </x-layout.app>
</x-layout.app>