<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full h-screen overflow-auto">
        <div class="mx-20 flex items-center justify-center">
            <h1 class="dark:text-gray-100 my-6 text-2xl">Imagen corporativa</h1>
        </div>

        <form method="POST" enctype="multipart/form-data" action="{{ route('plan_de_negocio.imagen_corporativa.store', [$plan_de_negocio]) }}">
            @csrf
            <div class="md:w-full py-4">
                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="logotipo" class="dark:text-white">Logotipo</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="file" name="logotipo" id="logotipo" value="{{old('logotipo')}}" class="md:w-1/2">
                </div>
                
                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="justificacion_logo" class="dark:text-white">Jutificación del logotipo</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="text" name="justificacion_logo" id="justificacion_logo" value="{{old('justificacion_logo')}}" class="md:w-1/2">
                </div>
                
                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="nombre_corporativo" class="dark:text-white">Definición del nombre de la empresa</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="text" name="nombre_corporativo" id="nombre_corporativo" value="{{old('nombre_corporativo')}}" class="md:w-1/2">
                </div>

                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="justificacion_nombre" class="dark:text-white">Jutificación del nombre</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="text" name="justificacion_nombre" id="justificacion_nombre" value="{{old('justificacion_nombre')}}" class="md:w-1/2">
                </div>

                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="eslogan" class="dark:text-white">Eslogan</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="text" name="eslogan" id="eslogan" value="{{old('eslogan')}}" class="md:w-1/2">
                </div>

                <div class="flex flex-wrap justify-center items-center my-2 md:flex-nowrap md:space-x-2 md:mb-4">
                    <label class="text-white md:w-1/4" for="justificacion_eslogan" class="dark:text-white">Justificación eslogan</label>
                    <input class="rounded bg-gray-300 md:w-1/3" type="text" name="justificacion_eslogan" id="justificacion_eslogan" value="{{old('justificacion_eslogan')}}" class="md:w-1/2">
                </div>

                <div class="flex justify-center items-center">
                    <a href="{{ route('plan_de_negocio.imagen_corporativa.index', [$plan_de_negocio]) }}" class="rounded bg-red-500 m-6 px-4 py-2 hover:bg-red-700 dark:text-white">Cancelar</a>
                    {{-- <input  type="submit" value="Crear"> --}}
                    <button class="rounded bg-blue-500 m-6 px-4 py-2 hover:bg-blue-700 dark:text-white">Crear</button> 
                </div>
            </div>
        </form>
        
    </div>
</x-app-layout>