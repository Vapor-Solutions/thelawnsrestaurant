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


                        <form class="theme-form login-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Name') }}" />

                                <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-jet-input-error for="name"></x-jet-input-error>
                            </div>

                            <div class="mb-3">
                                <x-jet-label value="{{ __('Email') }}" />

                                <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email')" required />
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

                                <x-jet-input class="form-control" type="password" name="password_confirmation"
                                    required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <x-jet-checkbox id="terms" name="terms" />
                                        <label class="custom-control-label" for="terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-0">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-jet-button>
                                        {{ __('Register') }}
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
