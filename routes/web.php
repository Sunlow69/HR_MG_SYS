<?php

use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function(){
    return view('auth.signup');
})->name('signup');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Employee Management
Route::get('/employees', function () {
    return view('pages.hr.employees');
})->name('employees');

Route::get('/departments', function () {
    return view('pages.hr.departments');
})->name('departments');

// Recruitment
Route::get('/jobs', function () {
    return view('pages.candidate.jobs');
})->name('jobs');

Route::get('/applications', function () {
    return view('pages.hr.applications');
})->name('applications');

// Payroll
Route::get('/payroll', function () {
    return view('pages.finance.payroll');
})->name('payroll');

Route::get('/salaries', function () {
    return view('pages.hr.salaries');
})->name('salaries');

Route::get('/mysalary', function () {
    return view('pages.employee.mysalary');
})->name('mysalary');

// Attendance
Route::get('/attendance', function () {
    return view('pages.hr.attendance');
})->name('attendance');

Route::get('/myattendance', function () {
    return view('pages.employee.myattendance');
})->name('myattendance');

// Scheduling
Route::get('/schedules', function () {
    return view('pages.hr.schedules');
})->name('schedules');

// Administration
Route::get('/users', function () {
    return view('pages.admin.users');
})->name('users');

Route::get('/roles', function () {  // Changed from '/role' to '/roles' for consistency
    return view('pages.admin.roles');
})->name('roles');

// Profile - Defined only once
Route::get('/profile', function(){
    return view('auth.profile');
})->name('profile');