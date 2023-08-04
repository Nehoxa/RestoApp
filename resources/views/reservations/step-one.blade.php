<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <form method="POST" action="{{ route('reservations.store.step.one') }}">
            @csrf
            <div class="sm:col-span-6 my-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <div class="mt-1">
                    <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name ?? '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-400 @enderror" />
                </div>
                @error('first_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="sm:col-span-6 my-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Second Name</label>
                <div class="mt-1">
                    <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name ?? '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-400 @enderror" />
                </div>
                @error('last_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="sm:col-span-6 my-3">
                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                <div class="mt-1">
                    <input type="email" id="email" name="email" value="{{ $reservation->email ?? '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                </div>
                @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="sm:col-span-6 my-3">
                <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone number</label>
                <div class="mt-1">
                    <input type="tel" id="tel_number" name="tel_number" value="{{ $reservation->tel_number ?? '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('tel_number') border-red-400 @enderror" />
                </div>
                @error('tel_number')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="sm:col-span-6 my-3">
                <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation
                    Date</label>
                <div class="mt-1">
                    <input type="datetime-local" id="res_date" name="res_date"
                        min="{{ $res_min->format('Y-m-d\TH:i:s') }}" max="{{ $res_max->format('Y-m-d\TH:i:s') }}"
                        value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-400 @enderror" />
                </div>
                
                @error('res_date')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @else
                <span class="text-xs">Please choose the time between 12h and 23h.</span>
                @enderror
            </div>
            <div class="sm:col-span-6 my-3">
                <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest</label>
                <div class="mt-1">
                    <input type="number" min="1" max="12" id="guest_number" name="guest_number"
                        value="{{ $reservation->guest_number ?? '' }}"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                </div>
                @error('guest_number')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-5">
                <button type="submit"
                    class="px-4 py-2 bg-blue-400 text-white hover:bg-blue-700 rounded-lg">Go to step 2</button>
            </div>
        </form>
    </div>
</x-guest-layout>
