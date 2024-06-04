<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        // Get students (users who are not admins)
        $students = User::where('is_admin', false)->get();
        
        // Pass students data to the view
        return view('admin.attendance.index', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'date' => 'required|date',
            'status.*' => 'required|in:present,absent,permitted'
        ]);

        // Create attendance records
        foreach ($request->status as $userId => $status) {
            Attendance::create([
                'user_id' => $userId,
                'date' => $request->date,
                'status' => $status
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Attendance recorded successfully.');
    }
}
