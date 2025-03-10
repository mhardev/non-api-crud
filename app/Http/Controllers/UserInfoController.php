<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoRequest;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    // Calling Index view
    public function index()
    {
        $user_info = UserInfo::paginate('10');
        return view('user-info', compact('user_info'));
    }

    // Calling create view
    public function createUserInfo()
    {
        return view('create-user-info');
    }

    // Save user information
    public function saveUserInfo(UserInfoRequest $request, UserInfo $user_info)
    {
        $user_info->create($request->validated());

        return to_route('user-info')->with('status', 'User information saved successfully.');
    }

    // Show user information
    public function showUserInfo(UserInfo $user_info)
    {
        return view('show-user-info', compact('user_info'));
    }

    // Edit user information
    public function editUserInfo(UserInfo $user_info)
    {
        return view('edit-user-info', compact('user_info'));
    }

    // Update user information
    public function updateUserInfo(UserInfoRequest $request, UserInfo $user_info)
    {
        $user_info->update($request->validated());

        return to_route('user-info')->with('status', 'User information updated successfully.');
    }

    // Delete user information
    public function deleteUserInfo(UserInfo $user_info)
    {
        $user_info->delete();
        return to_route('user-info')->with('status', 'User information deleted successfully.');
    }
}
