<div id="app">
  @include('rule')

  <div v-for="(input,k) in inputs" :key="k" class="mt-5 px-10 mb-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Line Information</h3>
          <p class="mt-1 text-sm leading-5 text-gray-600">
            Some info text
          </p>
        </div>

        <button @click="remove(k)" v-show="k || ( !k && inputs.length > 1)" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-600 shadow-sm hover:bg-red-500 focus:outline-none focus:shadow-outline-blue active:bg-red-600 transition duration-150 ease-in-out" type="button">
          Delete Line
        </button>

        <button @click="add(k)" v-show="k == inputs.length-1" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 shadow-sm hover:bg-green-500 focus:outline-none focus:shadow-outline-blue active:bg-green-600 transition duration-150 ease-in-out" type="button">
          Add Line
        </button>

      </div>

      <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="type" class="block text-sm font-medium leading-5 text-gray-700">
                  Type
                </label>
                <input v-model="input.type" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="type" placeholder="xxx" name="type[]">
                <datalist id="type">
                  <option value="NGR">NGR</option>
                  <option value="NOB">NOB</option>
                </datalist>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="size" class="block text-sm font-medium leading-5 text-gray-700">
                  Size
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="size" placeholder="xxx" name="type[]">
                  <datalist id="size">
                    <option value="125-150">125-150</option>
                    <option value="150-175">150-175</option>
                    <option value="150-200">150-200</option>
                  </datalist>
                </div>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="amount" class="block text-sm font-medium leading-5 text-gray-700">
                  Amount
                </label>
                <input class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="12" name="type[]">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="label" class="block text-sm font-medium leading-5 text-gray-700">
                  Label
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="label" placeholder="xxx" name="type[]">
                  <datalist id="label">
                    <option value="Green/White">Green/White</option>
                    <option value="Blue/White">Blue/White</option>
                    <option value="Grey">Grey</option>
                  </datalist>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>