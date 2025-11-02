<x-guest-layout>
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8 pt-10">
    <div class="bg-white border rounded-2xl shadow-elev p-6">
      <h1 class="text-2xl font-bold">Iniciar sesión</h1>
      <p class="text-sm text-slate-600 mb-6">Accede para reservar tus turnos.</p>

      <!-- Session Status -->
      @if (session('status'))
        <div class="mb-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-xl p-3">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
            autocomplete="username"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
            class="mt-1 block w-full rounded-xl border-slate-300 focus:border-brand focus:ring-brand" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
          <label for="remember_me" class="inline-flex items-center gap-2 text-sm">
            <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-black focus:ring-brand"
                   name="remember">
            <span>{{ __('Remember me') }}</span>
          </label>

          @if (Route::has('password.request'))
            <a class="text-sm text-slate-600 hover:text-slate-900" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
        </div>

        <div class="flex items-center justify-between pt-2">
          <a href="{{ route('register') }}" class="text-sm text-slate-600 hover:text-slate-900">
            {{ __('Create account') }}
          </a>

          <button
            class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-brand text-black hover:bg-brand-600 transition shadow-elev">
            {{ __('Log in') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
