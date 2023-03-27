<x-app-layout>

    <x-sidebar />

    <main class="flex-1 relative overflow-y-auto focus:outline-none bg-zinc-800">
        <div class="text-white pl-6 pt-4">
            <p class="text-sm">Back to Users</p>
            <h1 class="text-xl font-bold">khalishi Thanyani</h1>
        </div>
  <div class="bg-zinc-500">
    <div class="mt-6 pl-10 text-white">
       <h1 class="text-lg pt-6">User Details</h1>
            <div class="py-2 shadow-sm flex">
                <label for="name"
                 class="block text-xs font-medium text-white">
                   First name
                 </label>

                <label for="name"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  Last name
                </label>
            </div>
            <div class="py-2 shadow-sm flex space-x-4">
                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-500 w-40 sm:text-xs" >


                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-500 w-40 sm:text-xs" >
            </div>
        </div>
    </div>
    </main>
</x-app-layout>
