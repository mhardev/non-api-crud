@extends('layouts.admin')

@section('title', 'User Information Details')

@section('content')
    <h1 class="mt-4">User Information Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('user-info') }}">User Information</a></li>
        <li class="breadcrumb-item active">User Information Details</li>
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
                <h3 class="mb-0">User info details</h3>
                <hr />
                <a href="{{ route('user-info') }}" class="btn btn-success"><i class="fas fa-arrow-left"
                        aria-hidden="true"></i>&nbsp;Go Back</a>
            </div>
        </div>
        <div class="card-body">
            <form>
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="first_name" class="form-control" value="{{ $user_info->first_name }}"
                            readonly>
                    </div>
                    <div class="col">
                        <input type="text" name="last_name" class="form-control" value="{{ $user_info->last_name }}"
                            readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" name="phone_number" class="form-control"
                            value="{{ $user_info->phone_number }}" readonly>
                    </div>
                    <div class="col">
                        <input type="email" name="email" class="form-control" value="{{ $user_info->email }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="sex" class="form-control" value="{{ $user_info->sex }}" readonly>
                    </div>
                    <div class="col">
                        <input type="text" name="date_of_birth" class="form-control"
                            value="{{ $user_info->date_of_birth }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="address" class="form-control" value="{{ $user_info->address }}"
                            readonly>
                    </div>
                    <div class="col">
                        <input type="text" name="city" class="form-control" value="{{ $user_info->city }}" readonly>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
