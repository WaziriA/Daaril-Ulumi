<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StudentProfileController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('student.student_profile', compact('user'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'physical_address' => 'nullable|string|max:255',
            'phone_no' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'password' => 'nullable|confirmed|min:8',
        ]);

        $user = Auth::user();

        // Check if the provided current password matches the user's actual password
        if (!empty($request->current_password) && !Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->physical_address = $request->physical_address;
        $user->phone_no = $request->phone_no;
        $user->date_of_birth = $request->date_of_birth;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->image = 'images/'.$imageName;
        }

        // Handle password update
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        try {
            $user->save();
            return redirect()->back()->with('success', 'Profile updated successfully.');
          } catch (\Exception $e) {
            // In case of errors, redirect back with error message
            return redirect()->back()->with('error', 'The details are not updated, please try again.');
          }
    }
}
