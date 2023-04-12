<x-app-layout class="flex flex-nowrap">
    
    <x-sidebar :plan_de_negocio="$plan_de_negocio"></x-sidebar>
    @if ($edit)
        <h1>Hello world!!</h1>
    @else
        <x-cultura_organizacional />
    @endif
    
</x-app-layout>