<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full h-screen overflow-auto">
        <div class="mx-20 flex items-center justify-center">
            <h1 class="dark:text-gray-100 my-6 text-2xl">Imagen corporativa</h1>
        </div>

        <div class="mx-20 items-center justify-center">
            @if ($plan_de_negocio->imagenes_corporativas != null)
                <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="m-6 object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-lg" src="{{asset($plan_de_negocio->imagenes_corporativas->logotipo)}}" alt="">
                    
                    <div class="flex flex-col justify-between p-4 leading-normal m-3">
                        <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Datos de la imagen corporativa</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <strong class="text-white">Justificación del logo: </strong><br> {{ $plan_de_negocio->imagenes_corporativas->justificacion_logo }} </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <strong class="text-white">Nombre de la emrpresa: </strong><br> {{ $plan_de_negocio->imagenes_corporativas->nombre_corporativo }} </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <strong class="text-white">Justificación del nombre: </strong><br> {{ $plan_de_negocio->imagenes_corporativas->justificacion_nombre }} </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <strong class="text-white">Eslogan: </strong><br> {{ $plan_de_negocio->imagenes_corporativas->eslogan }} </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <strong class="text-white">Justificación eslogan: </strong><br> {{ $plan_de_negocio->imagenes_corporativas->justificacion_eslogan }} </p>   
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="#" class="my-6 mb-4 inline-flex items-center px-4 py-2 mr-3 text-lg font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-blue-800 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-blue-700 dark:hover:text-white">
                        Actualizar
                    </a>
                </div>

            @else
                <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800">
                    <div class="text-white dark:text-gray-400 dark:bg-gray-700 m-6 object-cover w-full rounded-lg md:h-auto md:w-48 md:rounded-none md:rounded-lg p-6" src="#" alt="">Sin logo</div>
                    
                    <div class="flex flex-col justify-between p-4 leading-normal m-3">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Datos de la imagen corporativa</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Aún no hay datos</p>                            
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('plan_de_negocio.imagen_corporativa.create', [$plan_de_negocio]) }}" class="my-6 mb-4 inline-flex items-center px-4 py-2 mr-3 text-lg font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-blue-800 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-blue-700 dark:hover:text-white">
                            Editar
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>