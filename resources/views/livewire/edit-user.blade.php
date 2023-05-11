
    <main class="flex-1 relative overflow-y-auto focus:outline-none bg-zinc-800">
        <div class="text-white pl-6 pt-4">
             <p>
                <a href="/" class="text-sm hover:underline hover:text-amber-300">Back to Users</a>
             </p>
            <h1 class="text-xl font-bold">khalishi Thanyani</h1>
        </div>
  <div class="bg-zinc-700 w-11/12 ml-6">
    <div class="mt-6 pl-10 text-white">
       <h1 class="text-lg pt-6">User Details</h1>

         <form wire:submit.prevent="updateUser">
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
                <input type="text"wire:model.defer="firstName" value="{{ old('firstName', $this->firstName) }}"
                 name="firstName" id="firstName"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input type="text" wire:model.defer="LastName" value="{{ old('LastName', $this->LastName) }}"
                 name="LastName" id="LastName"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
               <div>
                    @if ($errors->has('LastName'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('LastName') }}</span>
                    @endif
                 </div>
                 <div>
                    @if ($errors->has('firstName'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('firstName') }}</span>
                    @endif
                 </div>

               <div>
                <label for="email"
                  class="block text-xs font-medium text-white">
                    Email
                  </label>
                  <input type="text"wire:model.defer="email" value="{{ old('email', $this->email) }}"
                  name="email" id="email"
                  class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 sm:text-xs w-80" >
                    @if ($errors->has('email'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('email') }}</span>
                    @endif
            </div>

                <div>
                <label for="role"
                 class="block text-sm font-medium text-white mt-2">
                    Role
                  </label>
                <select id="role"wire:model.defer="role"
                 name="role"
                  class="block w-80 py-2 text-base border-b-2 border-bg-zinc-900 bg-zinc-700 focus:outline-none sm:text-xs">
                  <option value="Admin" @if (old('role') == 'Admin') selected @endif>Admin</option>
                  <option value="Manger" @if (old('role') == 'Manger') @endif>Manger</option>
                  <option value="User" @if (old('role') == 'User')  @endif>User</option>
                </select>
                    @if ($errors->has('role'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('role') }}</span>
                    @endif
              </div>
              <div class="py-2 flex">
                <label for="Password"
                 class="block text-xs font-medium text-white">
                   Password
                 </label>

               <label for="Password"
                class="block text-xs font-medium text-white ml-28 pl-2">
                  ConfirmPassword
                </label>
            </div>
            <div class="py-2 flex space-x-4">
                <input type="text"wire:model.defer="password" value="{{ old('Password', $this->password) }}"
                 name="password" id="password"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-40 sm:text-xs" >


                <input type="text"
                 name="password" id="password"wire:model.defer="password"
                 class="block border-0 border-b-2 border-bg-zinc-900 p-0 bg-zinc-700 w-36 sm:text-xs" >
            </div>
              <div>
                    @if ($errors->has('Password'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('password') }}</span>
                    @endif
                 </div>
                 <div>
                    @if ($errors->has('ConfirmPassword'))
                       <span class="error text-red-500 text-xs">{{ $errors->first('password') }}</span>
                    @endif
             </div>

            <button
             type="submit"
             class="inline-flex items-center px-3 py-1.5 mt-2 border border-amber-300 text-xs font-medium rounded-full text-amber-300 bg-zinc-900 hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500"
                  >
                    Apply Changes

           </button>
        </form>
    </div>
    </div>
    </main>
