<x-guest-layout>

    <!--logo-->
    <div class="container bg-white py-6 rounded-bl-full  rounded-br-full mx-auto">
        <div class="">
            <img src="{{asset('img/logo/logo.png')}}" class="mx-auto h-28 md:h-48 lg:h-44">
        </div>
    </div>

    <div class="text-center text-2xl mt-8 text-white ">Bienvenidos a Praga APP</div>
    <div class="container mx-auto text-center mt-6 px-10">

    </div>
    <div class="container mx-auto text-center mt-6 px-10">
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <!--formulario-->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input id="email" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
            </div>
            <div class="mt-4">
                <input id="password" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>
            </div>
            <div class="text-right text-xs mt-2 text-white">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        <div class="text-right text-xs mt-2 text-white">Recuperar Contraseña?</div>
                    </a>
                @endif
            </div>
            <button class=" text-white text-lg  font-bold  w-full px-8 py-2 rounded-lg mt-4 bg-gray-900 hover:bg-gray-800 ">
                {{ __('Login') }}
            </button>
        </form>
    </div>

    <div class="container mx-auto">
        <a href="{{ route('register') }}">
        <div class="text-center text-lg mt-6 text-white font-bold ">Crear Cuenta</div>
       </a>
        <h3 class="text-center text-white p-6">iniciar Session Con redes Sociales</h3>
        <div class="flex flex-row justify-center space-x-10">
            <div class="bg-white w-14 h-14 rounded-lg py-4 px-4">
                <a href="{{url('auth/google')}}">  <img src="{{asset("img/logo_redes/google.png")}}" class="w-8"></a>
            </div>
            <div class="bg-white w-14 h-14 rounded-lg py-4 px-4">
             <a href="{{url('auth/facebook')}}"><img src="{{asset("img/logo_redes/facebook.png")}}" class="w-14"></a>
            </div>

        </div>
        <h3 class="text-center text-white p-10">Desarrollado por JR</h3>

    </div>



















</x-guest-layout>
