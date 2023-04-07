@props([
    'plan_de_negocio' => '',
    'foda' => '',
])

<div class="flex">
    <form class="flex items-center" action="{{ route('plan_de_negocio.foda.destroy', [$plan_de_negocio,$foda]) }}" method="POST">
        @csrf
        @method('delete')
        <button :class="!open ? '' : 'hidden'" onclick="return confirm('¿Seguro que quieres borrar este registro?');">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 24" fill="currentColor" class="w-5 h-5">
                <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM9 11V17H11V11H9ZM13 11V17H15V11H13ZM9 4V6H15V4H9Z" />
            </svg>
        </button>
    </form>
</div>

