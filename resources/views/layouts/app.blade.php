<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Stock Management App')</title>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @livewireStyles
    @stack('styles')
</head>
<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
        <x-sidebar/>
        <div class="flex flex-col flex-1 overflow-hidden">
        <x-header/>
        @yield('content')
        
        

        <footer class="footer bg-white border-t-2 border-gray-200 text-center static pt-1 bottom-0">
            <div class="container mx-auto">
                <div class="mt-1 flex flex-col items-center">
                    <div class="text-center py-6">
                        <p class="text-sm font-bold mb-2">
                            © {{date('Y')}} by ObiaW
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    </div>
    
    </div>
    @livewireScripts
    
</body>
</html>
