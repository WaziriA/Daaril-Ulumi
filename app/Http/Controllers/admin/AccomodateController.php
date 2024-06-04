<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Accomodate;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccomodateController extends Controller
{
    //
    public function index(Request $request)
    {
        // Retrieve all accomodates with associated users
        $accomodatesQuery = Accomodate::query();
        
    
        // Apply search filter if provided
        if ($request->has('search')) {
            $searchDate = Carbon::parse($request->get('search'));
            $accomodates = $accomodates->filter(function ($accomodate) use ($searchDate) {
                return Carbon::parse($accomodate->month)->format('F Y') === $searchDate->format('F Y');
            });
        }

        $accomodates = $accomodatesQuery->paginate(30);
        $users = User::where('is_admin', 0)->orderBy('name')->get();
    
        // Calculate total revenue for the month
        $totalRevenue = $accomodates->sum('amount');
    
        return view('admin.weekly_fee', [
            'accomodates' => $accomodates,
            'totalRevenue' => $totalRevenue,
            'users' => $users,
        ]);
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'month' => 'required',
            'payment_date' => 'required',
            'issued_by' => 'required',
        ]);

        Accomodate::create($validatedData);

        return redirect()->route('admin.weekly_fee.index')->with('success', ' weekly Fee record submitted successfully.');
    }
}
