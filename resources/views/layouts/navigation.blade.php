<nav>
  <div class="max-w-7xl mx-auto p-4 flex justify-between items-center">
    <div>
      <a href="{{ route('notes') }}">
        <svg class="inline-block h-6 mb-2 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M373.5 27.11C388.5 9.885 410.2 0 433 0C476.6 0 512 35.36 512 78.98C512 101.8 502.1 123.5 484.9 138.5L277.7 319L192.1 234.3L373.5 27.11zM255.1 341.7L235.9 425.1C231.9 442.2 218.9 455.8 202 460.5L24.35 510.3L119.7 414.9C122.4 415.6 125.1 416 128 416C145.7 416 160 401.7 160 384C160 366.3 145.7 352 128 352C110.3 352 96 366.3 96 384C96 386.9 96.38 389.6 97.08 392.3L1.724 487.6L51.47 309.1C56.21 293.1 69.8 280.1 86.9 276.1L170.3 256.9L255.1 341.7z"/></svg>
        <h1 class="inline text-2xl">Notes</h1>
      </a>
    </div>

    <div>
      <a class="border border-freshlime rounded-md px-2 py-1 hover:bg-freshlime" href="{{ route('notes.add') }}">Neue Notiz</a>
    </div>

    <div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="cursor-pointer hover:text-freshlime" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Logout') }}</a>
      </form>
    </div>
  </div>
</nav>