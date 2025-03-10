@extends('layouts.admin')

@section('title', 'Add User Information')

@section('content')
    <h1 class="mt-4">Add User Information</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('user-info') }}">User Information</a></li>
        <li class="breadcrumb-item active">Add User Information</li>
    </ol>
    @if (session('status'))
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h3 class="mb-0">Add user info</h3>
                <hr />
                <a href="{{ route('user-info') }}" class="btn btn-success"><i class="fas fa-arrow-left"
                        aria-hidden="true"></i>&nbsp;Go Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('save-user-info') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <select class="form-select" aria-label="sex" name="sex">
                            <option selected disabled>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>>
                        </select>
                        @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                        @error('date_of_birth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="city" class="form-control" placeholder="City">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
