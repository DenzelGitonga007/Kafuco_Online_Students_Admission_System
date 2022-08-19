<?php

use Illuminate\Support\Facades\Route;
// Call the controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\IctCrudController;
use App\Http\Controllers\ParentDetailController;
use App\Http\Controllers\SpouseDetailController;

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
    return view('index');
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

    // To prevent going to the spouse details from the url
    // Route::get('/spouse_details', [UserController::class, "roles"])->name('dashboard');
    
});

// The crud routes

// Student Crud

// Personal Details

// View the personal_details after posting
// Route::get('student_view_personal_details', [PersonalDetailController::class, "viewPersonalDetails"]);

// Uploading the personal details into the db
Route::post('/student_upload_personal_details', [PersonalDetailController::class, "uploadPersonalDetails"]);


//Spouse details form
// Viewing the form
Route::get('spouse_details', [SpouseDetailController::class, "viewSpouseDetailsForm"]);

// Uploading the spouse details
Route::post('student_upload_spouse_details', [SpouseDetailController::class, "uploadSpouseDetails"]);

// The parent details form

// Viewing the form
Route::get('parent_details', [ParentDetailController::class, "viewParentDetailsForm"]);

// Uploading the parent details
Route::post('student_upload_parent_details', [ParentDetailController::class, "uploadParentDetails"]);

//Ict crud
// Reading/viewing the personal details
Route::get('/student_details', [IctCrudController::class, "index"]);

// Reading/viewing each student individually
Route::get('/view_student/{id}', [IctCrudController::class, "viewStudent"]);

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





    