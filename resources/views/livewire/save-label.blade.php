<div class="py-3 justify-center sm:py-5">
    <div class="relative sm:max-w-4xl sm:mx-auto">
      <div class="relative px-4 py-5 bg-white mx-3  shadow rounded-md sm:p-10">
        <div class="mx-auto pb-4">
            @livewire('title-label')
        </div>
        <hr>
        <div id="content-detail">
            @livewire('list-label')
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col mt-5 border">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                            PAQUETE
                          </th>
                          <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                            PESO (Kg)
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($datos as $dato)
                                <tr>
                                    <td class="px-3 py-2 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $dato->package }}</div>
                                    </td>
                                    <td class="px-3 py-2 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $dato->peso }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium w-2/12">
                                        @if ($delete)
                                            <button type="button" wire:click="deleteItem({{ $dato->id }})" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-red-500 hover:bg-red-500 text-red-500 hover:text-white font-normal py-2 px-4 rounded-md">
                                                Eliminar
                                            </button>
                                        @endif
                                        @if ($update)
                                            <button type="button" wire:click="editItem({{ $dato->id }})" class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white font-normal py-2 px-4 rounded-md">
                                                Editar
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td class="px-3 py-2 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">----</div>
                                </td>
                                <td class="px-3 py-2 whitespace-nowrap">
                                  <div class="text-sm text-gray-900">---</div>
                                </td>
                                <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium w-2/12">
                                  ----
                                </td>
                            </tr>
                            @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
<dialog id="modal-edit" class=" w-11/12 md:w-3/12 p-5  bg-white rounded-md ">

   <div class="flex flex-col w-full h-auto ">
        <!-- Header -->
        <div class="flex w-full h-auto justify-center items-center">
          <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold"> </div>
          <div onclick="document.getElementById('modal-edit').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </div>
          <!--Header End-->
        </div>
          <!-- Modal Content-->
          @livewire('modal-edit')
          <!-- End of Modal Content-->
    </div>
</dialog>

<script>
    window.addEventListener('openModal', event =>{
        document.getElementById('modal-edit').showModal()
    })
    window.addEventListener('closeModal', event =>{
        document.getElementById('modal-edit').close()
    })
</script>
