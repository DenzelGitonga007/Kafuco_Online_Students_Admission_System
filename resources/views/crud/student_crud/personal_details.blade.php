<!-- Call the layouts -->

@extends('assets.layouts')
@section('content')

<!-- The header -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>
    <!-- The body -->
    <div class="container" style="margin-top: 50px;">
    <!-- Success message -->
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <h2>Personal Details</h2>
                <!-- Name -->
                    <div class="card">
                        <!-- Name -->
                        <div class="card-header">Your Name</div>
                            <div class="card-body">
                                <form action="{{ url('student_upload_personal_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                                    <!-- The cross-site request forgery     -->
                                    @csrf
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <!-- surname -->
                                        <div class="col">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" placeholder="Surname" name="surname" value="{{ old('surname') }}">
                                        </div>
                                        <!-- Validation -->
                                        @error('surname')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                        <!-- first_name -->
                                        <div class="col">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                        </div>
                                        <!-- Validation -->
                                        @error('first_name')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                        <!-- last_name -->
                                        <div class="col">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                        </div>
                                        <!-- Validation -->
                                        @error('last_name')
                                            <div class="alert alert-danger col" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <br>
                                    <!-- DOB -->
                                    <div class="card-header">Your Birth Details</div> 
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="dob" class="form-label">Date Of Birth</label> 
                                                    <input type="date" class= "form-control" name="date" max="2007-01-01" value="{{ old('date') }}">
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
                                    <div class="row">
                                        <button class="btn btn-outline-success btn-block">Submit Your Personal Details</button>
                                    </div>

                                </form>

                                
                            </div>
                        
                    </div>

                    <!-- <div class="card">

                    </div> -->
            </div>
        </div>
    </div>
</x-app-layout>

<!-- End the layouts -->

 