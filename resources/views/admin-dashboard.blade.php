   <x-app-layout>

   <x-sidebar />

     <main class="flex-1 relative overflow-y-auto focus:outline-none bg-zinc-800">
       @include('layouts.top-nav')

     <x-search-form />

     <x-admin-table>
         <table class="min-w-full">
               <th scope="col">
                  <x-table-titles>First Name</x-table-titles>
              </th>
               <th scope="col">
                  <x-table-titles>Last Name</x-table-titles>
                </th>
                <th scope="col">
                  <x-table-titles>Email Adress</x-table-titles>
                </th>
                <th scope="col">
                  <x-table-titles>Role</x-table-titles>
                </th>
                <th scope="col">
                  <x-table-titles>Member Since</x-table-titles>
           </th>

              @livewire('user-list')
      </table>
  </x-admin-table>

    <!-- pagination -->

<x-pagination />
</main>

</x-app-layout>
