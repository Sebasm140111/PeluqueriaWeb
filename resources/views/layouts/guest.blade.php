@props(['title' => 'Style Owners — Barbería en Riobamba'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title }}</title>
  <meta name="description" content="Style Owners — Barbería en Riobamba. Cortes clásicos, fades y perfilado de barba. Reserva tu turno online.">

  {{-- Open Graph --}}
  <meta property="og:title" content="Style Owners — Barbería en Riobamba">
  <meta property="og:description" content="Cortes clásicos, fades y perfilado de barba. Reserva tu turno online.">
  <meta property="og:image" content="{{ asset('favicon.png') }}">
  <meta property="og:type" content="website">

  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

  {{-- Marca el html con .js para habilitar las animaciones (y mantener fallback sin JS) --}}
  <script>document.documentElement.classList.add('js');</script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-slate-900 bg-slate-50">
  {{-- HEADER --}}
  <header x-data="{open:false}" class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-md shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center gap-3">
        <img src="{{ asset('img/style-owners-mark.png') }}" alt="Style Owners" class="h-8 w-8">
        <span class="hidden sm:inline text-lg font-semibold">Style Owners</span>
      </a>

      <nav class="hidden md:flex items-center gap-6">
        <a href="{{ route('home') }}" class="hover:text-black">Inicio</a>
        <a href="{{ route('reservar') }}" class="hover:text-black">Reservar</a>
        <a href="{{ route('login') }}" class="text-sm hover:text-black">Login</a>
        <a href="{{ route('register') }}"
           class="text-sm px-3 py-1.5 rounded-lg bg-brand text-black hover:bg-brand-600">
          Registrarse
        </a>
      </nav>

      <button class="md:hidden p-2" @click="open=!open" aria-label="Abrir menú" :aria-expanded="open">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          <path x-show="open" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <div x-show="open" x-transition class="md:hidden border-t bg-white">
      <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-2">
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('reservar') }}">Reservar</a>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}" class="px-3 py-1.5 rounded-lg bg-black text-white w-fit">Registrarse</a>
      </div>
    </div>
  </header>

  {{-- Empuje para header sticky --}}
  <main class="pt-16">
    {{ $slot }}
  </main>

  {{-- FOOTER --}}
  <footer class="border-t bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid md:grid-cols-3 gap-6 text-sm text-slate-600">
      <div>
        <div class="font-semibold text-slate-900">Style Owners</div>
        <div>Av. Daniel León Borja y Brasil, Riobamba, Ecuador</div>
      </div>
      <div>
        <div>Tel: <a class="hover:text-slate-900" href="tel:+593997779066">+593 99 777 9066</a></div>
        <div>WhatsApp: <a class="hover:text-slate-900" href="https://wa.me/593997779066">+593 99 777 9066</a></div>
      </div>
      <div class="md:text-right">
        © {{ date('Y') }} Style Owners. Todos los derechos reservados.
      </div>
    </div>
  </footer>
</body>
</html>
