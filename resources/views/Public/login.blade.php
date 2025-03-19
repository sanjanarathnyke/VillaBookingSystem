@extends('Public.layouts.context')
@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="villoz-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Login</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Login</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="login-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center mb-4">Login</h3>
                        <form action="{{ route('login-user') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password *" required>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="text-decoration-none">Don't have an account? Register here</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection