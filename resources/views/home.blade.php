<x-guest-layout>
  {{-- HERO (2 columnas en desktop) --}}
  <section class="relative bg-gradient-to-b from-white to-slate-50 pt-24 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-10 md:gap-16 items-center">
        {{-- Texto --}}
        <div class="reveal">
          

          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
            Tu nueva barbería de confianza
          </h1>

          <p class="mt-4 text-base sm:text-lg text-slate-600 max-w-xl">
            Cortes clásicos, fades y perfilado de barba. Atención con turno y sin pagos online.
          </p>

          <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('reservar') }}"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl
                      bg-gradient-to-b from-brand to-brand-700 text-black
                      hover:from-brand-600 hover:to-brand-700 transition shadow-elev">
              Reservar ahora
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </a>

            <a href="#servicios"
               class="inline-flex items-center px-6 py-3 rounded-2xl border hover:bg-white transition">
              Ver servicios
            </a>
          </div>
        </div>

        {{-- Imagen (solo desktop) --}}
        <div class="hidden lg:block reveal">
          <div class="rounded-3xl overflow-hidden border shadow-elev">
            <img
              src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=1400&auto=format&fit=crop"
              alt="Barbería Style Owners"
              class="w-full h-[460px] object-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- SERVICIOS --}}
  <section id="servicios" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex items-end justify-between">
      <div class="reveal">
        <h2 class="text-2xl lg:text-3xl font-semibold">Servicios</h2>
        <p class="text-slate-600">Destacados (luego vendrán de la base de datos).</p>
      </div>
      <a href="{{ route('reservar') }}" class="hidden md:inline text-sm text-slate-700 hover:text-slate-900">Reservar →</a>
    </div>

    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      @foreach ([
        ['title'=>'Corte clásico','img'=>'https://images.unsplash.com/photo-1593702288056-7927b442b3f5?q=80&w=800&auto=format&fit=crop'],
        ['title'=>'Fade','img'=>'https://images.unsplash.com/photo-1517837016564-bfc3ffd67455?q=80&w=800&auto=format&fit=crop'],
        ['title'=>'Corte + Barba','img'=>'https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=800&auto=format&fit=crop'],
        ['title'=>'Perfilado de Barba','img'=>'https://images.unsplash.com/photo-1582095133179-bfd08e2fc6b3?q=80&w=800&auto=format&fit=crop'],
      ] as $s)
        <article class="reveal rounded-2xl overflow-hidden border bg-white shadow-sm
                        hover:shadow-elev hover:-translate-y-1 transition">
          <div class="aspect-[4/3] overflow-hidden">
            <img class="h-full w-full object-cover group-hover:scale-105 transition duration-500"
                 src="{{ $s['img'] }}" alt="{{ $s['title'] }}">
          </div>
          <div class="p-4">
            <h3 class="font-semibold">{{ $s['title'] }}</h3>
            <p class="text-sm text-slate-600">Duración orientativa: 30–60m</p>
          </div>
        </article>
      @endforeach
    </div>
  </section>

  {{-- EQUIPO --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-2xl lg:text-3xl font-semibold reveal">Nuestro equipo</h2>

    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ([
        ['name'=>'Lucas','bio'=>'Fade & clásicos','img'=>'https://images.unsplash.com/photo-1544716278-f65d256e0d98?q=80&w=800&auto=format&fit=crop'],
        ['name'=>'Mati','bio'=>'Barbas & tijera','img'=>'https://images.unsplash.com/photo-1559599189-95f32f16cd7b?q=80&w=800&auto=format&fit=crop'],
        ['name'=>'Invitado','bio'=>'Cortes modernos','img'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop'],
      ] as $b)
        <div class="reveal rounded-2xl overflow-hidden border bg-white shadow-sm
                    hover:shadow-elev hover:-translate-y-1 transition">
          <img src="{{ $b['img'] }}" alt="{{ $b['name'] }}" class="h-72 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold">{{ $b['name'] }}</h3>
            <p class="text-sm text-slate-600">{{ $b['bio'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- SOBRE + MAPA --}}
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div class="reveal">
        <h2 class="text-2xl lg:text-3xl font-semibold">Sobre Style Owners</h2>
        <p class="mt-3 text-slate-600">
          Atención cuidada, productos de calidad y un espacio cómodo. Trabajamos con turnos para garantizar tu lugar.
        </p>
        <ul class="mt-4 space-y-2 text-slate-700">
          <li>• Turnos online confirmados por email</li>
          <li>• Sin pagos online (pagás en el local)</li>
          <li>• Medidas anti–turnos falsos</li>
        </ul>
      </div>

      <div class="reveal rounded-2xl overflow-hidden border shadow-elev">
        <iframe class="w-full h-80"
                src="https://maps.google.com/maps?q=Av.%20Daniel%20Leon%20Borja%20y%20Brasil%2C%20Riobamba%2C%20Ecuador&t=&z=16&ie=UTF8&iwloc=&output=embed"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  {{-- CTA final --}}
  <section class="py-14 bg-white border-t">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
      <h3 class="text-2xl font-semibold">¿Listo para tu próximo corte?</h3>
      <a href="{{ route('reservar') }}"
         class="inline-block mt-5 px-6 py-3 rounded-2xl
                bg-gradient-to-b from-brand to-brand-700 text-black
                hover:from-brand-600 hover:to-brand-700 transition shadow-elev">
        Reservar ahora
      </a>
    </div>
  </section>
</x-guest-layout>
