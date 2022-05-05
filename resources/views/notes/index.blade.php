<x-app-layout>
  <div class="max-w-7xl mx-auto">
    @if ($notes->count())
      <div class="p-6 border rounded-lg bg-white shadow-sm grid md:grid-cols-2 gap-5">
        @foreach ($notes as $note)
          <a class="relative block p-4 border hover:border-freshlime rounded-lg transition" href="{{ route('notes.view', $note->id) }}">
            <header>
              <h1 class="text-2xl clamp one-line">{{ $note->title }}</h1>
              <span class="mt-2 block text-gray-400 text-xs"><time>{{ $note->updated_at->diffForHumans() }} bearbeitet</time></span>
              <form method="POST" action="{{ route('notes.delete') }}">
                @method('DELETE')
                @csrf
                <input type="hidden" name="id" value="{{ $note->id }}" />
                <div class="absolute top-0 right-0 rounded-bl-md rounded-tr-md w-5 h-5 text-neutral-400 flex justify-center items-center hover:bg-freshlime hover:text-white hover:text-inherit" onclick="event.preventDefault(); if (window.confirm('Möchtest Du diese Notiz wirklich löschen?')) { this.closest('form').submit(); }">x</div>
              </form>
            </header>
          </a>
        @endforeach
      </div>
    @else
      <p>Keine Notizen vorhanden</p>
    @endif      
  </div>
</x-app-layout>