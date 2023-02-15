<div>
    <!--boton -->
    <button class="bg-amber-500 text-white hover:bg-amber-600 rounded-md px-6 py-2 hover:scale-110"
            wire:click="$set('open_editar', true)">Editar
    </button>
    <!-- df-->
    <x-jet-dialog-modal wire:model="open_editar" maxWidth="2xl">
        <x-slot name="title">
            <div
                class="text-white bg-gradient-to-r from-amber-600 to-yellow-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                Editar Club
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre</label>
                        <input wire:model="club.nombre" type="text" name="nombre" id="" placeholder="Ejemplo(Carta Poder)"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('nombre') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Logo</label>
                        <input wire:model="logo" type="file" name="logo" id="" placeholder="Ejemplo(Carta Poder)"
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
            <x-jet-secondary-button class="ml-4" wire:click="$set('open_editar',false)">
                Cancelar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>


</div>

