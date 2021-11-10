<x-app-layout>
  <form class="mt-5" method="POST" action="{{ route('deliveryNote.store') }}">
    @csrf

        <div>
          @include('components.section-text', [
            'header' => 'Customer Data',
            ])

          @include('components.customer-data')

         @include('components.rule')

         @include('components.section-text', [
          'header' => 'Line Specifications',
          ])

          @include('components.table')

        <div>
          <div class="mt-10 md:col-span-3">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <button type="submit" class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                  Generate
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
</x-app-layout>
