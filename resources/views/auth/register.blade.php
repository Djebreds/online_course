@extends('auth.layouts.main')
@section('title', 'Register | Basicshool')
@section('content')

                <!-- Title -->
                <h1 class="fs-2">🎓 Here to get started</h1>
                <p class="lead mb-4">Please register to learn many things with us.</p>

                <!-- Alert -->
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
            @endif

            <!-- Form START -->
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Full Name -->
                    <div class="row gx-2">
                        <div class="mb-4">
                            <label for="full_name" class="form-label">Full name</label>
                            <div class="input-group input-group-lg">
                                                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                            class="fa fa-user"></i></span>
                                <input type="text" name="full_name"
                                       class="form-control border-0 bg-light rounded-end ps-1 @error('full_name') is-invalid @enderror"
                                       placeholder="Full name" id="full_name" value="{{ old('full_name') }}"
                                       autofocus required>
                                @error('full_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address </label>
                        <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                            <input type="email" name="email"
                                   class="form-control border-0 bg-light rounded-end ps-1 @error('email') is-invalid @enderror"
                                   placeholder="E-mail" id="email" value="{{ old('email') }}"
                                   autocomplete="email" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="new-password" class="form-label">Password</label>
                        <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                            <input type="password" name="password"
                                   class="form-control border-0 bg-light ps-1 @error('password') is-invalid @enderror"
                                   placeholder="password" id="new-password" autocomplete="new-password"
                                   required>
                            <span class="input-group-text bg-light rounded-end border-0 text-secondary px-3"><i
                                        class="fas fa-eye-slash" id="togglePassword"></i></span>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- Confirmation Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                            <input type="password" name="password_confirmation"
                                   class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror"
                                   placeholder="Password confirmation" id="password_confirmation"
                                   autocomplete="new-password" required>
                        </div>
                    </div>

                    <!-- Term of service -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"
                                   id="term-service" required>
                            <label class="form-check-label" for="term-service">By registering, you agree to
                                our<a
                                        href="#"> term of service</a>, and<a href="#"> privacy
                                    policy</a></label>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="align-items-center mt-0">
                        <div class="d-grid">
                            <button class="btn btn-primary mb-0 disabled" id="register" type="submit">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Form END -->

                <!-- Social buttons and divider -->
                <div class="row">
                    <!-- Divider with text -->
                    <div class="position-relative my-3">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                            Or</p>
                    </div>
                    <!-- Social btn -->
                    <div class="d-grid">
                        <a href="/oauth/google" class="btn bg-google mb-2 mb-xxl-0 disabled"
                           id="google-register"><i
                                    class="fab fa-fw fa-google text-white me-2"></i>Register
                            with
                            <b>Google</b></a>
                    </div>
                </div>
                <!-- Sign up link -->
                <div class="mt-4 text-center">
                                <span>Already have an account? <a href="{{ route('login') }}"
                                    >Login</a></span>
                </div>

@endsection
@push('custom-script')
    <script src="{{ asset('assets/js/page/register.js') }}"></script>
@endpush

