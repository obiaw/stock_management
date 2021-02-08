        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <i class="text-white fa fa-igloo fa-2x"></i>
                    <span class="mx-2 text-2xl font-semibold text-white">Inventor</span>
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="/">
                    <span class="mx-3"> <i class="fa fa-bullseye"></i> Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="/category">
                    <span class="mx-3"><i class="fa fa-life-ring"></i> Categories</span>
                </a>
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="/tables">
                    <span class="mx-3"> <i class="fa fa-list-alt"></i> Departments</span>
                </a>
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="/forms">
                    <span class="mx-3" > <i class="fa fa-warehouse"></i> Products</span>
                </a>
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="/forms">
                    <span class="mx-3"> <i class="fa fa-dollar-sign"></i> Sales</span>
                </a>
                <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="/forms">
                    <span class="mx-3"> <i class="fa fa-chart-line"></i> Reports</span>
                </a>
            </nav>
        </div>
