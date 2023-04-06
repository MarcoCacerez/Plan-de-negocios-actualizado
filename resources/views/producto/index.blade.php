<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <h1 class="dark:text-gray-100 py-6 text-2xl">Producto y/o servicio</h1>
        </div>

        <div class="mx-20"> 
            <a href="{{ route('plan_de_negocio.producto.create', [$plan_de_negocio]) }}" class="mb-4 inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Agregar producto
            </a>

            <div class="flex relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre del producto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio de costo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio de venta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaproductos as $producto)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $producto->nombre }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $producto->precio_de_costo }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $producto->precio_de_venta }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $producto->descripcion }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                                    <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800">Borrar</a>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="m-6">
                {{ $listaproductos->links() }}
            </div>
        </div>
    </div>

</x-app-layout>