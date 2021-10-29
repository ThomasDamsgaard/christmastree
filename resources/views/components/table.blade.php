<div id="table" class="flex flex-col mt-5 px-10">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-6 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="table-fixed min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="w-1/12 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Slot
              </th>
              <th scope="col" class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Pallet #
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
            <tr v-for="(input, index) in inputs">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <input v-model="input.slot" class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="xxx" name="slot[]" required>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <input v-model="input.pallet" class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="xxx" name="pallet[]" required>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <input v-model="input.type" class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="type" placeholder="xxx" name="type[]" required>
                <datalist id="type">
                  <option value="NGR">NGR</option>
                  <option value="NOB">NOB</option>
                </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                <input v-model="input.label" class="flex-1 block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="label" placeholder="xxx" name="label[]" required>
                <datalist id="label">
                  <option value="Green/White">Green/White</option>
                  <option value="Blue/White">Blue/White</option>
                  <option value="Grey">Grey</option>
                </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                <input v-model="input.size" class="flex-1 block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" list="size" placeholder="xxx" name="size[]" required>
                <datalist id="size">
                  <option value="125-150">125-150</option>
                  <option value="150-175">150-175</option>
                  <option value="150-200">150-200</option>
                </datalist>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <input v-model="input.amount" class="block w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="xxx" name="amount[]" required>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a @click="remove(index)" class="text-red-600 hover:text-red-900">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <p @click="add" class="text-indigo-600 hover:text-indigo-900">
                  Add Line
                </p>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

            <!-- More rows... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@push('scripts')
  <script type="text/javascript">
    var table = new Vue({
      el: "#table",
      data: {
          inputs: [
              {
                  slot: '',
                  pallet: '',
                  type: '',
                  label: '',
                  size: '',
                  amount: ''
              }
          ]
      },
      methods: {
          add() {
              this.inputs.push({ slot: '', pallet: '', type: '', label: '', size: '', amount: '' });
          },
          remove(index) {
            if (confirm('Confirm you want to delete the row')) {
              this.inputs.splice(index, 1);
            }
          }
      }
    });
  </script>
@endpush


