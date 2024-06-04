<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use session;
use Illuminate\Support\Facades\DB;

class MonthlyFeeController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = Auth::user();

        $user = Auth::user();
        
        // Check if user is authenticated
        if (!$user) {
            return redirect()->route('login')->with('error', 'you have to login first to access your account');
        }

        $feesQuery = $user->fees()->orderBy('month', 'desc');

        if ($request->has('search')) {
            $searchDate = $request->get('search');
            $feesQuery->where('month', $searchDate);
        }

        $fees = $feesQuery->paginate(12);

        return view('student.monthly_fee', ['fees' => $fees]);
    }
}
