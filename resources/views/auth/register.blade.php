<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<div class="navarpages">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="logopages" src="{{ asset('logo/Iran coupon-2.png') }}">
    </a>
</div>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <p class="reglogo" href="/">
                Register in Iran coupon
            </p>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label class="logregform" for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" placeholder="first name & last name" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label class="logregform" for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="test@example.com" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label class="logregform" for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                placeholder="at least 8 character"
                                name="password"
                                required autocomplete="new-password" />
                                <small>must be at least 8 characters.contains digits and chars.</small>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label class="logregform" for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="logregform underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 alreadyreg" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="logregbot ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="divider d-flex align-items-center my-4">
                <br> <hr>
                <p class="text-center fw-bold mx-3 mb-0 text-dark">OR</p>
                <br>
            </div>
            <div>
                <a class="btn btn-primary btn-lg m-5 p-2" style="background-color: red;font-size: small; border-radius:5px; margin:25px;" href="#!"
                    role="button">
                    <i class="bi bi-google"></i>Continue with Google
                </a>
                <a class="btn btn-primary p-2" style="background-color: #55acee;font-size: small; border-radius:5px;" href="#!"
                    role="button">
                    <i class="bi bi-twitter"></i>Continue with Twitter
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
