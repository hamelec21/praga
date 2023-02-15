<div>
    <!--df -->
    <div class="flex h-full hover:scale-110">
        <div class="flex items-center justify-center flex-1 h-full p-2 border border-gray-400 rounded-lg bg-blue-800">
            <div class="text-white" wire:click="$set('open_crear', true)">
                Registrar resultados
            </div>
        </div>
    </div>
    <!-- df-->
    <x-jet-dialog-modal wire:model="open_crear" maxWidth="2xl">
        <x-slot name="title">
            <div
                class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                Registrar resultados
            </div>
        </x-slot>
        <x-slot name="content">
            <div class=" rounded-lg">
                <form>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Tipo Serie</label>
                        <select type="text" name="tiposerie" id=""  wire:model="tiposerie"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($tiposeries as $tipo)
                                <option class="uppercase" value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                            @endforeach
                        </select>

                        @error('tiposerie') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Serie</label>
                        <select type="text" name="serie_id" id=""  wire:model="serie_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                           @if($series->count()==0)
                                <option class="uppercase" value="null">Seleccione tipo serie primero</option>
                           @endif
                            @foreach($series as $serie)
                                <option value="{{$serie->id}}">{{$serie->nombre}}</option>
                            @endforeach
                        </select>

                        @error('serie_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_1</label>
                        <select type="text" name="club_id_1" id=""  wire:model="club_id_1"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($clubes as $club)
                                <option class="uppercase" value="{{$club->id}}">{{$club->nombre}}</option>
                            @endforeach
                        </select>

                        @error('nombre_club_1') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Resultado</label>
                        <input type="number" name="resultado_local" id="" wire:model="resultado_local"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                        @error('resultado_local') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_2</label>
                        <select type="text" name="nombre_club_2" id=""  wire:model="club_id"
                                class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($clubes as $club)
                                <option class="uppercase" value="{{$club->id}}">{{$club->nombre}}</option>
                            @endforeach
                        </select>

                        @error('club_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Resultado</label>
                        <input type="number" name="resultado_visita" id="" wire:model="resultado_visita"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                        @error('resultado_visita') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Temporadas</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="temporadas_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($temporadas as $temporada)
                                <option  class="uppercase" value="{{$temporada->id}}">{{$temporada->nombre}}</option>
                            @endforeach
                        </select>

                        @error('temporadas_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Fechas del Torneo</label>
                        <select type="text" name="fechas_id" id=""  wire:model="fechas_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($fechas as $fecha)
                                <option value="{{$fecha->id}}">{{$fecha->fecha}}</option>
                            @endforeach
                        </select>

                        @error('fechas_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Status</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="status_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            <option value="null">Seleccione</option>
                            @foreach($status as $estado)
                                <option class="uppercase"  value="{{$estado->id}}">{{$estado->status}}</option>
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




