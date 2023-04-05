<x-app-layout class="flex flex-nowrap">
    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <h1 class="dark:text-gray-100 py-6 text-2xl">Foda de la empresa</h1>
        </div>
        <div class="mx-20 grid gap-x-10 gap-y-10 grid-cols-2 grid-rows-2 dark:text-gray-300">
            
            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 shadow-md dark:border-none">
                <div class="flex items-stretch justify-center py-2 bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <span class="">Fortalezas</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
            </div>
            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 shadow-md dark:border-none">
                <div class="flex items-stretch justify-center py-2 bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <span class="">Debilidades</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
            </div>

            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 shadow-md dark:border-none">
                <div x-data="{ open: false }"  class="w-full py-2 bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <div class="flex items-center">
                        <span class="mx-auto">Amenazas</span>
                        <button @click="open = !open" class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <div :class="open ? '' : 'hidden'" class="flex">
                        <form action="" method="post" class="mx-auto">
                            @csrf
                            <input type="hidden" name="tipo" value="Amenazas">
                            <label for="descripcion">
                                <input :value="open && ''" class="rounded text-base dark:text-gray-700" type="text" name="descripcion" id="descripcion">
                            </label>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>                                  
                            </button>
                            <button @click="open = !open" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>                                  
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
                
            </div>

            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 shadow-md dark:border-none">
                <div class="flex items-stretch justify-center py-2 bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <span class="">Oportunidades</span>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </button>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    <div class="pl-2 py-2">lorem</div>
                    <div class="pl-2 py-2">lorem</div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>