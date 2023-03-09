<div>

    <!-- elimnar el  ml-[-100%] -->
    <aside class="   fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-gray-900 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
        <div>
            <div class="-mx-6 px-6 py-4  flex justify-center">
                <a href="#" title="home">
                    <img src="{{asset('img/logo/logo.png')}}" class="w-20" alt="tailus logo">
                </a>
            </div>
            <ul class="space-y-2 tracking-wide mt-8">
                <li>
                    <a href="/" aria-label="dashboard" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                        <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                            <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                        </svg>
                        <span class="-mr-1 font-medium">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('resultados.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">

                        <i class=" fa-solid fa-trophy text-gray-600 group-hover:text-cyan-600 "></i>

                        <span class="group-hover:text-gray-500 ">Registar Resultados</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('fixture.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-regular fa-calendar-days text-gray-600 group-hover:text-cyan-600 "></i>
                        <span class="group-hover:text-gray-500">Fixture</span>
                    </a>
                </li>



                <li>
                    <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-comment text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="group-hover:text-gray-500">Crear Notificaciones</span>
                    </a>
                </li>

                <!--configuraciones-->
                <li>
                    <div  aria-label="Configuraciones" class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                        <i class="fa-solid fa-screwdriver-wrench text-gray-100 "></i>
                        <span class="-mr-1 font-medium">Configuraciones</span>
                    </div>
                </li>

                <li>
                    <a href="{{ route('club.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-shield text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="group-hover:text-gray-500">Clubes</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('tipo-serie.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">

                        <i class="fa-solid fa-futbol text-gray-600 group-hover:text-cyan-600"></i>

                        <span class="group-hover:text-gray-500">Tipo Series</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('serie.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-timeline text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="group-hover:text-gray-500">Series</span>

                    </a>
                </li>

                <li>
                    <a href="{{ route('status.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-check-double text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="group-hover:text-gray-500">Status</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('fechas.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-calendar-check text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="group-hover:text-gray-500">Fechas</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('temporadas.show')}}" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-400 group">
                        <i class="fa-solid fa-thumbtack  text-gray-600 group-hover:text-cyan-600 "></i>
                        <span class="group-hover:text-gray-500">Temporadas</span>
                    </a>
                </li>


            </ul>
        </div>
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-red-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-red-500">Cerrar Session</span>
                </button>

                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">

                </x-jet-dropdown-link>

            </div>
        </form>
    </aside>
</div>

