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
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <!-- The success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <!-- To print the message -->
                        
                        {{ Session::get('success') }}

                        <!-- Closing the alert -->
                        <!-- <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
                    </div>
                @endif
                <h2>Personal Details</h2>
                    <div class="card">
                        <!-- Name -->
                        <div class="card-header">Your Name</div>
                            <div class="card-body">
                                <form action="{{ url('ict_update_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                                    <!-- The cross-site request forgery     -->
                                    @csrf
                                    {!! csrf_field() !!}
                                    
                                    <div class="row">
                                        <!-- The hidden id field -->
                                        <input type="hidden" name="id" value="{{ $personal_details->id }}">
                                        <!-- surname -->
                                        <div class="col">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" placeholder="Surname" name="surname" value="{{ $personal_details->surname }}">
                                            <!-- Validation -->
                                            @error('surname')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- first_name -->
                                        <div class="col">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ $personal_details->first_name }}">
                                            <!-- Validation -->
                                            @error('first_name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!-- last_name -->
                                        <div class="col">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ $personal_details->last_name }}">
                                            <!-- Validation -->
                                            @error('last_name')
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <br> 
                                    <!-- DOB -->
                                    
                                    <div class="card-header">DOB</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="dob" class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" name="date" max="2007-01-01" value="{{ $personal_details->date }}">
                                                    </div>
                                                    <!-- Validation -->
                                                    @error('date')
                                                        <div class="alert alert-danger col">
                                                            {{$message}}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                    <br>             
                                    <!-- The buttons -->
                                    <!-- Back -->
                                    <div class="row">
                                        <a href="{{ url('student_details')}}" class="btn btn-outline-secondary btn-block">
                                            Back
                                        </a>
                                    </div>
                                    
                                    <!-- Canceling the uploads -->
                                    <!-- <div class="row" style="margin-top: 10px ;">
                                        <a href="{{ url('student_details') }}" class="btn btn-outline-danger btn-block">
                                            Cancel Update
                                        </a>
                                    </div> -->
                                    
                                    <!-- Submit -->
                                    <div class="row" style="margin-top: 10px;">
                                        <button class="btn btn-outline-success btn-block">Save The Updates</button>
                                    </div>

                                </form>

                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- End the layouts -->