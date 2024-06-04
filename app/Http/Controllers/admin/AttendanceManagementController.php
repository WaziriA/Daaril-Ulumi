<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Attendance;
use App\Models\User;
use Carbon\Carbon;
use session;
use Illuminate\Support\Facades\DB;

class AttendanceManagementController extends Controller
{
    //
    public function index()
    {
        // Get students (users who are not admins)
        $users = \App\Models\User::where('is_admin', 0)->get();
        
        // Pass students data to the view
        return view('admin.attendance_view', ['users' => $users]);
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'date' => 'required||date_format:Y-m-d',
            'status' => 'required|array',
            'status.*' => 'required|in:present,absent,permitted' // Ensure status array is present and each value is valid
        ]);
    
        // Check if attendance already recorded for the given date
        $attendanceDate = Carbon::parse($request->date);
        $existingAttendance = Attendance::whereDate('date', $attendanceDate)->get();

    
        // Define the maximum allowed attendances per user based on the day of the week
        $dayOfWeek = $attendanceDate->dayOfWeek;
        if ($dayOfWeek === Carbon::SATURDAY || $dayOfWeek === Carbon::SUNDAY) {
            $maxAllowedAttendances = 4; // Maximum number of attendances per user on weekends
        } elseif ($dayOfWeek === Carbon::MONDAY || $dayOfWeek === Carbon::TUESDAY || $dayOfWeek === Carbon::WEDNESDAY) {
            $maxAllowedAttendances = 2; // Maximum number of attendances per user on Mondays, Tuesdays, and Wednesdays
        } else {
            // Don't allow attendance on Thursdays and Fridays
            return redirect()->back()->with('error', 'Attendance not allowed on Thursdays and Fridays.');
        }
    
        
        
        $attendanceCountPerUser = [];// Create an empty array to store the number of attendances for each user
        // Count the number of existing attendances for each user
        // Count the number of existing attendances for each user
        foreach ($existingAttendance as $attendance) {
            $existingUserId = $attendance->user_id;
            // Initialize count to 0 for each user in every loop iteration
            $attendanceCountPerUser[$existingUserId] = isset($attendanceCountPerUser[$existingUserId]) ? $attendanceCountPerUser[$existingUserId] : 0;
            $attendanceCountPerUser[$existingUserId]++; // Increment count for this attendance
          }
           
      
     // Check if existing attendances + current attendance exceed the maximum allowed
    foreach ($request->status as $userId => $status) {
        if (isset($attendanceCountPerUser[$userId])) {
            $attendanceCountPerUser[$userId]++;
        } else {
            $attendanceCountPerUser[$userId] = 1;
        }

        if ($attendanceCountPerUser[$userId] > $maxAllowedAttendances) {
            // Return an error message indicating that the maximum number of attendances has been reached for a user
            return redirect()->back()->with('error', 'Maximum number of attendances reached for a user.');
        }
    }
      

        
    
        // Create attendance records
        try {
            foreach ($request->status as $userId => $status) {
                Attendance::create([
                    'user_id' => $userId,
                    'date' => $request->date,
                    'status' => $status
                ]);
            }
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Attendance recorded successfully.');
        } catch (\Exception $e) {
            // If an error occurs during attendance creation, redirect back with error message
            return redirect()->back()->with('error', 'Failed to record attendance. Please try again later.');
        }
    }
    

    
    

    
    


public function getAttendance(Request $request)
{
    // Get students (users who are not admins)
    $users = \App\Models\User::where('is_admin', 0)->get();

    $query = Attendance::query();

    $attendances = Attendance::when($request->has('search'), function ($query) use ($request) {
        $searchMonth = Carbon::parse($request->get('search'));
        $query->whereYear('date', $searchMonth->format('Y'))
              ->whereMonth('date', $searchMonth->format('m'));
    })->orderBy('created_at', 'DESC')->get();

   

    return view('admin.attendance_view', [
        'users' => $users,
        'attendances' => $attendances
    ]);
}





public function fetchUsers(Request $request)
{
    $class = $request->get('class');
    $users = DB::table('users')->where('status', $class)->where('is_admin', 0)->get(['id', 'name']);
    return response()->json(['users' => $users]);
}


}