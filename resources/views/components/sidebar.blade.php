@props([
    'plan_de_negocio' => ''
])
<div class="
    w-50
    h-screen
    p-4
    dark:bg-gray-800
    dark:text-gray-100">

    <aside class="h-full space-y-2 text-base font-normal">
        <div class="flex flex-nowrap space-x-2">
            <a href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 010 1.06l-2.47 2.47H21a.75.75 0 010 1.5H4.81l2.47 2.47a.75.75 0 11-1.06 1.06l-3.75-3.75a.75.75 0 010-1.06l3.75-3.75a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg>          
            </a>
            <span>CIIE</span>
        </div>
        <ul>
            <li>
                <a href="{{ route('plan_de_negocio.generalidades.index',['plan_de_negocio'=>$plan_de_negocio]) }}" 
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="">Generalidades</span>
                </a>
            </li>
            <li>
                <a href="{{ route('plan_de_negocio.generalidades.index',['plan_de_negocio'=>$plan_de_negocio]) }}" 
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <span class="text-base font-normal">Información general de la empresa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('plan_de_negocio.foda.index',['plan_de_negocio'=>$plan_de_negocio]) }}" 
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                    <span class="text-base font-normal">Análisis foda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('plan_de_negocio.modelo_canvas.index',['plan_de_negocio'=>$plan_de_negocio]) }}" 
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                    <span class="text-base font-normal">Modelo canvas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('plan_de_negocio.producto.index',['plan_de_negocio'=>$plan_de_negocio]) }}" 
                    class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                    <span class="text-base font-normal">Producto y/o Servicio</span>
                </a>
            </li>
        </ul>
    </aside>
</div>