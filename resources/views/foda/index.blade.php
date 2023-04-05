<x-app-layout class="flex flex-nowrap">
    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <h1 class="dark:text-gray-100 py-6 text-2xl">Foda de la empresa</h1>
        </div>
        <div class="mx-20 grid gap-x-10 gap-y-10 grid-cols-2 grid-rows-2 dark:text-gray-300">
            
            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 dark:border-none">
                <div class="flex items-stretch justify-center bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <x-foda.insert tipo="Fortalezas"></x-foda.insert>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    @if(count($foda_data['fortalezas'])>0)                        
                        @foreach($foda_data['fortalezas'] as $fortaleza)
                        <div class="mx-auto py-2">{{ $fortaleza->descripcion }}</div>
                        @endforeach
                    @else
                        <div class="mx-auto pl-2 py-5"></div>
                    @endif
                </div>
            </div>

            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 dark:border-none">
                <div class="flex items-stretch justify-center bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <x-foda.insert tipo="Debilidades"></x-foda.insert>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    @if(count($foda_data['debilidades']) > 0)
                        @foreach($foda_data['debilidades'] as $debilidad)
                            <div class="mx-auto py-2">{{ $debilidad->descripcion }}</div>
                        @endforeach
                    @else
                        <div class="mx-auto pl-2 py-5"></div>
                    @endif
                </div>
            </div>

            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 dark:border-none">
                <div class="flex items-stretch justify-center bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <x-foda.insert tipo="Amenazas"></x-foda.insert>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    @if(count($foda_data['amenazas'])>0)
                        @foreach($foda_data['amenazas'] as $amenaza)
                            <div class="mx-auto py-2">{{ $amenaza->descripcion }}</div>
                        @endforeach
                    @else
                        <div class="mx-auto pl-2 py-5"></div>
                    @endif
                </div>
                
            </div>

            <div class="border divide-y divide-gray-500 rounded-md border-neutral-200 dark:border-none">
                <div class="flex items-stretch justify-center bg-gray-200 dark:bg-gray-700 space-x-2 rounded-t-md">
                    <x-foda.insert tipo="Oportunidades"></x-foda.insert>
                </div>
                <div class="flex flex-col divide-y divide-gray-500 dark:bg-gray-800 rounded-b-md">
                    @if(count($foda_data['oportunidades'])>0)
                        @foreach($foda_data['oportunidades'] as $oportunidad)
                            <div class="mx-auto py-2">{{ $oportunidad->descripcion }}</div>
                        @endforeach
                    @else
                        <div class="mx-auto pl-2 py-5"></div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>