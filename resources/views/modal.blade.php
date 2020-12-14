<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-center">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
              Pallet #
            </h3>
            <div class="mt-2">
              <div id="app">
                <div v-for="(input,k) in inputs" :key="k" class="mt-10 sm:mt-0 mb-5">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-3">
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
                    <button @click="remove(k)" v-show="k || ( !k && inputs.length > 1)" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-600 shadow-sm hover:bg-red-500 focus:outline-none focus:shadow-outline-blue active:bg-red-600 transition duration-150 ease-in-out" type="button">
                      Delete Line
                    </button>

                    <button @click="add(k)" v-show="k == inputs.length-1" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 shadow-sm hover:bg-green-500 focus:outline-none focus:shadow-outline-blue active:bg-green-600 transition duration-150 ease-in-out" type="button">
                      Add Line
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:justify-between">
        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
          Deactivate
        </button>
        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>