<?php

use Illuminate\Support\Facades\Route;
// Call the controller
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// The redirects route, with the roles function
Route::get('/redirects', [UserController::class, "roles"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    // To prevent login from the url using /dashboard
    Route::get('/dashboard', [UserController::class, "roles"])->name('dashboard');
    //To prevent login from the url using /redirects
    Route::get('/redirects', [UserController::class, "roles"])->name('dashboard');
});
