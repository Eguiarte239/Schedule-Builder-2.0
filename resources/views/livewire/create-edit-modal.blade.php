<div>
    <button class="bg-cyan-900 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded"
        wire:click="$toggle('showModal')">
        @if ($action == 'create')
            Create {{ $model }}
        @else
            Edit {{ $model }}
        @endif
    </button>

    <x-dialog-modal wire:model="showModal" @click.away="">
        <div class="modal-content">
            <x-slot name="title">
                @if ($action == 'create')
                    Create {{ $model }}
                @else
                    Edit {{ $model }}
                @endif
            </x-slot>

            <x-slot name="content">
                <form class="max-w-md mx-auto">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="title" id="title"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            required placeholder=" " wire:model.defer="title" />
                        <label for="title"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Título
                        </label>
                        <x-input-error for="title" />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="description" id="description"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required wire:model.defer="description"></textarea>
                        <label for="description"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Descripción
                        </label>
                        <x-input-error for="description" />
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6 mb-5">
                        <div class="max-w-sm">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date" wire:model="startDate" name="startDate" id="startDate" @change-date.camel="if ($event && $event.detail) @this.set('startDate', new Date($event.detail.date).toLocaleDateString('en-US'))">
                                <div class="h-0.5">
                                    <x-input-error for="startDate" />
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date" wire:model.defer="estimatedEndDate" name="estimatedEndDate" id="estimatedEndDate" @change-date.camel="if ($event && $event.detail) @this.set('estimatedEndDate', new Date($event.detail.date).toLocaleDateString('en-US'))">
                                <div class="h-0.5 mb-5">
                                    <x-input-error for="estimatedEndDate" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="priority"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona una
                                prioridad</label>
                            <select id="priority"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (App\Traits\Priority::getCases() as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="priority" />
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un
                                estatus</label>
                            <select id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (App\Traits\Status::getCases() as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                @if ($action == 'create')
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        wire:click="save">
                        Create {{ $model }}
                    </button>
                @else
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        wire:click="update">
                        Update {{ $model }}
                    </button>
                @endif
            </x-slot>
        </div>
    </x-dialog-modal>
</div>
