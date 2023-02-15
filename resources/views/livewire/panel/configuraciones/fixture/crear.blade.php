<div>
    <!--df -->
    <div class="flex h-full hover:scale-110">
        <div class="flex items-center justify-center flex-1 h-full p-2 border border-gray-400 rounded-lg bg-blue-800">
            <div class="text-white" wire:click="$set('open_crear', true)">
                Crear Fixture
            </div>
        </div>
    </div>
    <!-- df-->
    <x-jet-dialog-modal wire:model="open_crear" maxWidth="2xl">
        <x-slot name="title">
            <div
                class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                Crear Fixture
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>
                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Tipo de Serie</label>
                        <input type="date" name="fecha" id="" wire:model="fecha"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        @error('tipo') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>


                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_1</label>
                        <select type="text" name="nombre_club_1" id=""  wire:model="club_id"
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
                        <select type="date" name="fecha" id="" wire:model="juega"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccionar</option>
                            <option value="local">Local</option>
                            <option value="visita">Visita</option>
                        </select>
                        @error('tipo') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_2</label>
                        <select type="text" name="nombre_club_2" id=""  wire:model="club_id_1"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($clubes as $club)
                                <option value="{{$club->id}}">{{$club->nombre}}</option>
                            @endforeach
                        </select>

                        @error('club_id_1') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Temporadas</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="temporadas_id"
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
                        <select type="text" name="temporadas_id" id=""  wire:model="fechas_id"
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
                        <select type="text" name="temporadas_id" id=""  wire:model="status_id"
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
            <x-jet-secondary-button class="ml-4" wire:click="$set('open_crear',false)">
                Cancelar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>


</div>



