<x-app-layout>
    <form class="mt-5" method="POST" action="{{ route('deliveryNote.store') }}">
        @csrf

        <div>
          {{-- @include('components.section-text', [
            'header' => 'Customer Data',
            'text' => 'This information will tell employee what the section is about.'
            ]) --}}

          @include('components.customer-data')

        {{--  @include('components.rule')

         @include('components.section-text', [
          'header' => 'Line Specifications',
          'text' => 'This information will tell employee what the section is about.'
          ]) --}}

          
          @include('components.table')

        <div>
         

        <div class="mt-10 md:col-span-3">
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
          var app = new Vue({
            el: "#app",
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
</x-app-layout>
