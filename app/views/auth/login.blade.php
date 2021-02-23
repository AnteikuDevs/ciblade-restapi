@extends('layouts.default_main')

@section('body')

<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card card-login text-white">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{ asset() }}images/logo.png" alt="" class="img-fluid mb-4 w-75">
						{{-- <h4 class="mb-3 f-w-400 text-white">Masuk</h4> --}}
						{{-- <form action="{{ base_url('') }}"> --}}
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">Username</label>
								<input type="text" class="form-control" id="Username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" id="Password" placeholder="">
							</div>
							<div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Ingat saya.</label>
							</div>
							<a href="{{ base_url('dashboard') }}" class="btn btn-block btn-default mb-4">Masuk</a>
						{{-- </form> --}}
						<p class="mb-2 text-muted">Lupa password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						{{-- <p class="mb-0 text-muted">Belum punya akun? <a href="auth-signup.html" class="f-w-400">Daftar</a></p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection