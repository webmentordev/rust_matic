<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold mb-6 text-3xl">{{ __("Registered Users") }}</h2>
                    <table class="w-full text-sm">
                        <tr class="bg-black text-white text-start">
                            <th class="text-start p-3">Name</th>
                            <th class="text-start">Email</th>
                            <th class="text-start">Verified</th>
                            <th class="text-start">SteamID</th>
                            <th class="text-start">isAdmin</th>
                            <th class="text-end">SignedUp</th>
                            <th class="p-3 text-end">MadeAdmin</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr class="text-start">
                                <td class="text-start p-3">{{ $user->name }}</td>
                                <td class="text-start">{{ $user->email }}</td>
                                <td class="text-start">
                                    @if ($user->email_verified_at)
                                        <span class="bg-green-600/10 py-1 px-2 font-semibold rounded-lg text-green-700">Verified</span>
                                    @else
                                        <span class="bg-red-600/10 py-1 px-2 font-semibold rounded-lg text-red-700">Pending</span>
                                    @endif
                                </td>
                                <td class="text-start">{{ $user->steam_id }}</td>
                                <td class="text-start">
                                    @if ($user->is_admin == true)
                                        <span class="bg-green-600/10 py-1 font-semibold px-2 rounded-lg text-green-700">Admin</span>
                                    @else
                                        <span class="bg-red-600/10 py-1 font-semibold px-2 rounded-lg text-red-700">NotAdmin</span>
                                    @endif
                                </td>
                                <td class="text-end">{{ $user->created_at->diffForHumans() }} - {{ $user->created_at->format('D d/m/Y H:i:s A') }} UTC</td>
                                <td class="text-end">
                                    @if (auth()->user()->id != $user->id)
                                        <form action="{{ route('update.status', $user->id) }}" method="POST">
                                            @csrf
                                            @if ($user->is_admin == true)
                                                <x-primary-button class="ml-3">
                                                    {{ __('Remove') }}
                                                </x-primary-button>
                                            @else
                                                <x-primary-button class="ml-3">
                                                    {{ __('Admin') }}
                                                </x-primary-button>
                                            @endif
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
