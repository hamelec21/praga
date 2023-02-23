<div class="mt-20 fixed bottom-0 w-full">
    <div class="flex  justify-around px-4 mx-auto bg-gray-800 py-3 text-center">
        <div class="text-white">
            <a href="/">
                <i class="fa-regular fa-futbol fa-2x"></i>
                <div class="text-xs">Home</div>
            </a>
        </div>

        <div class="text-white">
            <a href="/resultados">
                <i class="fa-solid fa-trophy fa-2x"></i>
                <div class=" text-xs">Resultados</div>
            </a>
        </div>

        <div class="text-white">
            <a href="/fixture">
                <i class="fa-solid fa-calendar-days fa-2x"></i>
                <div class=" text-xs">Fixture</div>
            </a>
        </div>
        <div class="text-white">
            <div class="text-white">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <div class="">
                        <button>
                            <i class="fas fa-sign-in-alt fa-2x text-red-600"></i>
                            <div class=" text-xs text-red-600">Salir</div>
                        </button>
                        <a href="{{ route('logout') }}"
                       @click.prevent="$root.submit();">
                        </a>
                    </div>
                </form>
            </div>
        </div>



    </div>


</div>

