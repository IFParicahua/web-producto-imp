
    <div class="sm:max-w-5xl sm:mx-auto">
        <div class="flex flex-col mt-5 border">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="py-4 px-5 bg-gray-50">
                    <div class="grid grid-cols-6 gap-4 px-3">
                        <div class="col-start-2 col-span-4">
                            <input type="text" class="text-sm mt-1 block w-full shadow-sm border-gray-300 rounded-md" wire:model="search" placeholder="Buscar...">
                        </div>
                        <br>
                        <div class="col-span-1 pt-2">
                            <label class="font-semibold">{{ $date }}</label>
                        </div>
                        <div class="col-span-1 pt-2">
                            <label class="font-semibold">{{ $turno }}</label>
                        </div>
                        <div class="col-span-2 pt-2">
                            <label class="font-semibold">{{ $mat }}</label>
                        </div>
                        <div class="col-span-2 pt-2">
                            <label class="font-semibold">{{ $resp }}</label>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-5 bg-gray-50">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                              COLADA
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                              PAQUETE
                            </th>
                            <th scope="col" class="px-3 py-3 text-left text-sm font-medium uppercase tracking-wider">
                              PESO (Kg)
                            </th>
                            <th scope="col" class="px-3 py-5 text-left text-sm font-medium uppercase tracking-wider">
                                @if ($create)
                                    <a href="{{ route('save') }}" class="border border-green-500 bg-green-500 text-sm w-28 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                                        Nuevo Lote
                                    </a>
                                @endif
                            </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($packages as $package)
                              <tr>
                                  <td class="px-3 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $package->print_label->lote }}</div>
                                  </td>
                                  <td class="px-3 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $package->package }}</div>
                                  </td>
                                  <td class="px-3 py-2 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $package->peso }}</div>
                                  </td>
                                  <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium w-2/12">
                                      {{-- <button class="border border-green-500 bg-green-500 text-sm w-12 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ">
                                          <i class="fas fa-eye"></i>
                                      </button> --}}
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
