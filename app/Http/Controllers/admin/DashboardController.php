<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fee;
use App\Models\Accomodate;
use App\Models\Attendance;
use Carbon\Carbon;
use session;

class DashboardController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::where('is_admin', 0)->get();
        // First card: Total number of users where is_admin=0
        $totalStudents = User::where('is_admin', 0)->count();

        // Second card: Total revenue per specific month from fees_table
        $currentMonth = Carbon::now()->format('Y-m');
        $feeData = Fee::where('month', $currentMonth)->get();
        $totalFeeRevenue = $feeData->sum('amount');
        $totalPaidStudents = $feeData->whereNotNull('payment_date')->count();
        $totalUnpaidStudents = $totalStudents - $totalPaidStudents;

        // Third card: Total revenue per specific month from accomodates_table
        $accomodateData = Accomodate::where('month', $currentMonth)->get();
        $totalAccomodateRevenue = $accomodateData->sum('amount');

        // Fourth card: Total percentage of users who attended per specific month
        $totalUsers = User::where('is_admin', 0)->count();

        if ($totalUsers > 0) {
            // Get all attendance records for the current month with status "present"
            $attendanceData = Attendance::where('date', 'like', $currentMonth . '%')
                                        ->where('status', 'present')
                                        ->get();
        
            // Group attendance records by user
            $attendanceByUser = $attendanceData->groupBy('user_id');
        
            // Calculate the total number of attendances for all users
            $totalAttendance = $attendanceData->count();
        
            // Calculate the attendance percentage
            $totalPossibleAttendance = $totalUsers * count($attendanceByUser);
            $attendancePercentage = ($totalAttendance / $totalPossibleAttendance) * 100;
        
            // Format the attendance percentage with two decimal places
            $attendancePercentage = number_format($attendancePercentage, 2);
        } else {
            $attendancePercentage = 0;
        }
        


     
        
        // Format the month for display
        $formattedMonth = Carbon::parse($currentMonth)->format('F Y');

        return view('admin.Dashboard', [
            'totalStudents' => $totalStudents,
            'totalFeeRevenue' => $totalFeeRevenue,
            'totalPaidStudents' => $totalPaidStudents,
            'totalUnpaidStudents' => $totalUnpaidStudents,
            'totalAccomodateRevenue' => $totalAccomodateRevenue,
            'attendancePercentage' => $attendancePercentage,
            'formattedMonth' => $formattedMonth,
            'users'=>$users,
            
        ]);
       }

       public function view(User $user, $targetDay = null)
       {
           $searchMonth = request()->get('searchMonth');
       
           if ($searchMonth) {
               $attendances = $user->attendances()
                                   ->whereMonth('date', '=', date('m', strtotime($searchMonth)))
                                   ->whereYear('date', '=', date('Y', strtotime($searchMonth)))
                                   ->get();
           } else {
               $attendances = $user->attendances()
                                   ->whereMonth('date', '=', now()->month)
                                   ->whereYear('date', '=', now()->year)
                                   ->get();
           }
       
           $Fees = $user->Fees()->get();
           $Accomodates = $user->Accomodates()
                        ->orderBy('payment_date', 'desc')
                        ->get();

    // Modify the payment_date attribute to include the day of the week
    $Accomodates->transform(function ($item) {
        $item->formatted_payment_date = Carbon::parse($item->payment_date)->format('l, F jS, Y');
        return $item;
    });
       
           return view('admin.student-view', compact('user', 'attendances', 'Fees', 'Accomodates'));
       }
       
    }
 
