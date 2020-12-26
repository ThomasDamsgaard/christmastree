<div class="flex flex-col mt-5 px-10">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="table-fixed min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="w-1/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Pallet
              </th>
              <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Species
              </th>
              <th scope="col" class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Label
              </th>
              <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Size
              </th>
              <th scope="col" class="w-1/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Number
              </th>
              <th scope="col" class="relative w-1/6 px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <input class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="xxx" name="pallet[]">
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <input v-model="input.type" class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="type" placeholder="xxx" name="type[]">
                <datalist id="type">
                  <option value="NGR">NGR</option>
                  <option value="NOB">NOB</option>
                </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                <input class="flex-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="label" placeholder="xxx" name="label[]">
                              <datalist id="label">
                                <option value="Green/White">Green/White</option>
                                <option value="Blue/White">Blue/White</option>
                                <option value="Grey">Grey</option>
                              </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                <input class="flex-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="size" placeholder="xxx" name="type[]">
                <datalist id="size">
                  <option value="125-150">125-150</option>
                  <option value="150-175">150-175</option>
                  <option value="150-200">150-200</option>
                </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <input class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="xxx" name="pallet[]">
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                      1
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">NGR</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                Green
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                125-150
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                25
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                      1
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">NGR</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                Green
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                125-150
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                25
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
              </td>
            </tr>

            <!-- More rows... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>