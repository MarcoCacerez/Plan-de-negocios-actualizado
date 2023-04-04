<x-app-layout class="flex flex-nowrap">

    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <h1 class="dark:text-gray-100 py-6 text-2xl">Información general del negocio</h1>
        </div>

        <div class="py-12 mx-20">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">

                        <label class="block uppercase tracking-wide dark:text-gray-200 text-x2s font-bold mb-2" for="grid-first-name">
                            Información general del negocio
                        </label>
                        <textarea name="descripcion" id="descripcion" class="rounded bg-gray-300 md:w-1/2 md:h-40"
                            >{{old('descripcion')}}
                        </textarea>              
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>