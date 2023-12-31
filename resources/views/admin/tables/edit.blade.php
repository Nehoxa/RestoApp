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
                    <form method="POST" action="{{ route('admin.tables.update', $table->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $table->name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest
                                number</label>
                            <div class="mt-1">
                                <input type="number" min="1" max="12" id="guest_number"
                                    value="{{ $table->guest_number }}" wire:model.lazy="guest_number"
                                    name="guest_number"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-2">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}" @selected($table->status == $status->value)>
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-2">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}" @selected($table->location == $location->value)>
                                            {{ $location->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('location')
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
