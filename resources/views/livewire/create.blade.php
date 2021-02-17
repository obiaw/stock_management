<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-500">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
    
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="">
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-3">Category Name:</label>
                    <input type="text" class="appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    id="name" placeholder="Enter Name" 
                    name="name"
                    wire:model="category.name">
                    @error('category.name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
          </div>
        </div>
          <span class="flex w-full rounded-md shadow-sm mr-3 sm:ml-3 sm:w-auto">
            <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-3 py-3 bg-green-600 text-base leading-5 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green  transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Save
            </button>
          </span>
          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto mr-3 mt-5">
            <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-white px-3 py-3 mb-5 bg-red-900 text-base leading-5 font-medium text-white shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Cancel
            </button>
          </span>
        </form>
        </div>
          
      </div>
    </div>