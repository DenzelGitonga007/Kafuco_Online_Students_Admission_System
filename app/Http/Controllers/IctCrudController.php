<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call the model
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Redirect;

class IctCrudController extends Controller
{
    //Fetch all the records from the personal_details table
    public function index() {
        $personal_details = PersonalDetail::get();
        // return $personal_details;
        return view('crud.ict_crud.student_details', compact('personal_details'));

    }

    // Reading/viewing each student individually
    public function viewStudent($id) {
       $personal_details = PersonalDetail::where('id', '=', $id)->first();
       return view('crud.ict_crud.ict_view_student', compact('personal_details'));
    }

    // Returning the view with the "add student form"
    public function addStudent () {
       return view('crud.ict_crud.ict_add_student');
    }

    // Saving the student details from the add_students_form
    public function saveStudent (Request $request) {

    // Validation
    $request->validate([
        'surname' => 'required',
        // 'email' => 'required|email',
        'first_name' => 'required',
        'last_name' => 'required',
        'date'=>'required',

    ]);

    // The data fields
    $surname = $request->surname;
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $date = $request->date;

    $personal_details = new PersonalDetail();

    // Saving the data
    $personal_details->surname = $surname;
    $personal_details->first_name = $first_name;
    $personal_details->last_name = $last_name;
    $personal_details->date = $date;
    $personal_details->save();

    // Redirect
    return redirect()->back()->with('success', 'Student details uploaded successfully'); //Redirects to the index addStudent() {}
    }

    // Editing/updating a student
    public function editStudent($id) {
        // Get the records as from the index function
        $personal_details = PersonalDetail::where('id', '=', $id)->first();
        // return $personal_details;
        return view('crud.ict_crud.ict_edit_student', compact('personal_details'));
    }

    // Saving the updates
    public function updateDetails(Request $request) {
        // Validation
        $request->validate([
            'surname' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date' => 'required',

        ]);

        // The data fields
        $id = $request->id;
        $surname = $request->surname;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $date = $request->date;


        PersonalDetail::where('id', '=', $id)->update([
        'surname' => $surname,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'date' => $date,
        ]);

        // Redirect
        return redirect()->back()->with('success', 'Details updated successfully');
    }

    // Deleting
    public function deleteStudent($id) {
        PersonalDetail::where('id', '=', $id)->delete();

        // Redirect
        return redirect()->back()->with('success', "Student deleted successfully!");
    }

}
