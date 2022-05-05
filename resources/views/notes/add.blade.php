<x-app-layout>
  <div class="max-w-7xl mx-auto">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <form method="POST" action="{{ route('notes.add') }}" enctype="multipart/form-data">
          @csrf
          <div class="grid justify-center mb-5">
            <input type="text" class="mb-5 text-center text-3xl border-none focus:ring-0" name="title" required autofocus />
            <button class="bg-freshlime text-white px-2 py-2 text-sm rounded-lg">Anlegen</button>
          </div>         
        </form>
      </div>
    </div>
  </div>
</x-app-layout>