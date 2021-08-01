@extends('layouts.app')

@section('content')

<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
			<form class="form-detail mb-3" method="POST" action="{{ route('register') }}">
              @csrf

				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text  @error('name') is-invalid @enderror" placeholder="Votre Nom" value="{{ old('name') }}" autocomplete="name" autofocus required>
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
					<div class="form-row">
						<input type="text" name="email" id="your-email" class="input-text @error('email') is-invalid @enderror" placeholder="Votre Email" required autocomplete="email" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" placeholder=" Password" required autocomplete="new-password">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
					<div class="form-row">
						<input type="password" name="password_confirmation" id="comfirm-password" class="input-text @error('password_confirmation') is-invalid @enderror" placeholder="Comfirm Password" required autocomplete="new-password">
                        @error('password_confirmation')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
@endsection
