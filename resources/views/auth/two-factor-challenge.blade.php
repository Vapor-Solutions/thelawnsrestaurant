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


                        <div x-data="{ recovery: false }">
                            <div class="mb-3" x-show="! recovery">
                                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </div>

                            <div class="mb-3" x-show="recovery">
                                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                            </div>

                            <x-jet-validation-errors class="mb-3" />

                            <form method="POST" action="{{ route('two-factor.login') }}">
                                @csrf

                                <div class="mb-3" x-show="! recovery">
                                    <x-jet-label value="{{ __('Code') }}" />
                                    <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text"
                                        inputmode="numeric" name="code" autofocus x-ref="code"
                                        autocomplete="one-time-code" />
                                    <x-jet-input-error for="code"></x-jet-input-error>
                                </div>

                                <div class="mb-3" x-show="recovery">
                                    <x-jet-label value="{{ __('Recovery Code') }}" />
                                    <x-jet-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}"
                                        type="text" name="recovery_code" x-ref="recovery_code"
                                        autocomplete="one-time-code" />
                                    <x-jet-input-error for="recovery_code"></x-jet-input-error>
                                </div>

                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-outline-secondary" x-show="! recovery"
                                        x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                                        {{ __('Use a recovery code') }}
                                    </button>

                                    <button type="button" class="btn btn-outline-secondary" x-show="recovery"
                                        x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                                        {{ __('Use an authentication code') }}
                                    </button>

                                    <x-jet-button>
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
