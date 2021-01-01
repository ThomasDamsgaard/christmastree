<div class="md:grid md:grid-cols-3 md:gap-6 mt-5 px-10">
  <div class="mt-5 md:mt-0 md:col-span-3">
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6">

          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-2">
              <label for="date" class="block text-sm font-medium leading-5 text-gray-700">
                Date
              </label>
              <input id="date" 
              class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
              type="text" 
              value="{{ Carbon\Carbon::now()->format('d-m-Y') }}" 
              name="date" pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" 
              required>
              @error('date')
                <p class="text-red-900">{{ $message }}</p>
              @enderror
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="order" class="block text-sm font-medium leading-5 text-gray-700">
                Order
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="order" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="1234567" name="order" required>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="location" class="block text-sm font-medium leading-5 text-gray-700">
                Location
              </label>
              <input id="location" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Godset" name="location" required>
            </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-5">
            <div class="col-span-6 sm:col-span-2">
              <label for="puller" class="block text-sm font-medium leading-5 text-gray-700">
                Tractor/Puller Reg
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="puller" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="TH4675" name="puller" required>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="trailer" class="block text-sm font-medium leading-5 text-gray-700">
                Trailer Reg
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="trailer" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="1234567" name="trailer">
              </div>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="second_trailer" class="block text-sm font-medium leading-5 text-gray-700">
                2nd. Trailer Reg
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="second_trailer" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="TH4675" name="second_trailer">
              </div>
            </div>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-5">
            <div class="col-span-6 sm:col-span-2">
              <label for="supplier" class="block text-sm font-medium leading-5 text-gray-700">
                Supplier
              </label>
              <input id="supplier" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Godset" name="supplier" required>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="reference" class="block text-sm font-medium leading-5 text-gray-700">
                Reference Person
              </label>
              <input id="reference" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Jens Jensen" name="reference" required>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">
                Phone
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="phone" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" placeholder="80808080" name="phone" required>
              </div>
            </div>
            </div>

          <img class="mt-5" src="/images/truck.png" alt="Truck">
        </div>
      </div>
    </div>
  </div>