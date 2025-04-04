<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VotingController;

// Admin Authentication Routes
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminController::class, 'showAdminLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'adminLogin']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth:admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('candidates', CandidateController::class);
    });
});

// Employee Authentication Routes
Route::prefix('employee')->group(function() {
    Route::get('/login', [EmployeeController::class, 'showEmployeeLoginForm'])->name('employee.login');
    Route::post('/login', [EmployeeController::class, 'employeeLogin']);
    Route::post('/logout', [EmployeeController::class, 'logout'])->name('employee.logout');
    
    Route::middleware('auth:employee')->group(function() {
        Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
    });
});

// Voting Routes
Route::controller(VotingController::class)->group(function() {
    Route::get('/vote', 'showVotingForm')->name('voting.form');
    Route::post('/vote', 'submitVote')->name('voting.submit');
    Route::get('/results', 'showResults')->name('voting.result');
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
});