@extends('layouts.admin')

@section('title', 'User Information')

@section('content')
    <h1 class="mt-4">User Information</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">User Information</li>
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
                <h3 class="mb-0">User Information Table</h3>
                <hr />
                <a href="{{ route('create-user-info') }}" class="btn btn-success"><i class="fas fa-plus"
                        aria-hidden="true"></i>&nbsp;Add user info</a>
            </div>
        </div>
        <div class="card-body">
            {{-- User Information Table --}}
            <table id="userInfoTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="align-middle">#</th>
                        <th scope="col" class="align-middle">Name</th>
                        <th scope="col" class="align-middle">Sex</th>
                        <th scope="col" class="align-middle">Date of birth</th>
                        <th scope="col" class="align-middle">Phone number</th>
                        <th scope="col" class="align-middle">Email</th>
                        <th scope="col" class="align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user_info as $user)
                        <tr class="px-auto">
                            <th scope="row" class="align-middle">{{ $user->id }}</th>
                            <td class="align-middle">{{ $user->first_name }}&nbsp;{{ $user->last_name }}
                            </td>
                            <td class="align-middle">{{ $user->sex }}</td>
                            <td class="align-middle">{{ $user->date_of_birth }}</td>
                            <td class="align-middle">{{ $user->phone_number }}</td>
                            <td class="align-middle">{{ $user->email }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="user-info">
                                    <a href="{{ route('show-user-info', $user->id) }}" type="button"
                                        class="btn btn-info mx-1 rounded-2">Info</a>
                                    <a href="{{ route('edit-user-info', $user->id) }}" type="button"
                                        class="btn btn-primary mx-1 rounded-2">Edit</a>
                                    <form action="{{ route('delete-user-info', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mx-1 rounded-2">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
