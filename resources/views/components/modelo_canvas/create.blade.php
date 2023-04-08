@props([
    'plan_de_negocio',
	'tipo'
])
<div :class="open ? '' : 'hidden'" class="w-full px-3 py-2 ">
	<form action="{{ route('plan_de_negocio.modelo_canvas.store',[$plan_de_negocio]) }}" method="post">
		@csrf
		<div class="flex h-fit w-full flex-nowrap items-center space-x-2">
			<input type="text" hidden name="cat_modelo" value="{{$tipo}}">
			<input :value="open && ''" name="descripcion" class="w-3/4 rounded border border-slate-500 px-3 py-2 font-mono text-base focus:outline-none dark:bg-slate-600 dark:text-slate-50 dark:focus:border-slate-300" type="text" />
			<div class="flex w-1/4 items-center justify-center space-x-5">
				<button>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 dark:fill-zinc-50">
						<path d="M7 19V13H17V19H19V7.82843L16.1716 5H5V19H7ZM4 3H17L21 7V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM9 15V19H15V15H9Z" />
					</svg>
				</button>
				<button @click="open = !open" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 dark:fill-zinc-50">
						<path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z" />
					</svg>
				</button>
			</div>
		</div>
	</form>
</div>