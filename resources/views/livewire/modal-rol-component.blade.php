<div class="mt-5 md:mt-0 md:col-span-2">
    {{--  Item Seleccionado: {{ $colada }}  --}}
    <form wire:submit.prevent="save_rol">
        <div class=" overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class=" col-start-2 col-span-4">
                        <label for="rol">Rol</label>
                        <input type="text" name="rol" id="rol" wire:model="rol" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @if($errors->has('rol'))
                        <span class="block text-red-400 font-normal">{{ $errors->first('rol') }}</span>
                        @endif
                    </div>
                    <div class=" col-start-2 col-span-4">
                        <p class=" mt-1 mb-3 font-bold">PERMISOS</p>
                        @if($errors->has('operation_list'))
                            <span class="block text-red-400 font-normal">{{ $errors->first('operation_list') }}</span>
                        @endif

                        @foreach($operaciones as $index => $operacion)

                              <div class="grid grid-cols-6 gap-6">
                                  <div class="col-span-3">
                                    <label class="mx-2 px-2 capitalize">{{$operacion->name}}</label>
                                  </div>
                                  <div class="col-span-3">
                                    <input wire:model="operation_list.{{ $index }}" value="{{ $operacion->id }}" type="checkbox" class="appearance-none checked:bg-blue-600 checked:border-transparent">
                                  </div>
                              </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="grid justify-items-end">
            <button type="submit" class=" border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                Guardar Rol
            </button>
        </div>
    </form>
</div>
<script>
    window.addEventListener('closeModal', event =>{
        document.getElementById('modal-create-rol').close()
    })
</script>
