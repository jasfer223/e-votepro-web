<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminBlankController;
use App\Http\Controllers\Admin\AdminAdminsController;
use App\Http\Controllers\Admin\AdminPartiesController;
use App\Http\Controllers\Admin\AdminResultsController;
use App\Http\Controllers\Admin\AdminOfficersController;
use App\Http\Controllers\Admin\AdminStudentsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminElectionsController;
use App\Http\Controllers\Admin\AdminCandidatesController;

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

Route::middleware(['guest'])->group(function () {
    // Home Endpoint
    Route::get('/', function () {
        return redirect('/login');
    });
    // Authentication Endpoints
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'handleLogin'])->name('post.login');
});

Route::middleware(['auth'])->group(function () {
    // Authentication Endpoints
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Admin Endpoints
    Route::prefix('/admin')->group(function () {
        Route::get('/blank', [AdminBlankController::class, 'index'])->name('admin.admin-blank');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.admin-dashboard');
        Route::get('/elections', [AdminElectionsController::class, 'index'])->name('admin.admin-elections');
        Route::get('/parties', [AdminPartiesController::class, 'index'])->name('admin.admin-parties');
        Route::get('/candidates', [AdminCandidatesController::class, 'index'])->name('admin.admin-candidates');
        Route::get('/results', [AdminResultsController::class, 'index'])->name('admin.admin-results');
        Route::get('/officers', [AdminOfficersController::class, 'index'])->name('admin.admin-officers');
        Route::middleware(['can:super-admin'])->group(function () {
            Route::get('/students', [AdminStudentsController::class, 'index'])->name('admin.admin-students');
            Route::get('/admins', [AdminAdminsController::class, 'index'])->name('admin.admin-admins');
        });
    });
});
