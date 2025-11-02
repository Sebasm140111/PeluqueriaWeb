<x-guest-layout>
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="bg-white border rounded-2xl shadow-elev p-6">
      <h1 class="text-2xl font-bold">Verificá tu email</h1>
      <p class="text-sm text-slate-600">
        Te enviamos un enlace de verificación. Si no lo recibiste, podés pedir otro.
      </p>

      @if (session('status') == 'verification-link-sent')
        <div class="mt-4 mb-2 text-sm text-green-700 bg-green-50 border border-green-200 rounded-xl p-3">
          {{ __('A new verification link has been sent to your email address.') }}
        </div>
      @endif

      <div class="mt-6 flex items-center justify-between gap-3">
        <form method="POST" action="{{ route('verification.send') }}">
          @csrf
          <button
            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-black hover:bg-brand-600 transition shadow-elev">
            {{ __('Resend Verification Email') }}
          </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="text-sm px-4 py-2 rounded-xl border hover:bg-white transition">
            {{ __('Log Out') }}
          </button>
        </form>
      </div>
    </div>
  </div>
</x-guest-layout>
