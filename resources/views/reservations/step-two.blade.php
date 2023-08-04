<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <form method="POST" action="{{ route('reservations.store.step.two') }}">
            @csrf
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
                <a href="{{ route('reservations.step.one') }}"
                    class="px-4 py-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg">Previous</a>
                <button type="submit" class="px-4 py-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg">Make
                    Reservation</button>
            </div>
        </form>
    </div>
</x-guest-layout>
