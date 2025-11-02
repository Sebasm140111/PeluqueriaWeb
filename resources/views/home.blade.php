<x-guest-layout>
  <div class="max-w-6xl mx-auto p-6">
    <section class="text-center py-12">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-4">Tu nueva barbería de confianza</h1>
      <p class="text-muted-foreground max-w-2xl mx-auto">
        Cortes clásicos, fades y perfilado de barba. Atención con turno y sin pagos online.
      </p>
      <a href="{{ route('reservar') }}" class="inline-block mt-6 px-6 py-3 bg-black text-white rounded-xl">
        Reservar ahora
      </a>
    </section>

    <section class="grid md:grid-cols-3 gap-6 mt-10">
      <div class="border rounded-2xl p-5">
        <h3 class="font-semibold mb-2">Servicios</h3>
        <p>Corte clásico, Fade, Barba, Corte + Barba…</p>
      </div>
      <div class="border rounded-2xl p-5">
        <h3 class="font-semibold mb-2">Equipo</h3>
        <p>Barberos con experiencia. Próximamente fotos y especialidades.</p>
      </div>
      <div class="border rounded-2xl p-5">
        <h3 class="font-semibold mb-2">Ubicación & Horarios</h3>
        <p>Dirección, mapa y horarios de atención.</p>
      </div>
    </section>
  </div>
</x-guest-layout>
