<x-guest-layout>

    <!--logo-->
    <div class="container bg-white py-6 rounded-bl-full  rounded-br-full mx-auto">
        <div class="">
            <img src="{{asset('img/logo/logo.png')}}" class="mx-auto h-28 md:h-48 lg:h-44">
        </div>
    </div>
    <div class="container mx-auto text-center mt-10 px-10">
        <div class="mb-4 text-lg text-white text-justify">
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
        </div>
    </div>

    <div class="container mx-auto text-center mt-10 px-10">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-input id="email" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="email" name="email" :value="old('email')" required autofocus  placeholder="Ingrese su Email"/>
            </div>

            <button class=" text-white text-lg  font-bold  w-full px-8 py-3 rounded-lg mt-10 bg-gray-900 hover:bg-gray-800 ">
                {{ __('Enviar ') }}
            </button>
        </form>
    </div>






</x-guest-layout>
