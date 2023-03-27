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

          <tbody class="bg-zinc-600 divide-y-8 divide-zinc-900">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm text-white">
                      jane
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-white">Doe</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-white">
                  jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4">
                <a href="#" class="text-white">21 sep 2021</a>
              </td>
            </tr>
            <!-- second raw -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm text-white">
                       Thanyani
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-white">Khalishi</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-white">
                  khalishisimon@gmail.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                User
              </td>
              <td class="px-6 py-4">
                <a href="#" class="text-white">21 sep 2021</a>
              </td>
            </tr>
          </tbody>
      </table>
  </x-admin-table>

<!-- pagination -->
<x-pagination />
</main>

</x-app-layout>
