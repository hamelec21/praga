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
                Editar
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Tipo de Serie</label>
                        <input type="date" name="fecha" id="" wire:model="fixtures.fecha"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('tipo') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>


                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_1</label>
                        <select type="text" name="nombre_club_1" id="" wire:model="fixtures.club_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($clubes as $club)
                                <option value="{{$club->id}}">{{$club->nombre}}</option>
                            @endforeach
                        </select>

                        @error('nombre_club_1') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Juega de :</label>
                        <select type="date" name="fecha" id="" wire:model="fixtures.juega"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccionar</option>
                            <option value="local">Local</option>
                            <option value="visita">Visita</option>
                        </select>
                        @error('tipo') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_2</label>
                        <select type="text" name="" id=""  wire:model="fixtures.club_id_1"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($clubes as $club)
                                <option value="{{$club->id}}">{{$club->nombre}}</option>
                            @endforeach
                        </select>

                        @error('nombre_club_2') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Temporadas</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="fixtures.temporadas_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($temporadas as $temporada)
                                <option value="{{$temporada->id}}">{{$temporada->nombre}}</option>
                            @endforeach
                        </select>

                        @error('nombre_club_2') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Fechas del Torneo</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="fixtures.fechas_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($fechas as $fecha)
                                <option value="{{$fecha->id}}">{{$fecha->fecha}}</option>
                            @endforeach
                        </select>

                        @error('nombre_club_2') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Status</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="fixtures.status_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($status as $estado)
                                <option value="{{$estado->id}}">{{$estado->status}}</option>
                            @endforeach
                        </select>

                        @error('status_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
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

