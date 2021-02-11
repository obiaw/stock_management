<div>
    <div class="bg-white-200 lg:w-3/12 md:6/12 w-10/12 m-auto  mt-40 my-10 shadow-md border border-gray-200">
        <div class="py-8 px-8 rounded-xl">
            <h1 class="font-medium text-2xl mt-3 text-center">Sign into your account</h1>
            @if (session()->has('error'))
            <div class="bg-red-200 px-2 py-2 mt-4 rounded-md text-lg flex items-center">
         <svg
              viewBox="0 0 24 24"
              class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
              >
           <path
                 fill="currentColor"
                 d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"
                 ></path>
         </svg>
         <span class="text-red-800">  {{session('error')}} </span>
       </div>
            @endif
            <form action="#" class="mt-6" method="POST">
                <div class="my-5 text-sm">
                    <label for="email" class="block text-black">Email Address</label>
                    <input type="text" autofocus wire:model="email" id="email" name="email" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Email Address" />
                </div>
                <div class="my-5 text-sm">
                    <label for="password" class="block text-black">Password</label>
                    <input type="password" wire:model="password" id="password" name="password" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Password" />
                    <div class="flex justify-end mt-5 text-xs text-gray-600">
                       <a href="#">Forget Password?</a>
                    </div>
                </div>
                <button  type="submit" wire:click.prevent="login" class="block text-center text-white bg-gray-800 p-3 duration-300 rounded-sm hover:bg-black w-full">Login</button>
            </form>
            <p class="mt-12 text-xs text-center font-light text-gray-400"> Don't have an account? <a href="/signup" class="text-black font-medium"> Create One </a>  </p> 
        </div>
    </div>
</div>
