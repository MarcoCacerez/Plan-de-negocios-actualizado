<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="mx-20 flow-root">
            <h1 class="float-left dark:text-gray-100 my-6 text-2xl">Producto y/o servicio</h1>
            <a href="{{ route('plan_de_negocio.producto.create', [$plan_de_negocio]) }}" class="float-right my-6 mb-4 inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Agregar producto
            </a>
        </div>

        <div class="mx-20"> 

            <div class="flex my-2 relative overflow-x-auto shadow-md sm:rounded-lg">
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
                                Acción
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
                                    <div class="inline-flex">
                                        <a href="{{ route('plan_de_negocio.producto.edit', [$plan_de_negocio, $producto]) }}" class="inline-flex items-center px-1.5 py-1.5 bg-blue-700 hover:bg-blue-800 text-white text-sm font-medium rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
                                        </a>

                                        <form method="post" action="{{ route('plan_de_negocio.producto.destroy', [$plan_de_negocio, $producto]) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('¿Seguro que quieres borrar este registro?');"
                                                class="inline-flex
                                                       items-center 
                                                       px-1.5
                                                       py-1.5
                                                       bg-red-700
                                                       hover:bg-red-800
                                                       text-white
                                                       text-sm
                                                       font-medium
                                                       rounded-md ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </button>
                                        </form>
                                    </div>
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