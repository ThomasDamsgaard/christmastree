<div class="md:grid md:grid-cols-3 md:gap-6 mt-5 px-10">
  {{-- <div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Header</h3>
      <p class="mt-1 text-sm leading-5 text-gray-600">
        This information will tell employee what the section is about.
      </p>
    </div>
  </div> --}}
  <div class="mt-5 md:mt-0 md:col-span-3">
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6">

          @include('components.customer-data')

          <img class="mt-5" src="/images/truck.png" alt="Truck">


          {{-- <div class="grid grid-cols-6 gap-6 mt-5">
            <div class="col-span-6 sm:col-span-2">
                  <label for="pallet" class="block text-sm font-medium leading-5 text-gray-700">
                    Pallets
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                      #1
                    </span>
                    <input id="pallet-1" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="12345" name="pallet[]">
                  </div>
                </div>
            @for ($i = 2; $i < 4; $i++)
                <div class="col-span-6 sm:col-span-2 mt-5">
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                      #{{ $i }}
                    </span>
                    <input id="pallet-{{ $i }}" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="12345" name="pallet[]">
                  </div>
                </div>
            @endfor
          </div> --}}
        </div>
      </div>
    </div>
  </div>