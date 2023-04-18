@foreach($users as $user)
<tbody class="bg-zinc-600 divide-y-8 divide-zinc-900">
<tr>
    <td class="px-6 py-4 whitespace-nowrap">
       <div class="flex items-center">
          <div class="text-sm text-amber-300 underline">
                 <a href="/admin/edit">{{ $user->firstName }}</a>
          </div>
      </div>
  </td>
<td class="px-6 py-4 whitespace-nowrap">
     <div class="text-sm text-white">{{ $user->LastName }}</div>
</td>
<td class="px-6 py-4 whitespace-nowrap text-white">
      {{ $user->email }}
 </td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-white">
    {{ $user->role }}
</td>
<td class="px-6 py-4">
    <a href="#" class="text-white">{{ $user->created_at }}</a>
</td>
</tr>
</tbody>
@endforeach
