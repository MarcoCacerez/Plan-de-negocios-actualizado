<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full h-screen overflow-auto">
        <div class="mx-20 flex items-center justify-center">
            <h1 class="dark:text-gray-100 my-6 text-2xl">Publicidad, promocion y mercadotecnia</h1>
        </div>
        <div class="mx-20 flex items-center justify-center my-6">
            @if ($plan_de_negocio->publicidades == null)
                <form class="w-full" method="POST" enctype="multipart/form-data" action="{{ route('plan_de_negocio.publicidad.store', [$plan_de_negocio]) }}">
                    @csrf
                    <div class="dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="uppercase tracking-wide dark:text-white text-md font-bold mb-2" for="plan_promocion">
                                Plan de promoción
                                </label>
                                <textarea rows="3" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 mt-4" id="plan_promocion" name="plan_promocion" type="text" placeholder="Escriba el plan de promoción que tiene en mente" required></textarea>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="uppercase tracking-wide dark:text-white text-md font-bold mb-2" for="comercializacion">
                                Comercialización
                                </label>
                                <textarea rows="3" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 mt-4" id="comercializacion" name="comercializacion" type="text" placeholder="Escriba el método de comercialización" required></textarea>
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="uppercase tracking-wide dark:text-white text-md font-bold mb-2" for="plan_mercadotecnia">
                                Plan de mercadotecnia
                                </label>
                                <textarea rows="3" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 mt-4" id="plan_mercadotecnia" name="plan_mercadotecnia" type="text" placeholder="Escriba el plan de mercadotécnia a seguir" required></textarea>
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <div class="">
                                <button class="m-2 dark:bg-gray-600 text-white font-bold py-2 px-10 border-gray-500 dark:hover:bg-gray-700 rounded-xl">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            @else
            <div class="flex flex-col w-full grid justify-items-center space-y-8">
                <div class="w-[calc(100%-6rem)] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Plan de promoción</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $plan_de_negocio->publicidades->plan_promocion }}</p>
                </div>
                <div class="w-[calc(100%-6rem)] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Comercialización</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $plan_de_negocio->publicidades->comercializacion }}</p>
                </div>
                <div class="w-[calc(100%-6rem)] block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Plan de mercadotecnia</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $plan_de_negocio->publicidades->plan_mercadotecnia }}</p>
                </div>

                <a href="{{ route('plan_de_negocio.publicidad.edit', [$plan_de_negocio, $plan_de_negocio->publicidades]) }}" class="dark:bg-gray-700 dark:hover:bg-gray-800 text-white font-bold py-3 px-6 rounded">
                    Editar
                </a>
            </div>
            @endif

        </div>



    </div>

</x-app-layout>