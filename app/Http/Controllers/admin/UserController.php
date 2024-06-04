<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin.users.index', compact('users'));
    }

    public function view(User $user)
    {
        return view('admin.users.view', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function delete(User $user)
    {
        // Implement delete logic
    }

}
