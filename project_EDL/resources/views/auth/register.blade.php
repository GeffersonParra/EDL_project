<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        
        <!-- Id -->
        <div>
            <x-input-label for="id" :value="__('Id')" />
            <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus autocomplete="id" />
            <x-input-error :messages="$errors->get('id')" class="mt-2" />
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombres')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="lastname" :value="__('Apellidos')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="idtype" :value="__('Tipo de identificación')" />
            <x-text-input id="idtype" class="block mt-1 w-full" type="text" name="idtype" list="tipos_identificacion" :value="old('idtype')" required autofocus autocomplete="idtype" />
            <datalist id="tipos_identificacion">
                <option value="CC">
                <option value="CE">
            </datalist>
            <x-input-error :messages="$errors->get('idtype')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for="occupation" :value="__('Cargo')" />
            <x-text-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation')" required autofocus autocomplete="occupation" />
            <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="telephone" :value="__('Celular')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Dirección')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="birth" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birth" class="block mt-1 w-full" type="date" name="birth" :value="old('birth')" required autofocus autocomplete="birth" />
            <x-input-error :messages="$errors->get('birth')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="inday" :value="__('Fecha de Entrada')" />
            <x-text-input id="inday" class="block mt-1 w-full" type="date" name="inday" :value="old('inday')" required autofocus autocomplete="inday" />
            <x-input-error :messages="$errors->get('inday')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
