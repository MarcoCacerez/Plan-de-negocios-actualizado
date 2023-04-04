@props([
    'plan_de_negocio' => ''
])
<div>
    <div class="
        hidden
        w-50
        min-h-screen
        p-4
        md:flex
        dark:bg-gray-800
        dark:text-gray-100"
        >
    
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
                    <a href="{{ route('plan_de_negocio.generalidades.index',[$plan_de_negocio]) }}" 
                        class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="">Generalidades</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plan_de_negocio.generalidades.index',[$plan_de_negocio]) }}" 
                        class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="text-base font-normal">Información general de la empresa</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plan_de_negocio.foda.index',[$plan_de_negocio]) }}" 
                        class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                        <span class="text-base font-normal">Análisis foda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plan_de_negocio.modelo_canvas.index',[$plan_de_negocio]) }}" 
                        class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                        <span class="text-base font-normal">Modelo canvas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plan_de_negocio.producto.index',[$plan_de_negocio]) }}" 
                        class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">                    
                        <span class="text-base font-normal">Producto y/o Servicio</span>
                    </a>
                </li>
            </ul>

            <!--DROPDOWN-->
            <div class="flex flex-col">
                <div
                    x-data="{
                        open: false,
                        toggle() {
                            if (this.open) { return this.close() }
                            this.$refs.button.focus()
                            this.open = true
                        },
                        close(focusAfter) {
                            if (! this.open) return
                            this.open = false
                            focusAfter && focusAfter.focus()
                        }
                    }"
                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']"
                    class="relative"
                    >
                    <!-- Button -->
                    <button
                        x-ref="button"
                        x-on:click="toggle()"
                        :aria-expanded="open"
                        :aria-controls="$id('dropdown-button')"
                        type="button"
                        class="flex items-center gap-2 p-2 rounded-md
                        hover:bg-gray-700"
                        >
                        Administración de recursos

                        <!-- Heroicon: chevron-down -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Panel -->
                    <div
                        x-ref="panel"
                        x-show="open"
                        x-transition.origin.top.left
                        x-on:click.outside="close($refs.button)"
                        :id="$id('dropdown-button')"
                        style="display: none;"
                        class="left-0 mt-2 rounded-md"
                        >
                        <a href="#" class="flex items-center gap-2 w-full rounded-md px-4 py-2.5 text-left text-sm hover:bg-gray-700 disabled:text-gray-500">
                            Cultura organizacional
                        </a>

                        <a href="#" class="flex items-center gap-2 w-full rounded-md px-4 py-2.5 text-left text-sm hover:bg-gray-700 disabled:text-gray-500">
                            Estructura legal
                        </a>
                    </div>
                </div>

                <!--Segundo dropdown-->
                <div
                    x-data="{
                        open: false,
                        toggle() {
                            if (this.open) { return this.close() }
                            this.$refs.button.focus()
                            this.open = true
                        },
                        close(focusAfter) {
                            if (! this.open) return
                            this.open = false
                            focusAfter && focusAfter.focus()
                        }
                    }"
                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']"
                    class="relative"
                    >
                    <!-- Button -->
                    <button
                        x-ref="button"
                        x-on:click="toggle()"
                        :aria-expanded="open"
                        :aria-controls="$id('dropdown-button')"
                        type="button"
                        class="flex items-center gap-2 p-2 rounded-md
                        hover:bg-gray-700"
                        >
                        Imagen corporativa y marketing

                        <!-- Heroicon: chevron-down -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Panel -->
                    <div
                        x-ref="panel"
                        x-show="open"
                        x-transition.origin.top.left
                        x-on:click.outside="close($refs.button)"
                        :id="$id('dropdown-button')"
                        style="display: none;"
                        class="left-0 mt-2 rounded-md"
                        >
                        <a href="#" class="flex items-center gap-2 w-full rounded-md px-4 py-2.5 text-left text-sm hover:bg-gray-700 disabled:text-gray-500">
                            Imagen de la empresa
                        </a>

                        <a href="#" class="flex items-center gap-2 w-full rounded-md px-4 py-2.5 text-left text-sm hover:bg-gray-700 disabled:text-gray-500">
                            Publicidad y promoción
                        </a>

                        <a href="#" class="flex items-center gap-2 w-full rounded-md px-4 py-2.5 text-left text-sm hover:bg-gray-700 disabled:text-gray-500">
                            Plan de mercadotecnia
                        </a>
                    </div>
                </div>
            </div>
            <!---->
        </aside>
    </div>
</div>
