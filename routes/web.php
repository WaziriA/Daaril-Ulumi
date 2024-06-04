<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\student\DashboardController as StudentDashboard;
use App\Http\Controllers\admin\AttendanceManagementController;
use App\Http\Controllers\admin\FeeController;
use App\Http\Controllers\admin\AccomodateController;
use App\Http\Controllers\admin\AttendanceViewController;
use App\Http\Controllers\admin\StudentUpdateController;
use App\Http\Controllers\student\WeeklyFeeController;
use App\Http\Controllers\student\MonthlyFeeController;
use App\Http\Controllers\student\StudentProfileController;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Protected routes
Route::middleware('auth')->group(function () {
    // Student routes
    Route::get('/student.attendance', [\App\Http\Controllers\student\StudentAttendanceController::class, 'index'])->name('student.attendance');
    Route::get('/student.weekly_fee', [\App\Http\Controllers\student\WeeklyFeeController::class, 'index'])->name('student.weekly_fee.index');
    Route::get('/student.monthly_fee', [\App\Http\Controllers\student\MonthlyFeeController::class, 'index'])->name('student.monthly_fee.index');
    Route::get('/student.dashboard', [\App\Http\Controllers\student\DashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/student.student_profile', [\App\Http\Controllers\student\StudentProfileController::class, 'index'])->name('student.student_profile.index');
    Route::post('/student.student_profile', [\App\Http\Controllers\student\StudentProfileController::class, 'update'])->name('student.student_profile.update');

    // Admin routes
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/student', [\App\Http\Controllers\admin\StudentManagementController::class, 'index'])->name('admin.student');
        Route::delete('/student/{user}', [\App\Http\Controllers\admin\StudentManagementController::class, 'destroy'])->name('admin.student.destroy');
        Route::get('/attendance_view', [\App\Http\Controllers\admin\AttendanceManagementController::class, 'getAttendance'])->name('admin.attendance_view');
        Route::post('/attendance', [\App\Http\Controllers\admin\AttendanceManagementController::class, 'store'])->name('admin.attendance.store');
        Route::get('/attendance2', [\App\Http\Controllers\admin\AttendanceViewController::class, 'index'])->name('admin.attendance2.index');
        Route::get('/student-view/{user}', [\App\Http\Controllers\admin\DashboardController::class, 'view'])->name('admin.student-view');
        Route::get('/student_edit/{user}', [\App\Http\Controllers\admin\StudentUpdateController::class, 'edit'])->name('admin.student_edit');
        Route::post('/student_edit/{user}', [\App\Http\Controllers\admin\StudentUpdateController::class, 'update'])->name('admin.student_edit.update');
        Route::get('/profile', [\App\Http\Controllers\admin\UserProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/profile', [\App\Http\Controllers\admin\UserProfileController::class, 'update'])->name('admin.profile.update');
        Route::get('/fee', [\App\Http\Controllers\admin\FeeController::class, 'index'])->name('admin.fee.index');
        Route::get('/fee_making/{user}', [\App\Http\Controllers\admin\FeeController::class, 'create'])->name('admin.fee.create');
        Route::post('/fee_making', [\App\Http\Controllers\admin\FeeController::class, 'store'])->name('admin.fee.store');
        Route::get('/weekly_fee', [\App\Http\Controllers\admin\AccomodateController::class, 'index'])->name('admin.weekly_fee.index');
        Route::post('/weekly_fee_making', [\App\Http\Controllers\admin\AccomodateController::class, 'store'])->name('admin.weekly_fee.store');
    });
});

Route::get('/fetch-users', [\App\Http\Controllers\admin\AttendanceManagementController::class, 'fetchUsers'])->name('fetch.users');

