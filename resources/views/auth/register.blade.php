<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('First Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Last Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('NIC') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Genter') }}" />

                <select name="" id="" class="block mt-1 w-full">
                    <option value="male" class="block mt-1 w-full">Male</option>
                    <option value="female" class="block mt-1 w-full">Female</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('MOH') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="text" name="moh" required  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mobile') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="text" name="mobile" required  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('District') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="text" name="district" required  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="date" name="dob" required  />
            </div>

            <div class="col-lg-6 col-12">
                <x-jet-label for="password" value="{{ __('User Name') }}" />
                <x-jet-input type="text" name="user_name" class="block mt-1 w-full"  required  />
                <x-jet-input type="hidden" name="role" value="people"  class="block mt-1 w-full"    />

            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
