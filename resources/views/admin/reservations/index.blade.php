<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end my-2 py-2">
                <a href="{{ route('admin.reservations.create') }}"
                    class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-700 rounded-lg">New Reservation</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto relative sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    First name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Last name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Telephone
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Table
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Guest
                                </th>
                                <th scope="col" class="py-3 px-6">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->first_name }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->last_name }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->email }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->tel_number }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->res_date }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->table->name }}
                                    </th>
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $reservation->guest_number }}
                                    </th>
                                    <td class="py-4 px-6">
                                        <div>
                                            <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <form class="text-blue-600 dark:text-blue-500 hover:underline"
                                                method="POST"
                                                action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                                onsubmit="return confirm('Are you sure ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
