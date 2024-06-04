<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index(Request $request)
    {
        $fees = Fee::with('user')->paginate(30);
        $users = \App\Models\User::where('is_admin', 0)->orderBy('name')->get();
        if ($request->has('search')) {
            $searchDate = Carbon::parse($request->get('search'));
            $fees = $fees->filter(function ($fee) use ($searchDate) {
                return Carbon::parse($fee->month)->format('F Y') === $searchDate->format('F Y');
            });
        }

        $totalRevenue = $fees->sum('amount');

        return view('admin.fee', [
            'fees' => $fees,
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
            'payment_date' => 'required|date',
            'issued_by' => 'required',
        ]);

        Fee::create($validatedData);

        return redirect()->route('admin.fee.index')->with('success', 'Fee record submitted successfully.');
    }

    public function create()
    {
       
        $users = \App\Models\User::where('is_admin', 0)->orderBy('name')->get();
       
        return view('admin.fee_making', ['users' => $users, 'fees'=> $fees]);
    }
}
