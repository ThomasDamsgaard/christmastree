<div id="datepicker" class="md:grid md:grid-cols-2 md:gap-6 px-10 mt-5">
  <div class="md:col-span-2">
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="p-5 bg-white sm:p-6">

          <div class="grid grid-cols-4 gap-6">
            <div class="col-span-6 sm:col-span-2">
              <h4 class="font-semibold text-xl">Silva Green ApS</h4>
              <p class="mt-6">Rugårdsvej 784, DK-5462 Morud</p>
              <p>Tel: +4564801133</p>
              <p>Fax: +4564801177</p>
              <p>Mobile: +4530517002</p>
              <p>Mobile: +4540737078</p>
              <p>www.silva-green.dk</p>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <div class="flex justify-between">
                <h4 class="font-semibold text-xl">Delivery Note</h4>
                <p class="font-semibold text-xl">{{ $deliveryNote->id }}</p>
              </div>
              <label for="destination" class="block text-sm font-medium leading-5 text-gray-700 mt-6">
                Destination
              </label>
              <input
                id="destination"
                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                type="text"
                name="destination"
                list="customer"
                v-model="customer"
                required
              >
              <datalist id="customer">
                  <option value="ETS Georges Digonnet">ETS Georges Digonnet</option>
              </datalist>
              <div class="px-3" v-if="customer === 'ETS Georges Digonnet'">
                <p>Route de Montfaucon</p>
                <p>Lieu-dit Charron</p>
                <p>43190 Tence</p>
              </div>
              <label for="reference" class="block text-sm font-medium leading-5 text-gray-700 mt-6">
                Reference Number
              </label>
              <input
                id="reference"
                class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                type="text"
                name="reference"
                required
              >
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="date" class="block text-sm font-medium leading-5 text-gray-700">
                Date
              </label>
              <vuejs-datepicker
                v-model="date"
                name="date"
                input-class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                :monday-first="true"
                format="dd MMMM yyyy"
                calendar-class="rounded-md"
              >

              </vuejs-datepicker>
              {{-- <input id="date"
              class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
              type="text"
              value="{{ Carbon\Carbon::now()->format('d-m-Y') }}"
              name="date" pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$"
              required>
              @error('date')
                <p class="text-red-900">{{ $message }}</p>
              @enderror --}}
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="departure" class="block text-sm font-medium leading-5 text-gray-700">
                Departure Date
              </label>
              <vuejs-datepicker
                v-model="departure"
                name="departure"
                input-class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                :monday-first="true"
                format="dd MMMM yyyy"
                calendar-class="rounded-md"
              >

              </vuejs-datepicker>
                {{-- <input id="departure"
                  class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                  type="text"
                  placeholder="1234567"
                  name="departure"
                  required
                > --}}
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="puller" class="block text-sm font-medium leading-5 text-gray-700">
                Puller Reg
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="puller" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="TH4675" name="puller" required>
              </div>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="arrival" class="block text-sm font-medium leading-5 text-gray-700">
                Arrival Date
              </label>
              <vuejs-datepicker
                v-model="arrival"
                name="arrival"
                input-class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                :monday-first="true"
                format="dd MMMM yyyy"
                calendar-class="rounded-md"
              >

              </vuejs-datepicker>
                {{-- <input id="arrival"
                  class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                  type="text"
                  placeholder="1234567"
                  name="arrival"
                  required
                > --}}
            </div>

            <div class="col-span-6 sm:col-span-2">
              <label for="trailer" class="block text-sm font-medium leading-5 text-gray-700">
                Trailer Reg
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                  #
                </span>
                <input id="trailer" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="TH4675" name="trailer">
              </div>
            </div>

            <div class="col-span-6 sm:col-span-2"></div>

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

          {{-- <img class="mt-5" src="/images/truck.png" alt="Truck"> --}}
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
    <script src="https://unpkg.com/vuejs-datepicker"></script>

    <script type="text/javascript">
      var datepicker = new Vue({
        el: "#datepicker",
        components: {
          vuejsDatepicker
        },
        data () {
          return {
            customer: '',
            date: new Date(),
            departure: new Date(),
            arrival: new Date()
          };
        }
      });
    </script>
  @endpush
