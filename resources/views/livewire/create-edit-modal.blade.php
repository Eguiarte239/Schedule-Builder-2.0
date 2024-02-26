<div>
    <button class="bg-cyan-900 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded" wire:click="$toggle('showModal')">
        @if ($action == 'create')
            Nuevo proyecto
        @else
            Editar proyecto
        @endif
    </button>

    <x-dialog-modal wire:model="showModal">
        <div class="modal-content">
            <x-slot name="title">
                Nuevo proyecto
            </x-slot>
    
            <x-slot name="content">
                <div>
                    <div class="mb-4">
                        <x-label for="name" value="Nombre" />
                        <x-input id="name" class="block mt-1 w-full" type="text" wire:model="name" />
                        <x-input-error for="name" />
                    </div>
    
                    <div class="mb-4">
                        <x-label for="description" value="Descripción" />
                        <x-input id="description" class="block mt-1 w-full" type="text" wire:model="description" />
                        <x-input-error for="description" />
                    </div>
    
                    <div class="mb-4">
                        <x-label for="start_date" value="Fecha de inicio" />
                        <x-input id="start_date" class="block mt-1 w-full" type="date" wire:model="start_date" />
                        <x-input-error for="start_date" />
                    </div>
    
                    <div class="mb-4">
                        <x-label for="end_date" value="Fecha de fin" />
                        <x-input id="end_date" class="block mt-1 w-full" type="date" wire:model="end_date" />
                        <x-input-error for="end_date" />
                    </div>
    
                    <div class="mb-4">
                        <x-label for="status" value="Estado" />
                        <select id="status" class="block mt-1 w-full" wire:model="status">
                            <option value="0">Pendiente</option>
                            <option value="1">En progreso</option>
                            <option value="2">Completado</option>
                        </select>
                        <x-input-error for="status" />
                    </div>
                </div>
            </x-slot>
    
            <x-slot name="footer">
            </x-slot>
        </div>
    </x-dialog-modal>
</div>
