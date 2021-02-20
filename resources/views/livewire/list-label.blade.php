
    <form wire:submit.prevent="savelist">
        <div class="mx-auto pt-4">
            <div class="divide-y divide-gray-200">
                <div class="grid grid-cols-7 gap-3 text-base">
                    <div class="col-span-2">
                        <label for="colada" class="block font-medium text-gray-700">Colada</label>
                        <input type="text" name="colada" id="colada"  wire:model="colada" autocomplete="given-name" class="text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                        @error('idproducto') <span class="error text-sm text-red-500">Debe ingresar producto y diámetro primero</span> @enderror
                        @error('colada') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="paquete" class="block font-medium text-gray-700">Paquete</label>
                        <input type="text" name="paquete" id="paquete"  wire:model="paquete" autocomplete="given-name" class="text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                        @error('paquete') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-2">
                      <label for="peso" class="block font-medium text-gray-700">Peso</label>
                      <input type="text" name="peso" id="peso"  wire:model="peso"  autocomplete="given-name" class="text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                      @error('peso') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div  class="col-span-1 mt-7 ">
                      <button type="submit" class="border border-green-500 bg-green-500 text-sm w-24 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                          <i class="fas fa-plus"></i>
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


