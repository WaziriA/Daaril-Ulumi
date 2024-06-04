<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;  // Corrected the case here
use App\Models\User;  // Corrected the case here
use Carbon\Carbon;
use Session;  // Corrected the case here
use Illuminate\Support\Facades\DB;

class AttendanceViewController extends Controller
{
    public function index(Request $request)
{
    $users = \App\Models\User::where('is_admin', 0)->get();

    $query = Attendance::query();

    

    if ($request->has('search')) {
        $searchMonth = Carbon::parse($request->get('search'));
        $query->whereYear('date', $searchMonth->format('Y'))
              ->whereMonth('date', $searchMonth->format('m'));
    }

    if ($request->has('search_name')) {
        $searchName = $request->get('search_name');
        $query->whereHas('user', function ($query) use ($searchName) {
            $query->where('name', 'like', "%$searchName%");
        });
    }

    $attendances = $query->paginate();

    return view('admin.attendance2', [
        'users' => $users,
        'attendances' => $attendances
    ]);
}

}
