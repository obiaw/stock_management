<div class="h-screen">
    <div class="py-2 pr-10 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block w-full px-12 py-4 overflow-hidden align-middle bg-white rounded-tl-lg rounded-tr-lg">
                      <div class="flex justify-between">
                          <div class="inline-flex w-4/12 h-12 px-2 bg-transparent border rounded lg:px-6">
                              <div class="relative flex flex-wrap items-stretch w-full h-full mb-6">
                                  <div class="flex">
                                      <span class="flex items-center py-2 text-sm leading-normal whitespace-no-wrap bg-transparent border border-r-0 border-none rounded rounded-r-none lg:px-3 text-grey-dark">
                                          <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                              <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                      </span>
                                  </div>
                                  <input type="text" class="relative flex-auto flex-grow flex-shrink w-px px-3 font-thin leading-normal tracking-wide text-gray-500 border border-l-0 border-none rounded rounded-l-none focus:outline-none text-xxs"
                                  wire:model="search" name="search" id="search"
                                  placeholder="Search">
                              </div>
                          </div>

            <button wire:click="create()"
            class="p-0 w-12 h-12 bg-blue-500 hover:bg-blue-700 rounded-full active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none bottom-0 right-0">
      <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
        <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                C15.952,9,16,9.447,16,10z" />
      </svg>
    </button>
            @if($isOpen)
                @include('livewire.create')
            @endif
                </div>
                  </div>
  
                  @if (session()->has('message'))
                  <div id="alert" class="text-white px-6 py-4 border-0 rounded mr-5 mt-5 ml-5 relative mb-4 bg-green-700">
                      <span class="inline-block align-middle mr-8">
                          {{ session('message') }}
                      </span>
                      <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                          <span>×</span>
                      </button>
                  </div>
              @endif
              @if(count($categories) > 0)
              <div class="inline-block min-w-full px-8 pt-3 overflow-hidden align-middle bg-gray-100 rounded-bl-lg rounded-br-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">ID</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Name</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Created On</th>
                            <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                       @foreach ($categories as $cate)
                              <tr>
                                <td class="px-4 py-4 whitespace-no-wrap border-b">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5">#{{$cate->id}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-2 whitespace-no-wrap border-b">
                                    <div class="text-sm leading-5 text-blue-900">{{$cate->name}}</div>
                                </td>
                                <td class="px-4 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b">{{date('d-m-Y', strtotime($cate->created_at))}}</td>
                                <td class="px-1 py-2 text-sm leading-5 text-left whitespace-no-wrap border-b">
                                    <button wire:click="edit({{ $cate->id }})" class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none"><i class="fa fa-eye"></i></button>
                                    <button wire:click="delete({{ $cate->id }})" class="px-5 py-2 text-red-500 transition duration-300 border border-red-500 rounded hover:bg-red-700 hover:text-white focus:outline-none"><i class="fa fa-times"></i></button>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4 mb-4 sm:flex-1 sm:flex sm:items-center sm:justify-between work-sans">
                  <div>
                      <p class="text-sm leading-5 text-blue-700">
                          
                      </p>
                  </div>
                        @if ($categories->hasPages())
                        {{ $categories->links() }}
                    @endif
                </div>
                </div>
              @else
              <div class="inline-block text-center mb-5 min-w-full px-8 pt-3 overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg shadow shadow-dashboard">
                    <span class="text-red-800">You have not added any category yet</span>
              </div>
              @endif

  </div>
  </div>
  
  