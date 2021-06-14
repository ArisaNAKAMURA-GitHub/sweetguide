@extends('layouts.header')

@section('content')
<div class="container">
    <h2 class="welcome">ログインページへようこそ！</h2>
    <div class="row justify-content-center all-login">
        <div class="col-md-8">
            <div class="card login-area">
                <div class="card-header login-name">{{ __('登録済みの方ログイン') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row login-asset">
                            <label for="email" class="col-md-4 col-form-label text-md-right email-label">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror email-form" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row login-asset">
                            <label for="password" class="col-md-4 col-form-label text-md-right pass-label">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pass-form" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="login-click">
                                <button type="submit" class="btn btn-primary login-button">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="pass-forget" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れてしまった') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
