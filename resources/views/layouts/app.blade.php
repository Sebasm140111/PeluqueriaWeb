<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Style Owners') }}</title>

    {{-- activa clases .js para las animaciones (fallback si no hay JS) --}}
    <script>document.documentElement.classList.add('js');</script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    {{-- Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="font-sans antialiased bg-slate-50">
    <div class="min-h-screen">
      {{-- Header sticky con blur y sombra --}}
      <header class="fixed inset-x-0 top-0 z-50 bg-white/80 backdrop-blur border-b shadow-sm">
        <div class="max-w-7xl mx-auto">
          @include('layouts.navigation')
        </div>
      </header>

      {{-- Empuje para que el contenido no quede debajo del header (alto ≈ 64px) --}}
      <main class="pt-16">
        {{-- Page Heading opcional de Breeze --}}
        @isset($header)
          <div class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              {{ $header }}
            </div>
          </div>
        @endisset

        {{-- Contenido de la página --}}
        {{ $slot }}
      </main>
    </div>
  </body>
</html>
