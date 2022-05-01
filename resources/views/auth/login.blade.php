@extends('layouts.dash-asserts')

@section('body-class')
    login-page
@endsection

@section('body-style')
    min-height: 466px;
@endsection

@section('content-assert')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{route('index')}}" class="h1"><b>Admin</b>Panel</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Seansni boshlash uchun tizimga kiring</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" id="login" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus placeholder="Login">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('login')
                            <span id="login-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Parol">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span id="login-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Meni eslab qoling
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Kirish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

