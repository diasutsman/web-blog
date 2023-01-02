@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf

                    <div class="form-floating">
                        <input required type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="name" value="{{ old('name') }}" />
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="text" name="username"
                            class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="Username" value="{{ old('username') }}" />
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com" value="{{ old('email') }}" />
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input required type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password"" />
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">
                        Register
                    </button>
                </form>
                <small class="text-center d-block mt-3">Already Registered? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection
