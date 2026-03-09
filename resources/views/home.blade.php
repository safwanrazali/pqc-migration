@extends('layouts.app-layout')

@section('content')
    <section class="py-5 d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h4 class="mb-0">Sign In</h4>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-info" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="/login" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus placeholder="name@example.com">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" required autocomplete="current-password"
                                            placeholder="••••••••">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember"
                                            name="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <a href="/forgot-password" class="link-accent">Forgot password?</a>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-accent">
                                        <i class="bi bi-box-arrow-in-right me-1"></i>
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
