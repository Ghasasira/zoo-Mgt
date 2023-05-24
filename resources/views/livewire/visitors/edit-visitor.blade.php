<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Visitor Name</label>
                <input type="text"
                        wire:model="visitor.name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Joh"
                       required="">
                @error('visitor.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <!-- left column -->
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Select Ticket</label>
                  <select wire:model="visitor.ticket_id" class="flex w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($tickets as $t)
                                <option value="{{$t->id}}" class="block w-full">{{ $t->ticket_name }}</option>
                        @endforeach
                  </select>
              </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Arrival time</label>
                <input type="time"
                        wire:model="visitor.arrival_time"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Joh"
                       required="">
                @error('visitor.arrival_time') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Departure time</label>
                <input type="time"
                        wire:model="visitor.departure_time"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Joh"
                       required="">
                @error('visitor.departure_time') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Ticket Number</label>
                <input type="text"
                        wire:model="visitor.ticket_no"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        readonly>
                @error('visitor.ticket_no') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-start space-x-4">
                <a href="/visitors" class="text-gray-900  font-medium  text-sm ">Back</a>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                </button>
            </div>
        </form>

    </div>
</div>