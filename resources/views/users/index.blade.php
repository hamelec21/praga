<x-app-layout>

    {{--header --}}
    <div class="px-4 py-2 mx-auto max-w-7x sm:px-6 lg:px-8 ">
        <div class="bg-gray-900 text-white rounded-xl shadow-lg text-center pt-4 pb-4">
            Listado de Usuarios
        </div>
        <br>
        {{-- tabla de Contenido --}}
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <!---->
            <div class="bg-white text-white rounded-xl shadow-lg text-center py-2 px-2 ">
                <div class="grid grid-cols-3 gap-4 px-2 py-2">
                    <div class="text-gray-500">
                        <div class="w-1/3 p-2 m-2 text-grey-700">
                            <div class="flex items-center">
                                <!--Filtro  Mostar-->
                                <span>Mostar</span>
                                <select wire:model="cant" class="mx-2 form-control rounded-xl">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <!--Filtro Sedes-->
                            </div>
                        </div>
                    </div>

                    <div class="text-gray-500 ">
                        <div class="w-full p-2 m-2 text-grey-700">
                            <input type="text" class="form-control rounded-xl w-96 " placeholder="Ingrese Busqueda..."
                            >
                        </div>

                    </div>
                    <div class="  text-gray-500 text-right">
                        <div class="w-1/2 p-2 m-2 text-grey-700  ">
                            <a href="{{ route('users.create') }}" >
                                <x-jet-button class="ml-8"><i class="fas fa-plus-square ml-2"></i>
                                    Crear Usuario
                                </x-jet-button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <!---->
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead class="text-primary">
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        ID
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Rut
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Nombre
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Apellidos
                    </th>

                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Correo
                    </th>

                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Sedes
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Roles
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-center text-xs font-semibold text-white uppercase tracking-wider">
                        Acciones
                    </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->id }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->rut }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->name }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->apaterno }}  {{ $user->amaterno }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->email }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                {{ $user->sedes_id }}</td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">

                                @forelse ($user->roles as $role)
                                    <span >{{ $role->name }}</span>
                                @empty
                                    <span class="badge badge-danger">No roles</span>
                                @endforelse
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">


                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="bg-yellow-500 px-4 py-4 rounded-lg"><i class="fas fa-edit text-white"></i></a>

                                <a href="{{ route('users.show', $user->id) }}"
                                   class="bg-green-700 px-4 py-4 rounded-lg"><i class="fas fa-eye text-white"></i></a>

                                <form
                                    action="{{ route('users.delete', $user->id) }}" method="POST"
                                    style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 px-4 py-4 rounded-lg" type="submit" rel="tooltip"><i
                                            class="fas fa-trash-alt text-white"></i></button>


                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class=" grid-rows-1 mr-auto bg">
                {{ $users->links() }}

            </div>
        </div>

    </div>

    </x-app-layout>
