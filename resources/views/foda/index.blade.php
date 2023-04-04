<x-app-layout class="flex flex-nowrap">
    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <h1 class="text-gray-100 py-6 text-2xl">Foda de la empresa</h1>
        </div>
        <div class="mx-4 grid gap-2 grid-cols-2 grid-rows-2 dark:text-gray-100">
            
            <div class="border divide-y">
                <div class="flex items-stretch justify-center  py-2 dark:bg-gray-700 space-x-2">
                    <span class="">Fortalezas</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
            </div>
            <div class="border divide-y">
                <div class="flex items-stretch justify-center  py-2 dark:bg-gray-700 space-x-2">
                    <span class="">Debilidades</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
            </div>

            <div class="border divide-y">
                <div class="flex items-stretch justify-center  py-2 dark:bg-gray-700 space-x-2">
                    <span class="">Amenazas</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
                
            </div>

            <div class="border divide-y">
                <div class="flex items-stretch justify-center  py-2 dark:bg-gray-700 space-x-2">
                    <span class="">Oportunidades</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>