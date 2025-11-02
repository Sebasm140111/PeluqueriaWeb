<x-guest-layout>
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="bg-white border rounded-2xl shadow-elev p-6">
      <h1 class="text-2xl font-bold">Crear cuenta</h1>
      <p class="text-sm text-slate-600 mb-6">Registrate para reservar turnos.</p>

      <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
          <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
          <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between pt-2">
          <a href="{{ route('login') }}" class="text-sm text-slate-600 hover:text-slate-900">
            {{ __('Already registered?') }}
          </a>

          <button
            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-black hover:bg-brand-600 transition shadow-elev">
            {{ __('Register') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
