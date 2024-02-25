<div>
    <button class="bg-cyan-900 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded" wire:click="$toggle('showModal')">
        Nuevo proyecto
    </button>
    
    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            Nuevo proyecto
        </x-slot>

        <x-slot name="content">
            dsadsa
        </x-slot>

        <x-slot name="footer">
            dsadsadas
        </x-slot>
    </x-dialog-modal>
</div>
