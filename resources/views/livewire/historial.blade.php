<div class="h-screen py-5 fondo">
    @include('header')
    <!--fecha-->
    <div class="container mx-auto mt-5 mb-5">
        <div class="text-center uppercase font-bold text-gray-600 px-4 py-2 bg-white w-4/5 mx-auto rounded-lg shadow-xl">Resultados Fecha
            {{$this->dato->fechas_id}}
        </div>
    </div>

    <div class="container mx-auto mt-5 mb-4">

            <div class="text-center text-gray-600 px-4 py-2  ml-2 mr-2 mx-auto  space-y-6">
                @foreach ( $historicos as $historico )
                <div class="bg-white  ml-2 mr-2 mx-auto rounded-lg py-4 mb-2">

                    <div class="mb-2 text-md uppercase text-gray-600 font-bold">
                        {{ $historico->serie->nombre}} {{ $historico->tipos->tipo}}
                    </div>
                        <div class="container mx-auto mb-2 ">
                                <div class="flex justify-around mt-2 ">
                                    <div class="py-1"><img src="{{Storage::url( $historico->log->logo)}}" class="h-10"></div>
                                        <div class="py-2  text-gray-600 font-bold text-xl">{{ $historico->resultado_local}}</div>
                                        <div class="py-2  text-gray-600 font-bold text-xl">-</div>
                                        <div class="py-2  text-gray-600 font-bold text-xl">{{ $historico->resultado_visita}}</div>
                                        <div><img src="{{ Storage::url($historico->logo->logo)}}" class="h-10"></div>
                                    </div>


                                <div class="flex justify-around mt-2">
                                    <div class="text-gray-900 text-left text-xs col-span-4">{{$historico->eq->nombre}}</div>
                                    <div class="text-gray-900 text-center text-xs">{{$historico->club->nombre}}</div>
                                </div>


                        </div>

                    <div class="text-sm text-center text-md rounded-lg bg-gray-800 ml-4 mr-4 mt-5 text-white font-bold">{{ $historico->estado->status}}</div>
                </div>
                @endforeach
            </div>
    </div>


<br><br><br><br>

    @include('menu')
</div>

