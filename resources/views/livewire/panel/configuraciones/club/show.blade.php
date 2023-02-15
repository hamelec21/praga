<div>


    <div class="ml-auto">
        <div class="bg-gray-200">
            <!-- resumen-->
            <div class="mt-10">
                <div class="bg-gray-100 flex items-center justify-center  font-sans">
                    <div class="w-full lg:w-5/6">
                        <div>
                            <div>
                            </div>
                            <div class="bg-gray-100 flex items-center justify-center  font-sans overflow-hidden">
                                <div class="w-full lg:w-5/6">
                                    <div class="container flex justify-center mx-auto">
                                        <div class="mr-4">
                                            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-jet-responsive-nav-link>
                                        </div>
                                        @livewire('panel.configuraciones.club.crear')
                                    </div>
                                </div>
                            </div>
                            <!-- show registros  -->
                            <div class="overflow-x-auto">
                                <div
                                    class="bg-gray-100 flex items-center justify-center  font-sans overflow-auto">
                                    <div class="w-full lg:w-5/6">
                                        <div class="bg-white shadow-md rounded my-6">

                                            <table class=" w-full table-auto">
                                                <thead>
                                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                    <th class="py-3 px-6 text-left">id</th>
                                                    <th class="py-3 px-6 text-left">Logo</th>
                                                    <th class="py-3 px-6 text-left">Club</th>
                                                    <th class="py-3 px-6 text-left">Fecha Registro</th>
                                                    <th class="py-3 px-6 text-center">Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody class="text-gray-600 text-sm font-light">
                                                @foreach($equipos as $equipo)
                                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                                            <div class="flex items-center">
                                                            <span
                                                                class="font-medium uppercase">{{ $equipo->id}}</span>
                                                            </div>
                                                        </td>

                                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                                            <div class="flex items-center">
                                                            <span
                                                                class="font-medium uppercase"><img
                                                                    src="{{Storage::url($equipo->logo)}}"
                                                                    class="object-contain" width="64" height="64"
                                                                    alt=""></span>
                                                            </div>
                                                        </td>

                                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                                            <div class="flex items-center">
                                                            <span
                                                                class="font-medium uppercase">{{ $equipo->nombre}}</span>
                                                            </div>
                                                        </td>

                                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                                            <div class="flex items-center">
                                                        <span
                                                            class="font-medium uppercase">{{ date('d-m-Y', strtotime($equipo->created_at)) }}</span>
                                                            </div>
                                                        </td>

                                                        <td class="py-3 px-6 text-center">
                                                            <div class="flex item-center justify-center">

                                                                <div class="mr-2">
                                                                    @livewire('panel.configuraciones.club.editar',['club'=>$equipo],key($equipo->id))
                                                                </div>

                                                                <div
                                                                    class=" mr-2  transform hover:text-purple-500 hover:scale-110">
                                                                    <a onclick="confirm('Estas Seguro de Eliminar  a {{$equipo->nombre}}!')||event.stopImmediatePropagation()"
                                                                       wire:click="destroy({{$equipo->id}})  ">
                                                                        <button
                                                                            class="bg-red-600 text-white hover:bg-red-600 rounded-md px-4 py-2">
                                                                            Eliminar
                                                                        </button>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        {{--$tipos->links()--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


