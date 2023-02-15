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
                        <label class="px-2">Tipo Serie</label>
                        <select type="text" name="tiposerie" id=""  wire:model="resultados.tiposerie"
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
                        <select type="text" name="serie_id" id=""  wire:model="resultados.serie_id"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                            @foreach($series as $serie)
                                <option value="{{$serie->id}}">{{$serie->nombre}}</option>
                            @endforeach
                        </select>

                        @error('serie_id') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_1</label>
                        <select type="text" name="nombre_club_1" id=""  wire:model="resultados.club_id_1"
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
                        <input type="number" name="resultado_local" id="" wire:model="resultados.resultado_local"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                        @error('resultado_local') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Nombre Club_2</label>
                        <select type="text" name="nombre_club_2" id=""  wire:model="resultados.club_id"
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
                        <input type="number" name="resultado_visita" id="" wire:model="resultados.resultado_visita"
                               class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

                        @error('resultado_visita') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                        <label class="px-2">Temporadas</label>
                        <select type="text" name="temporadas_id" id=""  wire:model="resultados.temporadas_id"
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
                        <select type="text" name="fechas_id" id=""  wire:model="resultados.fechas_id"
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
                        <select type="text" name="temporadas_id" id=""  wire:model="resultados.status_id"
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
            <x-jet-secondary-button class="ml-4" wire:click="$set('open_editar',false)">
                Cancelar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>


</div>


