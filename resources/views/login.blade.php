@extends('navbar')

@section('title','Login')

@section('content')
    <div class="container justify-content-center mt-2">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card login">
            <div class="card-header d-flex justify-content-center"><span>Login</span></div>
            <div class="card-body mt-3">
                <form class="justify-content-center" action="/login" method="post">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Your Password" required>
                        @error('password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">Login</button>
                    </div>
                    <div class="mt-3">
                        Don't have an account? <a href="/register">Register Here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection