<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accomodate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use session;
use Illuminate\Support\Facades\DB;

class WeeklyFeeController extends Controller
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

        $accomodatesQuery = $user->accomodates()->orderBy('month', 'desc');

        if ($request->has('search')) {
            $searchDate = $request->get('search');
            $accomodatesQuery->where('month', $searchDate);
        }

        $accomodates = $accomodatesQuery->paginate(5);

        return view('student.weekly_fee', ['accomodates' => $accomodates]);
    }
}