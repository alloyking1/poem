@extends('layouts.app')

@section('content')
<div class="container">
    <!-- CONTENT
    ================================================== -->
    <section class="">
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
          <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">

            <!-- Image -->
            <img src="./css/custom_assets/img/illustration-2.png" alt="..." class="img-fluid">

          </div>
          <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
            
            <!-- Heading -->
            <h1 class="mb-0 font-weight-bold text-center">
              Sign in
            </h1>

            <!-- Text -->
            <p class="mb-6 text-center text-muted">
              Enter your login details to continue.
            </p>

            <!-- Form -->
            <form class="mb-6" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                <div class="form-group">
                    <label for="email">
                    Email Address
                    </label>
                    <input id="email" placeholder="Enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                    <label for="password">
                    Password
                    </label>

                    <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                    Sign in
                </button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>

            <!-- Text -->
            <p class="mb-0 font-size-sm text-center text-muted">
              Don't have an account yet? <a href="/register">Sign up</a>.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

</div>
@endsection
