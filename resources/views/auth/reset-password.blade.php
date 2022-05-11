<x-guest-layout>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5"><img class="bg-img-cover bg-center" src="/auth/side-image.jpg"
                        alt="looginpage"></div>
                <div class="col-xl-7 p-0">
                    <div class="login-card">
                        <x-jet-validation-errors class="mb-3 rounded-0" />

                        @if (session('status'))
                            <div class="alert alert-success mb-3 rounded-0" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="theme-form login-form" method="POST" action="/reset-password">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Email') }}" />

                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email', $request->email)" required autofocus />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Password') }}" />

                                <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    type="password" name="password" required autocomplete="new-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Confirm Password') }}" />

                                <x-jet-input class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                    type="password" name="password_confirmation" required autocomplete="new-password" />
                                <x-jet-input-error for="password_confirmation"></x-jet-input-error>
                            </div>

                            <div class="mb-0">
                                <div class="d-flex justify-content-end">
                                    <x-jet-button>
                                        {{ __('Reset Password') }}
                                    </x-jet-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
