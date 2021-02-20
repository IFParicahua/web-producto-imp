<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <label for="colada_d" class="block text-sm font-medium text-gray-700">Colada</label>
                    <input type="text" name="colada_d" id="colada_d" wire:model="colada_d" value="{{ $colada_d }}"  autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <label for="paquete_d" class="block text-sm font-medium text-gray-700">Paquete</label>
                    <input type="text" name="paquete_d" id="paquete_d" wire:model="paquete_d" value="{{ $paquete_d }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @if($errors->has('paquete_d'))
                        <p>{{ $errors->first('paquete_d') }}</p>
                    @endif
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <label for="peso_d" class="block text-sm font-medium text-gray-700">Peso</label>
                    <input type="text" name="peso_d" id="peso_d" wire:model="peso_d" value="{{ $peso_d }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>
    </div>
    <button wire:click="saveedit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
        Guardar Cambios
    </button>
</div>
