<x-app-layout>
    <div class="bg-gray-900 h-screen ">
        <br><br>
            <div  class="container  mx-auto  text-white bg-gradient-to-r from-sky-600 to-cyan-400 py-4 rounded-lg mb-10">
                <h3 class="text-center ">Panel de Control</h3>
            </div>

            <div class="container mx-auto mt-5  px-2">

                <div class=" grid grid-cols-2 sm :grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-2 lg:gap-4 ">
                    <a href="{{ route('resultados.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">
                                <i class=" fa-solid fa-trophy fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="flex items-center content-center px-2 text-md text-center text-white font-bold mt-10">
                                Registro de Resultado
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('fixture.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">
                                <i class="fa-regular fa-calendar-days fa-2xl text-white group-hover:text-cyan-600 mt-10 "></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Fixture
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('club.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">

                                <i class="fa-solid fa-shield fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Registro de Club
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('tipo-serie.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">
                                <i class="fa-solid fa-futbol fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Tipo de Serie
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('serie.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">

                                <i class="fa-solid fa-timeline fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                               Registro de Series
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('status.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">

                                <i class="fa-solid fa-check-double fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Registro de Status
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('fechas.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36">
                            <div class="text-center">
                                <i class="fa-solid fa-calendar-check fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Registro de Fechas
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('temporadas.show')}}">
                        <div class="bg-gradient-to-r from-sky-600 to-cyan-400 rounded-lg  w-36 h-36 mb-5">
                            <div class="text-center">

                                <i class="fa-solid fa-thumbtack fa-2xl text-white group-hover:text-cyan-600 mt-10"></i>
                            </div>
                            <div class="px-2 text-md text-center text-white font-bold mt-10">
                                Registro de Temporadas
                            </div>
                        </div>
                    </a>
                </div>
            </div>

    </div>


</x-app-layout>
