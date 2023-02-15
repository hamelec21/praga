<x-guest-layout>
    <!--logo-->
    <div class="container bg-white py-6 rounded-bl-full  rounded-br-full mx-auto">
        <div class="">
            <img src="{{asset('img/logo/logo.png')}}" class="mx-auto h-28 md:h-48 lg:h-44">
        </div>
    </div>

    <div class="container mx-auto text-center mt-10 px-10">
        <h1 class="text-2xl font-bold">Crear Cuenta </h1>
    </div>

    <div class="container mx-auto text-center mt-10 px-10">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-input id="name" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="Nombre" />
            </div>

            <div class="mt-4">
                <x-jet-input id="email" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="email" name="email" :value="old('email')" required  placeholder="Email"/>
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation" class="py-2 mt-1 rounded-lg w-full px-4 text-gray-800" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme Paswword" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya Estás Registrado?') }}
                </a>


            </div>

            <button class=" text-white text-lg  font-bold  w-full px-8 py-2 rounded-lg mt-4 bg-gray-900 hover:bg-gray-800 "> {{ __('Registrarse') }}
            </button>
        </form>
    </div>








</x-guest-layout>
