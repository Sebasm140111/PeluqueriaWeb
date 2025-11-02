<x-guest-layout>
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="bg-white border rounded-2xl shadow-elev p-6">
      <h1 class="text-2xl font-bold">¿Olvidaste tu contraseña?</h1>
      <p class="text-sm text-slate-600 mb-6">
        Dejanos tu email y te enviaremos un enlace para restablecerla.
      </p>

      @if (session('status'))
        <div class="mb-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-xl p-3">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end pt-2">
          <button
            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-black hover:bg-brand-600 transition shadow-elev">
            {{ __('Email Password Reset Link') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
