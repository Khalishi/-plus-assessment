<div class="h-screen flex overflow-hidden bg-gray-100">
    <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

        <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">
        <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>

            <svg class="h-6 w-6 text-white" xmlns="assets/icons/logo.svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
            <img class="h-8 w-auto" src="/images/logo.svg" alt="logo">
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2 space-y-1">

            <a href="#" class="text-gray-300 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                <img class="h-8 w-auto" src="/images/users.svg" alt="users">
                Users
            </a>

            <a href="#" class="text-gray-300 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                <img class="h-8 w-auto" src="/images/pages.svg" alt="pages">
                Pages
            </a>
            </nav>
        </div>
        </div>
    </div>

    <div class="hidden md:flex md:flex-shrink-0 bg-black">
        <div class="flex flex-col w-64">
        <div class="flex-1 flex flex-col min-h-0">
            <div class="flex items-center  flex-shrink-0 px-4">
            <img class="h-6 w-auto mt-8" src="/images/logo.svg" alt="logo">
            </div>
            <div class="flex-1 flex flex-col overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-1 pt-6">
                <a href="#" class="bg-red-500 h-10 w-56 text-white group flex items-center px-2 py-2 text-sm font-medium">
                <div class="text-gray-300 mr-3 flex">
                    <img class="h-8 w-auto" src="/images/users.svg" alt="users">
                    <p class="pt-2 pl-2">Users </p>
                </div>
             </a>

             <div class="text-gray-300 mr-3 flex pt-4">
                    <img class="h-8 w-auto pl-1 ml-1 bg-white" src="/images/pages.svg" alt="pages">
                    <p class="pt-1 pl-2">Pages</p>
                </div>
            </nav>
            </div>
        </div>
        </div>
    </div>
