
<div class="sm:max-w-5xl sm:mx-auto">
    <div class="flex flex-col mt-5 border">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="py-4 px-5 bg-gray-50">
                <div class="grid grid-cols-7 gap-4 px-3">
                    <div class="col-start-3 col-span-3">
                        <input type="text" class="text-sm mt-1 block w-full shadow-sm border-gray-300 rounded-md" wire:model="search" placeholder="Buscar...">
                    </div>
                    <div class="col-span-1">
                        <button onclick="document.getElementById('modal-create-user').showModal()" class="border border-green-500 bg-green-500 text-sm w-30 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                            Crear usuario
                        </button>
                    </div>
                    <div class="col-span-1">
                        <button onclick="document.getElementById('modal-create-rol').showModal()" class="border border-green-500 bg-green-500 text-sm w-30 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                            Crear Rol
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-4 px-5 bg-gray-50">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                          Usuario
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                          Email
                        </th>
                        <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                          Permisos
                        </th>
                        <th scope="col" class="px-3 py-5 text-left text-sm font-medium uppercase tracking-wider"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($users as $user)
                          <tr>
                            <td class="px-3 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $user->name }}
                                </div>
                              </td>
                              <td class="px-3 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                              </td>
                              <td class="px-3 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    @for($i = 0; $i < $user->rol->rols->count(); $i++)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{ $user->rol->rols[$i]->operations->name }}
                                        </span>
                                    @endfor
                                </div>
                              </td>
                              <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium w-2/12">
                                  <button class="border border-green-500 bg-green-500 text-sm w-12 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                                    <i class="fas fa-pencil-alt"></i>
                                  </button>
                              </td>
                          </tr>
                        @empty
                          <tr>
                              <td class="px-3 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">----</div>
                              </td>
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
<dialog id="modal-create-rol" class=" w-11/12 md:w-3/12 p-5  bg-white rounded-md ">
    <div class="flex flex-col w-full h-auto ">
         <!-- Header -->
         <div class="flex w-full h-auto justify-center items-center">
           <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold"> </div>
           <div onclick="document.getElementById('modal-create-rol').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
            <i class="fas fa-times"></i>
           </div>
           <!--Header End-->
         </div>
           <!-- Modal Content-->
            <div>
                @livewire('modal-rol-component')
            </div>
           <!-- End of Modal Content-->
         </div>
 </dialog>
 <dialog id="modal-create-user" class=" w-11/12 md:w-3/12 p-5  bg-white rounded-md ">
    <div class="flex flex-col w-full h-auto ">
         <!-- Header -->
         <div class="flex w-full h-auto justify-center items-center">
           <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold"> </div>
           <div onclick="document.getElementById('modal-create-user').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
            <i class="fas fa-times"></i>
           </div>
           <!--Header End-->
         </div>
           <!-- Modal Content-->
            <div>
                @livewire('modal-user-component')
            </div>
           <!-- End of Modal Content-->
         </div>
 </dialog>
