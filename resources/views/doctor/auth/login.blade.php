@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="p-4">
                <div class="card overflow-hidden mt-2">
                    <div class="text-center bg-primary position-relative">
                        <div class="img-overlay"></div>
                        <div class="position-relative pt-4 py-5 mb-1">
                            <h5 class="text-white">Staff Login</h5>
                        </div>
                    </div>
                    <div class="card-body position-relative">
                        <div class="p-4 mt-n5 bg-white card rounded pb-0">

                            <form method="POST" action="{{ route('doctor.login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="fs-14 mb-2" for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label class="fs-14 mb-2" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            @if (Route::has('password.request'))
                                                <a class="text-muted fs-13" href="{{ route('password.request') }}">
                                                    <i class="mdi mdi-lock me-1"></i> {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary w-100" type="submit" id="btnLogIn" >Log in</button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="text-center plan-line"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center text-white-50">
                    @if (Route::has('doctor.register'))
                    <p>Don't have an account ? <a href="{{route('doctor.register')}}" class="fw-bold text-white">
                            {{ __('Register') }}</a></p>
                    @endif
                    <p>©<script>document.write(new Date().getFullYear())</script> YPOS. Created with <i class="mdi mdi-heart text-danger"></i> by YPOS</p>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
