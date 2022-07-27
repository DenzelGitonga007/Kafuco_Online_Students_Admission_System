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
            'last_name'=>'required'
        ]);

        // Handling the input data (Request)
        $surname = $request->surname;
        $first_name = $request->first_name;
        $last_name = $request->last_name;

        // Saving  into the database
        $personal_details = new PersonalDetail(); //Upload a new record through the model
        $personal_details->surname = $surname;
        $personal_details->first_name = $first_name;
        $personal_details->last_name = $last_name;
        $personal_details->save();

        // After saving the data into the db, return success message
        return redirect()->back()->with('success', "Your personal details have been received successfully!");
    }

    // Viewing the personal details
    public function viewDetails($id) {
        // $personal_details = PersonalDetail::where('id', '=', $id)->first();
        // return $personal_details;
        $personal_details = PersonalDetail::where('id', '=', $id);
        return view('crud.student_crud.view_personal_details', compact('personal_details'));
    }
}
