<x-guest-layout>
    {{-- Logo at the top (from storage/images/navbarlogo) --}}
    <div class="flex justify-center mb-6">
        <img
            src="{{ asset('storage/images/navbarlogo.png') }}"
            alt="Navbar Logo"
            class="h-32 w-auto"
        >
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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

        <!-- Existing bottom actions -->
        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <!-- <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button> -->
        </div>

        <!-- Temporary role selection UI (non-functional) -->
        <div class="mt-6 border-t pt-4">
            <p class="text-sm text-gray-700 mb-3">Register as:</p>
            <div class="flex flex-col sm:flex-row gap-3">
                <button
                    type="button"
                    class="w-full inline-flex justify-center items-center px-4 py-2 border border-indigo-500 text-indigo-600 text-sm font-semibold rounded-md hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Register as Tenant
                </button>

                <button
                    type="button"
                    class="w-full inline-flex justify-center items-center px-4 py-2 border border-emerald-500 text-emerald-600 text-sm font-semibold rounded-md hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500"
                >
                    Register as Landlord
                </button>
            </div>
        </div>
    </form>
</x-guest-layout>