@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-large">
<div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
    <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body">
                <center>
                    <h2>Login</h2><br />
                </center>
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <fieldset class="uk-fieldset">

                        <div class="uk-margin">
                            <div class="uk-position-relative">
                                <span class="uk-form-icon ion-android-person"></span>
                                <input name="email" id="email" class="uk-input" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-position-relative">
                                <span class="uk-form-icon ion-locked"></span>
                                <input name="password" id="password" class="uk-input" type="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="uk-margin">
                          <label>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                          </label>
                        </div>
                        <div class="uk-margin">
                            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        </div>

                        <div class="uk-margin">
                            <button type="submit" class="uk-button uk-button-primary">
                                <span class="ion-forward"></span>&nbsp; {{ __('Login') }}
                            </button>
                        </div>

                        <hr />

                        <center>
                            <p>
                                You don't have an account yet?
                            </p>
                            <a href="/register" class="uk-button uk-button-default">
                                <span class="ion-android-person-add"></span>&nbsp; Register
                            </a>
                        </center>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
</div>
</div>
@endsection
