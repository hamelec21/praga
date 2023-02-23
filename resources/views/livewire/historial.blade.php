<div class="h-screen py-20 fondo">
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

                    <div class="mb-2 text-md uppercase text-gray-600 font-bold">{{ $historico->serie->nombre}} {{ $historico->tipos->tipo}}</div>
                    <div class="flex flex-rows justify-around ">
                        <div class="py-1"><img src="{{ Storage::url( $historico->log->logo)}}" class="h-10"></div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">{{ $historico->resultado_local}}</div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">-</div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">{{ $historico->resultado_visita}}</div>
                        <div><img src="{{ Storage::url($historico->logo->logo)}}" class="h-10"></div>

                    </div>
                    <div class="text-sm text-center text-md rounded-lg bg-gray-800 ml-4 mr-4 mt-5 text-white font-bold">{{ $historico->estado->status}}</div>
                </div>
                @endforeach
            </div>
    </div>




    @include('menu')
</div>

