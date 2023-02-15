<div>
    <!--df -->
    <div class="flex h-full hover:scale-110">
        <div class="flex items-center justify-center flex-1 h-full p-2 border border-gray-400 rounded-lg bg-blue-800">
            <div class="text-white" wire:click="$set('open_crear', true)">
                Crear Nuevo Club
            </div>
        </div>
    </div>
    <!-- df-->
    <x-jet-dialog-modal wire:model="open_crear" maxWidth="2xl">
        <x-slot name="title">
            <div
                class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                Registar Club
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre club</label>
                        <input type="text" name="nombre" id="" placeholder="Ejemplo(Carmelo)" wire:model="nombre"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('nombre') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Logo</label>
                        <input type="file" name="logo" id="" placeholder="Ejemplo(infantiles)" wire:model="logo"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('logo') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button class="ml-4 bg-blue-800" wire:click="save">
                Guardar
            </x-jet-button>
            <x-jet-secondary-button class="ml-4" wire:click="$set('open_crear',false)">
                Cancelar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>


</div>



