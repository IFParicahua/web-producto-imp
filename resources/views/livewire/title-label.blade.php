<div>
    <div class="grid grid-cols-12 gap-4 text-sm sm:text-base">
        <div class="col-span-3">
            <label>Fecha: </label>
            <label class="font-semibold">{{ $date_new }}</label>
        </div>
        <div class="col-span-3">
            <label>Turno: </label>
            <label class="font-semibold">{{ $turno }}</label>
        </div>
        <div class="col-span-6">
            <label>Responsable: </label>
            <label class="font-semibold uppercase">{{ Auth::user()->name }}</label>
        </div>
        <form wire:submit.prevent="savetitle" class=" col-span-12 grid grid-cols-10 gap-4">
            <div class="col-span-3">
                <label for="lote" class="block font-medium text-gray-700">Lote</label>
                <input type="text" name="lote" id="lote"  wire:model="lote" wire:keydown.enter="complete_date" autocomplete="given-name" class="text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                @error('lote') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-3">
                <label for="producto" class="block font-medium text-gray-700">Producto</label>
                <input type="text" name="producto" id="producto"  wire:model="producto" wire:keydown.enter="complete_date" autocomplete="given-name" class="text-sm mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md">
                @error('producto') <span class="error text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-3">
                <label for="diametro" class="block font-medium text-gray-700">Diámetro</label>
                <p class="text-lg mt-2 w-full">{{ $diametro }} (mm)</p>
            </div>
            <div  class="col-span-1 mt-7">
                <button type="submit" class="border border-green-500 w-18 bg-green-500 text-sm  text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline disabled:opacity-50" {{ $status }}>
                    Crear
                </button>
            </div>
        </form>
        {{-- <div  class="col-span-3 mt-7">
            <button class="border border-red-500 bg-red-500 text-sm  text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                Generar PDF
            </button>
        </div> --}}
    </div>
    <span class="error text-sm text-red-500">{{ $m_alert }}</span>
  </div>

