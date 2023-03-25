   <x-app-layout>

   <x-sidebar />

     <main class="flex-1 relative overflow-y-auto focus:outline-none bg-zinc-800">
       @include('layouts.top-nav')

     <x-search-form />

 <!-- new template -->
<div class="flex flex-col p-8">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden">
        <table class="min-w-full">
          <thead class="">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Email Adress
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                Member Since
              </th>
            </tr>
          </thead>
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
      </div>
    </div>
  </div>
</div>

<!-- pagination -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 py-3 flex items-center justify-between sm:px-6">
  <div class="flex-1 flex justify-between sm:hidden">
    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
      Previous
    </a>
    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
      Next
    </a>
  </div>
    <div>
      <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
        <a href="#" class="relative inline-flex items-center px-2 py-2 border border-gray-600 text-sm font-medium text-white">
          <span class="sr-only">Previous</span>
          <!-- Heroicon name: solid/chevron-left -->
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
        <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
        <a href="#" aria-current="page" class="z-10 bg-red-500 border-red-600 text-black relative inline-flex items-center px-4 py-2 border text-sm font-medium">
          1
        </a>
        <a href="#" class="border-gray-600 text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
          2
        </a>
      </nav>
    </div>
  </div>
</div>
</main>
</div>

</x-app-layout>
