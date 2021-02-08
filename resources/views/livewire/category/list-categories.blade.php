  <div class="py-2 pr-10 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block w-full px-12 py-4 overflow-hidden align-middle bg-white rounded-tl-lg rounded-tr-lg shadow-lg">
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
                                <input type="text" class="relative flex-auto flex-grow flex-shrink w-px px-3 font-thin leading-normal tracking-wide text-gray-500 border border-l-0 border-none rounded rounded-l-none focus:outline-none text-xxs lg:text-xs lg:text-base" placeholder="Search">
                            </div>
                        </div>
            <button class="inline-block px-2 py-1 text-xs font-medium text-center text-blue-700 uppercase add-category-modal transition bg-transparent border-2 border-blue-300 rounded ripple hover:bg-blue-100 focus:outline-none waves-effect">
            Create New Category
          </button>
                    </div>
                </div>
                <div class="inline-block min-w-full px-8 pt-3 overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg shadow shadow-dashboard">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">ID</th>
                                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Name</th>
                                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Created By</th>
                                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Created At</th>
                                <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @for($i=1; $i<=10; $i++)
                            <tr>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#1</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">Damilare Anjorin</div>
                                    </td>
                                    <td class="px-4 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">damilareanjorin1@gmail.com</td>
                                    <td class="px-4 py-2 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">September 12</td>
                                    <td class="px-1 py-2 text-sm leading-5 text-left whitespace-no-wrap border-b border-gray-500">
                                        <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none"><i class="fa fa-eye"></i></button>
                                        <button class="px-5 py-2 text-red-500 transition duration-300 border border-red-500 rounded hover:bg-red-700 hover:text-white focus:outline-none"><i class="fa fa-times"></i></button>
                                    </td>
                            </tr>
                            
                            @endfor

                        </tbody>
                    </table>
                  <div class="mt-4 mb-4 sm:flex-1 sm:flex sm:items-center sm:justify-between work-sans">
            <div>
            <p class="text-sm leading-5 text-blue-700">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">10</span>
                of
                <span class="font-medium">100</span>
                results
            </p>
        </div>
        <div>
            <nav class="relative z-0 inline-flex shadow-sm">
                <div	>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-700 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                        1
                    </a>
                  <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                        2
                    </a>
                   <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out bg-white border border-gray-300 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 hover:bg-tertiary">
                        3
                    </a>
                </div>
                <div v-if="pagination.current_page < pagination.last_page">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500" aria-label="Next">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
</div>

 <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded shadow-lg w-1/3">
      <div class="border-b px-4 py-2 flex justify-between items-center">
        <h3 class="font-semibold text-lg">Create New Category</h3>
        <button class="text-red-800 close-modal">&cross;</button>
      </div>
            <div class="shadow-lg font-bolder bg-white rounded-lg p-4">
                <form class="pt-4 pb-2 my-2">
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" type="text" placeholder="Category Name eg. Schooling">
                    </div>
                    <div class="block md:flex items-center justify-between">
                        <div class="mt-4 md:mt-0">
                        <button class="uppercase px-8 py-2 border border-gray-600 text-gray-600 max-w-max shadow-sm hover:shadow-lg">Create Category</button>                        </div>
                    </div>
                </form>
            </div>
    </div>
  </div>

  <script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.add-category-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    showModal.addEventListener('click', function (){
      modal.classList.remove('hidden')
    });
    closeModal.forEach(close => {
      close.addEventListener('click', function (){
        modal.classList.add('hidden')
      });
    });
  </script>