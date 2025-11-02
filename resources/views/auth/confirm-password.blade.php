<x-guest-layout>
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="bg-white border rounded-2xl shadow-elev p-6">
      <h1 class="text-2xl font-bold">Confirmá tu contraseña</h1>
      <p class="text-sm text-slate-600 mb-6">
        Esta es un paso de seguridad adicional antes de continuar.
      </p>

      <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
        @csrf

        <div>
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end pt-2">
          <button
            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-black hover:bg-brand-600 transition shadow-elev">
            {{ __('Confirm') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
