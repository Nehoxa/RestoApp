<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name"
                                    value="{{ $reservation->first_name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-400 @enderror" />
                            </div>
                            @error('first_name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Second Name</label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name"
                                    value="{{ $reservation->last_name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-400 @enderror" />
                            </div>
                            @error('last_name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" value="{{ $reservation->email }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                            </div>
                            @error('email')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-3">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone number</label>
                            <div class="mt-1">
                                <input type="tel" id="tel_number" name="tel_number"
                                    value="{{ $reservation->tel_number }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('tel_number') border-red-400 @enderror" />
                            </div>
                            @error('tel_number')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-3">
                            <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation
                                Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date"
                                    value="{{ $reservation->res_date }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-400 @enderror" />
                            </div>
                            @error('res_date')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-3">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest</label>
                            <div class="mt-1">
                                <input type="number" min="1" max="12" id="guest_number"
                                    name="guest_number" value="{{ $reservation->guest_number }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-3">
                            <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id"
                                    class="form-multiselect block w-full mt-1  @error('table_id') border-red-400 @enderror">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                            {{ $table->name }} ({{ $table->guest_number }} guest)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
