<div>
    <!--contenido-->
    <div class="h-min py-20">

        <!--fecha-->
        <div class="container mx-auto mt-5 mb-5">
            <div class="text-center uppercase font-bold text-gray-600 px-4 py-2 bg-white w-4/5 mx-auto rounded-lg shadow-xl">Proximo en Partido
            </div>
        </div>
        <div class="container mx-auto mt-5 mb-4">
            @foreach($resultados as $resultado)
            <div class="text-center text-gray-600 px-4 py-2  ml-2 mr-2 mx-auto  space-y-6">
                <div class="bg-white  ml-2 mr-2 mx-auto rounded-lg py-4 mb-2">
                    <div class="mb-2 text-md uppercase text-gray-600 font-bold">{{ $resultado->serie->nombre}} {{ $resultado->tipos->tipo}}</div>
                    <div class="flex flex-rows justify-around ">
                        <div class="py-1"><img src="{{ Storage::url( $resultado->log->logo)}}" class="h-10"></div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">{{ $resultado->resultado_local}}</div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">-</div>
                        <div class="py-2 text-md text-gray-600 font-bold text-xl">{{ $resultado->resultado_visita}}</div>
                        <div><img src="{{ Storage::url($resultado->logo->logo)}}" class="h-10"></div>
                    </div>
                    <div class="text-sm text-center text-md rounded-lg bg-gray-800 ml-4 mr-4 mt-5 text-white font-bold">{{ $resultado->estado->status}}</div>
                </div>
            </div>
            @endforeach

        </div>

    </div>


    <!--menu-->

</div>
