<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="hidden" name="id" value="{{$user->id ?? ''}}">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name ?? NULL)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Login Email Address -->
        <div class="mt-4">
            <x-input-label for="login_email" :value="__('Login Email')" />
            <x-text-input id="login_email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email ?? NULL)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Transection Email Address -->
        <div class="mt-4">
            <x-input-label for="mail_username" :value="__('Transectional Email')" />
            <x-text-input id="mail_username" class="block mt-1 w-full" type="email" name="mail_username" :value="old('mail_username', $user->mail_username ?? NULL)" required autocomplete="mail_username" />
            <x-input-error :messages="$errors->get('mail_username')" class="mt-2" />
        </div>

        <!-- Mail Host -->
        <div class="mt-4">
            <x-input-label for="mail_host" :value="__('Mail Host')" />
            <x-text-input id="mail_host" class="block mt-1 w-full" type="text" name="mail_host" :value="old('mail_host', $user->mail_host ?? NULL)" required autocomplete="mail_host" />
            <x-input-error :messages="$errors->get('mail_host')" class="mt-2" />
        </div>

        <!-- Mail Port-->
        <div class="mt-4">
            <x-input-label for="mail_port" :value="__('Mail Port')" />
            <x-text-input id="mail_port" class="block mt-1 w-full" type="number" name="mail_port" :value="old('mail_port', $user->mail_port ?? NULL)" required autocomplete="mail_port" />
            <x-input-error :messages="$errors->get('mail_port')" class="mt-2" />
        </div>

        <!-- Mail Password-->
        <div class="mt-4">
            <x-input-label for="mail_password" :value="__('Mail Password')" />
            <x-text-input id="mail_password" class="block mt-1 w-full" type="text" name="mail_password" :value="old('mail_password', $user->mail_password ?? NULL)" required autocomplete="mail_password" />
            <x-input-error :messages="$errors->get('mail_password')" class="mt-2" />
        </div>

        <!-- mail encryption -->
        <div class="mt-4">
            <x-input-label for="mail_encryption" :value="__('Mail Encryption')" />
            <select id="mail_encryption" name="mail_encryption" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="ssl" @if(old('mail_encryption', $user->mail_encryption ?? '') == 'ssl') selected @endif>SSL</option>
                <option value="tsl" @if(old('mail_encryption', $user->mail_encryption ?? '') == 'tsl') selected @endif>TSL</option>
            </select>
        </div>


        <!--Account Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Account Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="/users" class="py-1 px-2 text-white rounded border border-black bg-warning ml-4">
                {{ __('Cancel') }}
            </a>

            <x-primary-button class=" btn  ml-4 text-white ">
                {{ __('Create New Client') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>