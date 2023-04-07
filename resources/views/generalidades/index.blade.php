<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full h-screen overflow-auto">
        <div class="flex items-center justify-center">
            <h1 class="dark:text-gray-100 py-6 text-2xl">Información general del negocio</h1>
        </div>
        
        <x-generalidades 
        :plan_de_negocio="$plan_de_negocio"
        seccion="Antecedentes"
        input_name="antecedentes">

        </x-generalidades>

        <x-generalidades 
        :plan_de_negocio="$plan_de_negocio"
        seccion="Descripcion general del producto y/o servicio"
        input_name="descripcion_producto">
        </x-generalidades>

        <x-generalidades 
        :plan_de_negocio="$plan_de_negocio"
        seccion="Aspectos innovadores"
        input_name="aspectos_innovadores">
        </x-generalidades>
        
    </div>

</x-app-layout>