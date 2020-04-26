@extends('welcome')

@section('content')

<div id="register">
    <div class="container">
        <div id="register-row" class="row justify-content-center align-items-center">
            <div id="register-column" class="col-md-6">
                <div id="register-box" class="col-md-12 pt-3">
                    <form id="register-form" class="form" action="" method="post">
                        @csrf
                        
                        <div class="form-group pt-5">
                            <h3 class="text-center text-primary pb-3">Register</h3>
                            <label for="username" class="text-primary">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control @error('email') is-invalid @enderror " required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-primary">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <label for="password-confirm" class="text-primary">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-md" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
