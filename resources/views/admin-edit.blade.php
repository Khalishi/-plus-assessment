<x-app-layout>
    <x-sidebar />

    <main class="flex-1 relative overflow-y-auto focus:outline-none bg-zinc-800">
        <div class="text-white pl-6 pt-4">
            <p class="text-sm">Back to Users</p>
            <h1 class="text-xl font-bold">khalishi Thanyani</h1>
        </div>
  <div class="bg-zinc-700 w-11/12 ml-6">
    <div class="mt-6 pl-10 text-white">
       <h1 class="text-lg pt-6">User Details</h1>
            <div class="py-2 flex">
                <label for="name"
                 class="block text-xs font-medium text-white">
                   First name
                 </label>

                <label for="name"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  Last name
                </label>
            </div>
            <div class="py-2 flex space-x-4">
                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
               <div>
                <label for="name"
                  class="block text-xs font-medium text-white">
                    Email
                  </label>
                  <input type="text"
                  name="name" id="name"
                  class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 sm:text-xs w-80" >
                </div>

                <div>
                <label for="role"
                 class="block text-sm font-medium text-white mt-2">
                    Role
                  </label>
                <select id="role"
                 name="role"
                  class="block w-80 py-2 text-base border-b-2 border-bg-zinc-900 bg-zinc-700 focus:outline-none sm:text-xs">
                  <option>Admin</option>
                  <option selected>Manger</option>
                  <option>User</option>
                </select>
              </div>
              <div class="py-2 flex">
                <label for="name"
                 class="block text-xs font-medium text-white">
                   First name
                 </label>

                <label for="name"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  Last name
                </label>
            </div>
            <div class="py-2 flex space-x-4">
                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input type="text"
                 name="name" id="name"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>

            <button
             type="button"
             class="inline-flex items-center px-3 py-1.5 mt-2 border border-amber-300 text-xs font-medium rounded-full text-amber-300 bg-zinc-900 hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500"
                  >
                    Apply Changes
             </button>
        </div>
    </div>
    </main>
</x-app-layout>
