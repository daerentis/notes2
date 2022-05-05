<x-app-layout>
  <div class="max-w-7xl mx-auto">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <form method="POST" action="{{ route('notes.add') }}" enctype="multipart/form-data">
          @csrf
          <input type="text" name="title" required />

          <button>Publish</button>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>