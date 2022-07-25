<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //The roles function from the routes
    public function roles() {
       $role = Auth::user()->role; //This fetches the role value from the users' table and uses it to authenticate. 
       
    //    The condition(s) for authentication

    if ($role == '1') {
        // For the ICT_Support(s_admin)
        // return view('crud.ict_crud.student_details');
        return view('crud.ict_crud.student_details');
    }

    elseif ($role == '2') {
        // For the registrar(admin)
        return view('crud.registrar_crud.student_list');
    }

    else{
        // For the student->0
        // return view('resources\views\crud\student_crud\personal_details\bio_data.blade.php'); 
        return view('crud.student_crud.personal_details');
    }
    }
}
