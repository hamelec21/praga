<div>
    <!--contenido-->

    <div class="h-min py-20">

        <!--fecha-->
        <div class="container mx-auto mt-5 mb-5 w-3/5 py-3">
            <div
                class="font-bold text-center text-gray-800 px-4 py-2 bg-white  mx-auto rounded-lg shadow-xl uppercase">
                fixture 2023
            </div>
        </div>

        <!--Fixture-->
        <div class="container mx-auto">
            <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-6 gap-4 ml-4 mr-4">
                @foreach($fixtures as $fixture)
                <div class="flex flex-col bg-white  rounded-lg text-white py-4 ">
                    <div class="flex flex-row justify-around text-gray-800">
                        <div class=" text-sm text-center py-1 rounded-lg text-gray-700 font-bold">{{$fixture->temporada->nombre}} 2023</div>

                            @if ($fixture->status_id =='2')
                            <div class="bg-red-600 rounded-lg w-6 h-6 flex items-center">
                                <a href="{{route('historial',$fixture->fechas_id)}}"><i class="far fa-futbol fa-1x ml-1 mt-1 text-white"></i></a>
                            </div>
                            @endif
                    </div>
                    <div class="text-sm text-center py-1 text-gray-700 font-bold">Fecha {{$fixture->fechas_id}}</div>
                    <div class=" text-sm text-center py-1 rounded-lg bg-gray-900 ml-4 mr-4">
                            <?php
                            $date = \Carbon\Carbon::parse($fixture->fecha)->locale('es');
                            echo $date->translatedFormat( 'l j F' );
                            ?>
                    </div>
                    <div class="flex flex-row justify-evenly py-2 gap-x-4">
                        <div class="py-1 flex flex-row"><img src="{{ Storage::url($fixture->logo->logo)}}" class="h-10"></div>

                        <div class="py-3 text-md text-gray-900 font-bold">V/S</div>
                        <div class="py-1"><img src="{{ Storage::url($fixture->log->logo) }}" class="h-10"></div>
                    </div>

                    <div class="grid grid-cols-2  gap-5 mb-5">
                        <div class="text-gray-800 text-xs text-center justify-center">{{$fixture->club->nombre}}</div>
                        <div class="text-gray-800 text-xs text-center justify-center ">{{$fixture->eq->nombre}}</div>
                    </div>



                    <div class="text-sm text-center text-md rounded-lg bg-gray-900 ml-4 mr-4 ">{{$fixture->juega}}</div>
                    {{--poner un if segun el estado --}}
                    <div class="">
                        @if($fixture->estado->status === 'Programado')
                            <!--Programado-->
                            <div
                                class="text-sm text-center text-md rounded-lg bg-green-700 ml-4 mr-4 mt-5">
                                {{$fixture->estado->status}}
                            </div>
                        @elseif($fixture->estado->status === 'Suspendido')
                            <!--Suspendido-->
                            <div
                                class="text-sm text-center text-md rounded-lg bg-red-700 ml-4 mr-4 mt-5">
                                {{$fixture->estado->status}}
                            </div>

                        @elseif($fixture->estado->status === 'Jugado')
                            <!--Suspendido-->
                            <div
                                class="text-sm text-center text-md rounded-lg bg-sky-700 ml-4 mr-4 mt-5">
                                {{$fixture->estado->status}}
                            </div>

                        @elseif($fixture->estado->status === 'Finalizado')
                            <!--Suspendido-->
                            <div
                                class="text-sm text-center text-md rounded-lg bg-indigo-600 ml-4 mr-4 mt-5">
                                {{$fixture->estado->status}}
                            </div>


                        @endif

                    </div>




                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

