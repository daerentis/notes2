<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.bubble.min.css" rel="stylesheet">
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 px-4">
      @include('layouts.navigation')
      <main>
        {{ $slot }}
      </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
    @livewireScripts
  </body>
</html>
