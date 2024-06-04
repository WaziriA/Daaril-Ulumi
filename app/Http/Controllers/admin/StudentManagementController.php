<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentManagementController extends Controller
{
    //
    public function index(){
        // Fetch users from the database
$users = \App\Models\User::where('is_admin', 0)
                              ->orderBy('name', 'asc')
                              ->paginate(10);

// Pass users to the view
return view('admin.students', ['users' => $users]);

       
    }

    public function view(User $user)
    {
        return view('admin.student-view', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.student_edit', compact('user'));
    }

    public function delete(User $user)
    {
        // Implement delete logic
    }

    public function destroy(User $user)
{
    $user->delete();
    return redirect()->back()->with('success', 'User deleted successfully!');
}


}

