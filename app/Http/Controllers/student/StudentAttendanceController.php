<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StudentAttendanceController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the attendance records for the logged-in user
        $user = Auth::user();
        
        // Start with the query builder to allow chaining methods
        $attendancesQuery = $user->attendances()->orderBy('date', 'desc');
        
        if ($request->has('search')) {
            $searchDate = Carbon::parse($request->get('search'));
            $attendancesQuery->whereYear('date', $searchDate->year)
                             ->whereMonth('date', $searchDate->month);
        }

        // Paginate the results
        $attendances = $attendancesQuery->paginate(30);
        
        return view('student.attendance', ['attendances' => $attendances]);
    }
}
