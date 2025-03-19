@extends('Public.layouts.context')
@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="villoz-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Register</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Register</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="login-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center mb-4">Register</h3>
                        <form action="{{ route('register-user') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="User Name *" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email address *" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password *" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password *" required>
                            </div>                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Register
                                </button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="text-decoration-none">Already registered? Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection