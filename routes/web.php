<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\CsoAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CsoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// CSO routes
Route::get('cso/login', [CsoController::class, 'showLoginForm'])->name('cso.login');
Route::post('cso/login', [CsoController::class, 'login']);
Route::get('/cso/dashboard',[CsoController::class,'showDashboard'])->name('cso.dashboard');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        $user = Auth::user();
        
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'supervisor') {
            return redirect()->route('supervisor.dashboard');
        } elseif ($user->role === 'expert') {
            return redirect()->route('expert.dashboard');
        }
         else {
            return redirect()->route('/');
        }
    });
});


// Admin routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
});

// Supervisor routes
Route::group(['middleware' => ['auth', 'role:supervisor']], function () {
    Route::get('supervisor/dashboard', [SupervisorController::class, 'showDashboard'])->name('supervisor.dashboard');
    // Other supervisor routes
});

// Expert routes
Route::group(['middleware' => ['auth', 'role:expert']], function () {
    Route::get('expert/dashboard', [ExpertController::class, 'showDashboard'])->name('expert.dashboard');
    
});



Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

