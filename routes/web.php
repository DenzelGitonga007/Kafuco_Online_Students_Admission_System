<?php

use Illuminate\Support\Facades\Route;
// Call the controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\IctCrudController;

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

// The crud routes
// Student Crud
// Personal Details
Route::post('/personal_details', [PersonalDetailController::class, "uploadDetails"]);

//Ict crud
// Reading/viewing the personal details
Route::get('/student_details', [IctCrudController::class, "index"]);

// Return the add_students_form
Route::get('/add_student', [IctCrudController::class, "addStudent"]);

// The add_students_form form-handler
Route::post('ict_save_details', [IctCrudController::class, "saveStudent"]);

// Editing/updating the student details
Route::get('edit_student/{id}', [IctCrudController::class, "editStudent"]);

// Saving the updates
Route::post('ict_update_details', [IctCrudController::class, "updateDetails"]);

// Deleting
Route::get('delete_student/{id}', [IctCrudController::class, "deleteStudent"]);


    