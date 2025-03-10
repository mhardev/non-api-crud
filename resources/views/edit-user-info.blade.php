@extends('layouts.admin')

@section('title', 'Edit User Information')

@section('content')
    <h1 class="mt-4">Edit User Information</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('user-info') }}">User Information</a></li>
        <li class="breadcrumb-item active">Edit User Information</li>
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
                <h3 class="mb-0">Edit user info</h3>
                <hr />
                <a href="{{ route('user-info') }}" class="btn btn-success"><i class="fas fa-arrow-left"
                        aria-hidden="true"></i>&nbsp;Go Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('update-user-info', $user_info->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name"
                            value="{{ $user_info->first_name }}">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                            value="{{ $user_info->last_name }}">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" name="phone_number" class="form-control" placeholder="Phone Number"
                            value="{{ $user_info->phone_number }}">
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ $user_info->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <select class="form-select" aria-label="sex" name="sex">
                            <option selected disabled>Select</option>
                            <option value="Male" {{ $user_info->sex == 'Male' ? 'selected' : '' }}>Male
                            </option>
                            <option value="Female" {{ $user_info->sex == 'Female' ? 'selected' : '' }}>Female
                            </option>
                        </select>
                        @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth"
                            value="{{ $user_info->date_of_birth }}">
                        @error('date_of_birth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="address" class="form-control" placeholder="Address"
                            value="{{ $user_info->address }}">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" name="city" class="form-control" placeholder="City"
                            value="{{ $user_info->city }}">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
