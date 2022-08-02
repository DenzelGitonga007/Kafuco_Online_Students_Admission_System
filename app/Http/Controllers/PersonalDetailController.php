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
            'nationality'=> 'required',
            'religion'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'city'=> 'required',
            'pob'=> 'required',
            'marital_status'=> 'required',
            'spouse_surname'=> '',
            'spouse_first_name'=> '',
            'spouse_last_name'=> '',
            'spouse_email'=> '',
            'spouse_phone'=> '',
            'spouse_city'=> '',
            'spouse_pob'=> '',
            'father'=>'required',
            'father_surname'=> '',
            'father_first_name'=> '',
            'father_last_name'=> '',
            'father_date'=> '',
            'father_occupation'=> '',
            'mother'=>'required',
            'mother_surname'=> '',
            'mother_first_name'=> '',
            'mother_last_name'=> '',
            'mother_date'=> '',
            'mother_occupation'=> '',


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
        $email = $request->email;
        $phone = $request->phone;
        $city = $request->city;
        $pob = $request->pob;
        $marital_status = $request->marital_status;
        $spouse_surname = $request->spouse_surname;
        $spouse_first_name = $request->spouse_first_name;
        $spouse_last_name = $request->spouse_last_name;
        $spouse_email = $request->spouse_email;
        $spouse_phone = $request->spouse_phone;
        $spouse_city = $request->spouse_city;
        $spouse_pob = $request->spouse_pob;
        $father = $request->father;
        $father_surname = $request->father_surname;
        $father_first_name = $request->father_first_name;
        $father_last_name = $request->father_last_name;
        $father_date = $request->father_date;
        $father_occupation = $request->father_occupation;
        $mother = $request->mother;
        $mother_surname = $request->mother_surname;
        $mother_first_name = $request->mother_first_name;
        $mother_last_name = $request->mother_last_name;
        $mother_date = $request->mother_date;
        $mother_occupation = $request->mother_occupation;

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
        $personal_details->email = $email;
        $personal_details->phone = $phone;
        $personal_details->city = $city;
        $personal_details->pob = $pob;
        $personal_details->marital_status = $marital_status;
        $personal_details->spouse_surname = $spouse_surname;
        $personal_details->spouse_first_name = $spouse_first_name;
        $personal_details->spouse_last_name = $spouse_last_name;
        $personal_details->spouse_email = $spouse_email;
        $personal_details->spouse_phone = $spouse_phone;
        $personal_details->spouse_city = $spouse_city;
        $personal_details->spouse_pob = $spouse_pob;
        $personal_details->father = $father;
        $personal_details->father_surname = $father_surname;
        $personal_details->father_first_name = $father_first_name;
        $personal_details->father_last_name = $father_last_name;
        $personal_details->father_date = $father_date;
        $personal_details->father_occupation = $father_occupation;
        $personal_details->mother = $mother;
        $personal_details->mother_surname = $mother_surname;
        $personal_details->mother_first_name = $mother_first_name;
        $personal_details->mother_last_name = $mother_last_name;
        $personal_details->mother_date = $mother_date;
        $personal_details->mother_occupation = $mother_occupation;

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
