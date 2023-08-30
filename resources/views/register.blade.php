@extends('navbar')

@section('title','Register')

@section('content')   
    <div class="container d-flex justify-content-center mt-5">
        <div class="card register mb-3">
            <div class="card-header d-flex justify-content-center"><span>Register</span></div>
            <div class="card-body mt-3">
                <form class="justify-content-center" action="/register" method="post">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name"required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Your Password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="Re-type Your Password" required value="{{ old('confirm_password') }}">
                        @error('confirm_password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-radio mb-3 position-relative">
                        <label class="form-label">Gender</label>
                        <div class="form-radio-item @error('gender') is-invalid @enderror">
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item @error('gender') is-invalid @enderror">
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                            <span class="check"></span>
                        </div>
                        @error('gender')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dateofbirth" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" required value="{{ old('dateofbirth') }}">
                        @error('dateofbirth')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Country</label>
                        <div>
                            <select class="selectpicker form-control @error('country') is-invalid @enderror" name="country" id="country" required value="{{ old('country') }}">
                                <option selected disabled value="">Choose a country</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="singapore">Singapore</option>
                                <option value="australia">Australia</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="india">India</option>
                            </select>
                            @error('country')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">Register</button>
                    </div>
                    <div class="mt-3">
                        Have an account? <a href="/login">Login Here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection