@extends('navbar')

@section('title','Profile')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="card profile mb-3">
            <div class="card-header d-flex justify-content-center"><span>Profile</span></div>
            <div class="card-body mt-3">
                <form class="justify-content-center">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="{{ auth()->user()->name }}" disabled>
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="{{ auth()->user()->email }}" disabled>
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Gender</label>
                        <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender" placeholder="{{ auth()->user()->gender }}" disabled>
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Date of Birth</label>
                        <input type="text" name="dateofbirth" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="{{ auth()->user()->dateofbirth }}" disabled>
                    </div>
                    <div class="mb-3 position-relative">
                        <label class="form-label">Country</label>
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country" placeholder="{{ auth()->user()->country }}" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection