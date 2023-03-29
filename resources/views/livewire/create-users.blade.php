<x-modal form-action="createUsers">
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
                <input  wire:model="firstName" type="text"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >

                <input wire:model="LastName" type="text"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>

            <div>
                <label for="email"
                  class="block text-xs font-medium text-white">
                    Email
                  </label>
                  <input wire:model="email" type="email"
                  class="block border-0 border-b border-bg-zinc-900 p-0 bg-zinc-700 sm:text-xs w-80 mt-4" >
            </div>

                <div>
                    <label for="role"
                    class="block text-sm font-medium text-white mt-2">
                        Role
                    </label>
                    <select wire:model="role"
                            class="block w-80 py-2 text-base border-b border-bg-zinc-900 bg-zinc-700 focus:outline-none sm:text-xs">
                            <option>Admin</option>
                            <option>Manger</option>
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
                <input wire:model="password" type="password"
                 class="block border-0 border-b-2 border-bg-zinc-600 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input wire:model="ConfirmPassword" type="password"
                 class="block border-0 border-b-2 border-bg-zinc-600 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
    </x-slot>

     <x-slot name="buttons">
            <button type="button" wire:click="createUsers">
                Create Users
            </button>
    </x-slot>
</x-modal>
