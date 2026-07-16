<?php

use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobOpeningController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WageRequestController;
use App\Http\Controllers\ProfileController;

// Public routes
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/users/{user}', [UserController::class, 'show'])
        ->whereNumber('user')
        ->name('users.show');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/payroll', [PayrollController::class, 'adminIndex'])->name('payroll.index');
    Route::post('/payroll/{payroll}/approve', [PayrollController::class, 'approve'])->name('payroll.approve');
    Route::post('/payroll/{payroll}/reject', [PayrollController::class, 'reject'])->name('payroll.reject');

    Route::get('/wage-requests', [WageRequestController::class, 'adminIndex'])->name('wagerequests.index');
    Route::post('/wage-requests/{wageRequest}/approve', [WageRequestController::class, 'approve'])->name('wagerequests.approve');
    Route::post('/wage-requests/{wageRequest}/reject', [WageRequestController::class, 'reject'])->name('wagerequests.reject');
});

// HR routes
// HR routes
Route::middleware(['auth', 'role:hr,admin'])->prefix('hr')->name('hr.')->group(function () {
    Route::get('/dashboard', function () {
        return view('hr.dashboard');
    })->name('dashboard');

    Route::get('/jobs', [JobOpeningController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [JobOpeningController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobOpeningController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}/edit', [JobOpeningController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobOpeningController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobOpeningController::class, 'destroy'])->name('jobs.destroy');

    Route::get('/jobs/{job}/applications', [ApplicationController::class, 'index'])->name('applications.index');
    Route::post('/applications/{application}/accept', [ApplicationController::class, 'accept'])->name('applications.accept');
    Route::post('/applications/{application}/reject', [ApplicationController::class, 'reject'])->name('applications.reject');

    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
    Route::put('/attendance/{attendance}', [AttendanceController::class, 'update'])->name('attendance.update');

    Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
    Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
    Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::get('/schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
    Route::put('/schedules/{schedule}', [ScheduleController::class, 'update'])->name('schedules.update');
    Route::delete('/schedules/{schedule}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

    Route::get('/payroll', [PayrollController::class, 'index'])->name('payroll.index');
    Route::get('/payroll/create', [PayrollController::class, 'create'])->name('payroll.create');
    Route::post('/payroll', [PayrollController::class, 'store'])->name('payroll.store');

    Route::get('/wage-requests', [WageRequestController::class, 'index'])->name('wagerequests.index');
    Route::get('/wage-requests/create', [WageRequestController::class, 'create'])->name('wagerequests.create');
    Route::post('/wage-requests', [WageRequestController::class, 'store'])->name('wagerequests.store');
});

// Employee routes
Route::middleware(['auth', 'role:employee'])->prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', function () {
        return view('employee.dashboard');
    })->name('dashboard');

    Route::get('/attendance', [AttendanceController::class, 'myAttendance'])->name('attendance.index');
    Route::post('/attendance/clock-in', [AttendanceController::class, 'clockIn'])->name('attendance.clockin');
    Route::post('/attendance/clock-out', [AttendanceController::class, 'clockOut'])->name('attendance.clockout');

    Route::get('/schedule', [ScheduleController::class, 'myShifts'])->name('schedule.index');

    Route::get('/payroll/{payroll}', [PayrollController::class, 'showPayslip'])->name('payroll.show');
    Route::get('/payroll', [PayrollController::class, 'myPayroll'])->name('payroll.index');
});

// Candidate routes (public, no login)
Route::get('/', [JobOpeningController::class, 'publicIndex'])->name('careers.index');
Route::get('/careers/{job}/apply', [ApplicationController::class, 'create'])->name('careers.apply');
Route::post('/careers/{job}/apply', [ApplicationController::class, 'store'])->name('careers.apply.store');

Route::get('/apply', function (){
    return view('careers.apply');
});

Route::get('/careers/status', [ApplicationController::class, 'status'])->name('careers.status');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

