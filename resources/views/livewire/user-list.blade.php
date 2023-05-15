<div>
    <tbody class="bg-zinc-600 divide-y-8 divide-zinc-900">
    @foreach($users as $user)
        <tr wire:key="user-{{ $user->id }}">
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm text-amber-300 underline">
                        <a href="{{ route('admin-edit', $user) }}">{{ $user->firstName }}</a>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-white">{{ $user->lastName }}</div>
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
    @endforeach
</tbody>

<div>
    {{ $users->links() }}
</div>
</div>
