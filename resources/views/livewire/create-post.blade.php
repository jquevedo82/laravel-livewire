<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear un Nuevo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Post
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Titulo del Post"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="title"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Contenido del Post"/>
                <textarea rows="6" class="form-control w-full" wire:model.defer="content"></textarea>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">CANCELAR</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">CREAR POST</x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
