<!-- Call the layouts -->
@extends('assets.layouts')
@section('content')

<!-- The dashboard -->
<x-app-layout>
    <!-- The header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ICT_Support Dashboard') }}
        </h2>
    </x-slot>
    
    <!-- The body -->
    <!-- The table to display the student_details -->
    <div class="container" style="margin-top: 50px;">
       <div class="row">
        <div class="col-md-12">
            <!-- The header and the add student div -->
            <div class="container">
                <div class="row">
                    <!-- Student' list -->
                    <div class="col-9">
                        <h2>Students' List</h2>
                    </div>
                    <div class="col-3">
                        <div class="card" style="margin-bottom: 25px;">
                            <!-- <div class="card-body"> -->
                                <a href="{{ url('add_student')}}" class="btn btn-success btn-block" role="button"> <!-- The url to ICT adding a new student -->
                                    Add student details
                                </a>
                            <!-- </div> -->
                        </div>
                    </div>    
                </div>
            </div>
            <!-- <div class="row">
            <div class="col-9">
            <h2>Students' details</h2>
            </div>
            <div class="col-3">
                <h2>Add student</h2>
            </div>
            </div>
             -->

             <!-- After deleting a student -->
             
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
             
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-sm">
                                <caption>Details of the students</caption>
                                <thead class="thead-dark">
                                    <tr>
                                    <!-- Table columns -->
                                        <th scope="col">#</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   @foreach ($personal_details as $personal_detail)
                                    <tr>
                                        <th scope="row">{{ $personal_detail->id }}</th>
                                        <!-- <th scope="row">{{ $loop->iteration }}</th> -->
                                        <td>{{ $personal_detail->surname }}</td>
                                        <td>{{ $personal_detail->first_name }}</td>
                                        <td>{{ $personal_detail->last_name}}</td>
                                        <td>{{ $personal_detail->date }}</td>
                                        <!-- The crud actions buttons -->
                                        <td>
                                        <!-- <a href="{{ url('student_details' . $personal_detail->id)}}" title="View Student">
                                            <button class="btn btn-info btn-sm">View</button>
                                        </a> -->
                                            <!-- View -->
                                            <a href="{{ url('view_student/' . $personal_detail->id) }}" class="btn btn-outline-info btn-sm">
                                                View
                                            </a>
                                            <!-- Edit -->
                                            <a href="{{ url('edit_student/' . $personal_detail->id) }}" class="btn btn-outline-primary btn-sm" role="button" style="margin-left: 4px;">
                                                Edit
                                            </a>
                                            <!-- Delete -->
                                            <a href="{{ url('delete_student/' . $personal_detail->id) }}" class="btn btn-outline-danger btn-sm" style="margin-left: 4px;">
                                                Delete
                                            </a>

                                        </td>
                                        

                                    </tr>

                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
       </div> 
    </div>
    
</x-app-layout>

<!-- End the layouts -->
