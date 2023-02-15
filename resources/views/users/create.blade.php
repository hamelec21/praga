<x-app-layout>

    <div class="py-3 mt-3 ">

        <div class=" max-w-4xl mx-auto sm:px-6 lg:px-8">

            {{-- inicio de Alerta validacion del rut --}}
            <div id="alerta"
                 class="flex items-center  text-white text-sm font-bold px-4 py-2 rounded-lt-md rounded-rt-md"
                 role="alert">
                <span id="mensaje"></span>
            </div>
            {{-- Titulo de Formulario--}}
            <div class="bg-gray-900 text-white rounded-xl shadow-lg text-center py-2 px-2 mb-4">
                Crear Nuevo Usuario
            </div>

            {{-- Fin de Alerta validacion del rut --}}
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg  mb-2">
                    <div class="container">
                        <div class=" grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-4 py-4 px-4 ">


                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Username
                                </label>
                                <input type="text" name="username" id="username" value="{{ old('username') }}"
                                       oninput="this.value = this.value.toUpperCase() "
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Username">
                                @if ($errors->has('username'))
                                    <span class="error text-red-600"
                                          for="input-username">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Nombres
                                </label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                       oninput="this.value = this.value.toUpperCase() "
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Ingrese Nombre">
                                @if ($errors->has('rut'))
                                    <span class="error text-red-600"
                                          for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Apellido Paterno
                                </label>
                                <input type="text" name="apaterno" id="apaterno"
                                       oninput="this.value = this.value.toUpperCase() "
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Ingrese Apellido Paterno">
                                @if ($errors->has('apaterno'))
                                    <span class="error text-red-600"
                                          for="input-apaterno">{{ $errors->first('apaterno') }}</span>
                                @endif
                            </div>
                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Apellido Materno
                                </label>
                                <input type="text" name="amaterno" id="amaterno"
                                       oninput="this.value = this.value.toUpperCase() "
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Ingrese Apellido Materno">

                                @if ($errors->has('amaterno'))
                                    <span class="error text-red-600"
                                          for="input-amaterno">{{ $errors->first('amaterno') }}</span>
                                @endif
                            </div>

                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Correo
                                </label>
                                <input type="email" name="email" id="email"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Ingrese Correo">
                                            @if ($errors->has('email'))
                                                <span class="error text-red-600"
                                                      for="input-email" >{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class=" text-center">
                                <label class="block text-gray-700 text-sm font-bold mb-1 text-left">
                                    Contraseña
                                </label>
                                <input type="password" name="password" id="password"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       placeholder="Ingrese Nombre">
                                                @if ($errors->has('password'))
                                                    <span class="error text-red-600"
                                                          for="input-password">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{--Inicio table--}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg  mb-2">

                    <div class=" font-bold text-center px-2 py-2 ">
                        <table class="table min-w-full leading-normal">
                            <tbody>
                            @foreach ($roles as $id => $role)

                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center" >
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="roles[]"  value="{{ $id }}">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>

                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                        {{ $role }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                    {{--Boton Formulario--}}
                    <div class="grid grid-cols-1 my-4 px-4 ">
                        <button type="submit"
                                class="  inline-block px-6 py-2 text-sm  leading-6 text-center text-white uppercase transition
                                bg-gray-900 rounded-xl shadow-lg ripple waves-light hover:shadow-lg focus:outline-none hover:bg-gray-700 font-bold mb-5">
                            Guardar
                        </button>
                    </div>
                </div>
        </div>

        </form>





</x-app-layout>
