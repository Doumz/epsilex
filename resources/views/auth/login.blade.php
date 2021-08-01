@extends('layouts.app')

@section('content')
<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100">
		  <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
			   <span class="login100-form-logo">
			     <i class="zmdi zmdi-landscape"></i>
		    	</span>

				<span class="login100-form-title p-b-34 p-t-27">
					Log in
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Enter username">
    			   <input class="input100 @error('email') is-invalid @enderror" id="email" type="email"  name="email"  required autocomplete="email" autofocus placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    @error('email')
                       <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="contact100-form-checkbox">
				  <input class="input-checkbox100"  type="checkbox"   name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
				   <label class="label-checkbox100" for="ckb1">
						Remember me
					</label>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Login
					</button>
				</div>
                @if (Route::has('password.request'))
		  		  <div class="text-center p-t-90">
					<a class="txt1" href="{{ route('password.request') }}">
						Forgot Password?
					</a>
                  </div>
               @endif
			</form>
			</div>
		</div>
	</div>
@endsection
