<div class="p-8">
    <form wire:submit.prevent="save" class="grid md:grid-cols-2 gap-2">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" wire:model.lazy="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-inputs.maskable wire:model.lazy="cpf" mask="###.###.###-##" label="CPF" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" wire:model.lazy="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" wire:model.lazy="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" wire:model.lazy="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Birth Date')" />
            <x-text-input id="birthdate" wire:model.lazy="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-inputs.maskable mask="##.###-###" label="CEP" id="cep" wire:model.defer="cep" wire:change="getCep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
        </div>

        <div class="mt-4">
            <x-input-label for="address_street" :value="__('Address Street')" />
            <x-text-input id="address_street" wire:model.lazy="address_street" class="block mt-1 w-full" type="text" name="address_street" :value="old('address_street')" required />
            <x-input-error :messages="$errors->get('address_street')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address_number" :value="__('Address Number')" />
            <x-text-input id="address_number" wire:model.lazy="address_number" class="block mt-1 w-full" type="text" name="address_number" :value="old('address_number')" required />
            <x-input-error :messages="$errors->get('address_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address_complement" :value="__('Address Complement')" />
            <x-text-input id="address_complement" wire:model.lazy="address_complement" class="block mt-1 w-full" type="text" name="address_complement" :value="old('address_complement')" />
            <x-input-error :messages="$errors->get('address_complement')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address_district" :value="__('Address District')" />
            <x-text-input id="address_district" wire:model.lazy="address_district" class="block mt-1 w-full" type="text" name="address_district" :value="old('address_district')" required />
            <x-input-error :messages="$errors->get('address_district')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address_city" :value="__('Address City')" />
            <x-text-input id="address_city" wire:model.lazy="address_city" class="block mt-1 w-full" type="text" name="address_city" :value="old('address_city')" required />
            <x-input-error :messages="$errors->get('address_city')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address_state" :value="__('Address State')" />
            <x-text-input id="address_state" wire:model.lazy="address_state" class="block mt-1 w-full" type="text" name="address_state" :value="old('address_state')" required />
            <x-input-error :messages="$errors->get('address_state')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
