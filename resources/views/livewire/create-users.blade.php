<x-modal>
     <x-slot name="title">
          Create Users
    </x-slot>

     <x-slot name="content">

           <div class="py-2 flex">
                <label for="FirstName"
                 class="block text-xs font-medium text-white">
                   First name
                 </label>

                <label for="LastName"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  Last name
                </label>
            </div>
            <div class="py-2 flex space-x-4">
                <input type="text"
                 name="FirstName" id="FirstName"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >

                <input type="text"
                 name="LastName" id="LastName"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
               <div>
                <label for="email"
                  class="block text-xs font-medium text-white">
                    Email
                  </label>
                  <input type="email"
                  name="email" id="email"
                  class="block border-0 border-b border-bg-zinc-900 p-0 bg-zinc-700 sm:text-xs w-80 mt-4" >
            </div>

                <div>
                <label for="role"
                 class="block text-sm font-medium text-white mt-2">
                    Role
                  </label>
                <select id="role"
                 name="role"
                  class="block w-80 py-2 text-base border-b border-bg-zinc-900 bg-zinc-700 focus:outline-none sm:text-xs">
                  <option>Admin</option>
                  <option selected>Manger</option>
                  <option>User</option>
                </select>
              </div>
              <div class="py-2 flex">
                <label for="password"
                 class="block text-xs font-medium text-white">
                    Password
                 </label>

               <label for="ConfirmPassword"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  Confirm Password
                </label>
            </div>
            <div class="py-2 flex space-x-4">
                <input type="password"
                 name="password" id="password"
                 class="block border-0 border-b-2 border-bg-zinc-600 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input type="password"
                 name="ConfirmPassword" id="ConfirmPassword"
                 class="block border-0 border-b-2 border-bg-zinc-600 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
    </x-slot>

     <x-slot name="buttons">
            <button type="button">
                Create Users
            </button>
    </x-slot>
</x-modal>
