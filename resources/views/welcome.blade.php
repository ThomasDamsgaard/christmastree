<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-300{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

        <link href="https://unpkg.com/tailwindcss@^1.8/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">

        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    </head>
    <body class="antialiased bg-gray-100">
          <form class="mt-5" method="POST" action="{{ route('excel.store') }}">
            @csrf

            <div>
              @include('components.section-text', [
                'header' => 'Header',
                'text' => 'This information will tell employee what the section is about.'
                ])

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

                        <div class="grid grid-cols-6 gap-6">
                          <div class="col-span-6 sm:col-span-2">
                            <label for="date" class="block text-sm font-medium leading-5 text-gray-700">
                              Date
                            </label>
                            <input id="date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" value="{{ Carbon\Carbon::now()->format('d-m-y') }}" name="date">
                          </div>

                          <div class="col-span-6 sm:col-span-2">
                            <label for="order" class="block text-sm font-medium leading-5 text-gray-700">
                              Order
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                #
                              </span>
                              <input id="order" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="1234567" name="order">
                            </div>
                          </div>

                          <div class="col-span-6 sm:col-span-2">
                            <label for="location" class="block text-sm font-medium leading-5 text-gray-700">
                              Location
                            </label>
                            <input id="location" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Godset" name="location">
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
                              <input id="puller" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="TH4675" name="puller">
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
                            <input id="supplier" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Godset" name="supplier">
                          </div>

                          <div class="col-span-6 sm:col-span-2">
                            <label for="reference" class="block text-sm font-medium leading-5 text-gray-700">
                              Reference Person
                            </label>
                            <input id="reference" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="Jens Jensen" name="reference">
                          </div>

                          <div class="col-span-6 sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">
                              Phone
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                #
                              </span>
                              <input id="phone" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="text" placeholder="80808080" name="phone">
                            </div>
                          </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6 mt-5">
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
                      </div>

                    </div>
                </div>
              </div>
            </div>

             @include('rule')

             @include('components.section-text', [
                  'header' => 'Line Specifications',
                  'text' => 'This information will tell employee what the section is about.'
                  ])

              <div class="mt-10 sm:mt-0 px-10 mb-5">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="mt-5 md:mt-0 md:col-span-3">
                    @include('table')
                  </div>
                </div>
              </div>

              @include('modal')

           

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

            <div>
             

            <div class="mt-5 md:mt-0 md:col-span-3">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                    Send
                  </button>
                </div>
              </div>
            </div>
            </div>

            @if(session()->has('success'))
              <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">{{ session()->get('success') }}</p>
              </div>
            @endif

          </form>
          <script type="text/javascript">
            let inputs = document.getElementsByName('pallet[]');
            console.log(inputs);
            inputs.forEach(function(input) {
              input.addEventListener('change', function(e) {
                let modal = document.getElementById('modal');
                modal.classList.remove('hidden');
              });
            });
          </script>
    
        <script type="text/javascript">
          var app = new Vue({
            el: "#app",
            data: {
                inputs: [
                    {
                        type: ''
                    }
                ]
            },
            methods: {
                add(index) {
                    this.inputs.push({ type: '' });
                },
                remove(index) {
                    this.inputs.splice(index, 1);
                }
            }
          });
        </script>
    </body>
</html>
