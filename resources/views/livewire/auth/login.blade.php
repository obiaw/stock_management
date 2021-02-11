<div>
    <div class="bg-white-200 lg:w-3/12 md:6/12 w-10/12 m-auto  mt-40 my-10 shadow-md border border-gray-200">
        <div class="py-8 px-8 rounded-xl">
            <h1 class="font-medium text-2xl mt-3 text-center">Login</h1>
            @if (session()->has('message'))
            {{session('message')}}
            @endif

            @if (session()->has('error'))
            {{session('error')}}
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
            <p class="mt-12 text-xs text-center font-light text-gray-400"> Don't have an account? <a href="#" class="text-black font-medium"> Create One </a>  </p> 
        </div>
    </div>
</div>
