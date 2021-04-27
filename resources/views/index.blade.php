@extends('layouts/app')

@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block"
                                     style="background-image: url('{{asset('images/pr.png')}}');"></div>
                                <div class="col-lg-4">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Warehouse Layout Login</h1>
                                        </div>

                                        <div class="form-group">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary btn-lg">
                                            {{ __('Login') }}
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>

                <div class="text-center">
                    <a class="small" href="#">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                </div>
                <form id="demo" name="demo" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center">
                        <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror"
                               name="email" required value="test@test.com">
                        <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror"
                               name="password" required value="1234567890">
                        <button type="submit" class="btn btn-outline-primary btn-xs">
                            {{ __('Demo Account') }}

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
