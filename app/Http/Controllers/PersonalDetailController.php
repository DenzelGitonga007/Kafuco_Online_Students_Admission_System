<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Call the model
use App\Models\PersonalDetail;

class PersonalDetailController extends Controller
{
    //Posting the details
    public function uploadDetails(Request $request) {
        // Validation
        $request->validate([
            'surname'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'date'=> 'required',
            'gender'=> 'required',
            'national_id'=> 'required',
            'nationanlity'=> 'required',
            'religion'=> 'required',
        ]);

        // Handling the input data (Request)
        $surname = $request->surname;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $date = $request->date;
        $gender = $request->gender;
        $national_id = $request->national_id;
        $nationality = $request->nationality;
        $religion = $request->religion;

        // Saving  into the database
        $personal_details = new PersonalDetail(); //Upload a new record through the model
        $personal_details->surname = $surname;
        $personal_details->first_name = $first_name;
        $personal_details->last_name = $last_name;
        $personal_details->date = $date;
        $personal_details->gender = $gender;
        $personal_details->national_id = $national_id;
        $personal_details->nationality = $nationality;
        $personal_details->religion = $religion;
        $personal_details->save();

        // After saving the data into the db, return success message
        return redirect()->back()->with('success', "Your personal details have been received successfully!");
    }

    // // Viewing the personal details
    // public function viewDetails($id) {
    //     // $personal_details = PersonalDetail::where('id', '=', $id)->first();
    //     // return $personal_details;
    //     $personal_details = PersonalDetail::where('id', '=', $id);
    //     return view('crud.student_crud.view_personal_details', compact('personal_details'));
    // }
}
