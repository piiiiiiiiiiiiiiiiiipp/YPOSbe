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
                            <h5 class="text-white">Welcome!</h5>
                            <p class="text-white-50 mb-0 fs-14">{{ __('Register') }}For a New Account.</p>
                        </div>
                    </div>
                    <div class="card-body position-relative">
                        <div class="p-4 mt-n5 bg-white card rounded pb-0">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label for="name" lass="fs-14 mb-2">{{ __('Name') }}</label>

                                <div class="mb-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="fs-14 mb-2" for="email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="fs-14 mb-2" for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="fs-14 mb-2" for="password">{{ __('Confirm password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary w-100" type="submit"  id="submitSignUp" >
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center text-white-50">
                    @if (Route::has('login'))
                    <p>Have account already? <a href="{{route('login')}}" class="fw-bold text-white"> {{ __('Log in') }}</a>
                    </p>
                    @endif
                    <p>©<script>document.write(new Date().getFullYear())</script> YPOS. Created with <i class="mdi mdi-heart text-danger"></i> by YPOS.</p>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endsection
