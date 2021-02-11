<div>
    <div>
        <div class="bg-white-200 lg:w-3/12 md:6/12 w-10/12 m-auto  mt-40 my-10 shadow-md border border-gray-200">
            <div class="py-8 px-8 rounded-xl">
                <h1 class="font-medium text-2xl mt-3 text-center">Register new account</h1>
                @if (session()->has('message'))
                {{session('message')}}
                @endif
    
                @if (session()->has('error'))
                {{session('error')}}
                @endif
                <form action="#" class="mt-6" method="POST">
                    <div class="my-5 text-sm">
                        <label for="email" class="block text-black">Name</label>
                        <input type="text" autofocus wire:model="name" id="name" name="name" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Full Name" />
                    </div>
                    <div class="my-5 text-sm">
                        <label for="email" class="block text-black">Email Address</label>
                        <input type="email" autofocus wire:model="email" id="email" name="email" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Email Address" />
                    </div>
                    <div class="my-5 text-sm">
                        <label for="password" class="block text-black">Password</label>
                        <input type="password" wire:model="password" id="password" name="password" class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full" placeholder="Password" />
                    </div>
                    <button  type="submit" wire:click.prevent="signup" class="block text-center text-white bg-gray-800 p-3 duration-300 rounded-sm hover:bg-black w-full">Signup</button>
                </form>
                <p class="mt-12 text-xs text-center font-light text-gray-400"> Already have an account? <a href="/login" class="text-black font-medium"> <b>Login</b> </a>  </p> 
            </div>
        </div>
    </div>
</div>
