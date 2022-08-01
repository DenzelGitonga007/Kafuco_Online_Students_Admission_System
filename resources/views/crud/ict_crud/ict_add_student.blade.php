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
                        <i class="bi-check-circle"></i>
                        {{ Session::get('success') }}

                        <!-- Closing the alert -->
                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>
                @endif
                
                    <div class="card">
                    <h2 class="card-header">Personal Details</h2>
                    <br>
                        <div class="card-header">Your Name</div>
                            <div class="card-body">
                                <form action="{{ url('ict_save_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                                    <!-- The cross-site request forgery     -->
                                    @csrf
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <!-- surname -->
                                        <div class="col">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" placeholder="Surname" name="surname" value="{{ old('surname') }}">
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
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
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
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
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
                                                    <label for="date" class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control" name="date" max="2007-01-01" value="{{ old('date') }}">
                                                </div>
                                                <!-- Validation -->
                                                @error('date')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <br>
                                    <!-- Gender  -->
                                    <div class="card-header">Gender</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group col">
                                                        <div class="input-group-prepend">
                                                            <label for="gender" class="form-label input-group-text">Gender</label>
                                                        </div>
                                                        <select name="gender" class="custom-select form-control" style="height: 38px;">
                                                            <option selected>Choose...</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Rather_Not_Say">Rather Not Say</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <br>
                                    <div class="card-header">Nationality details</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="national_id" class="form-label">National ID</label>
                                                    <input type="text" class="form-control" name="national_id" pattern="[0-9]{8}" placeholder="National ID Number" value="{{ old('national_id') }}">
                                                </div>
                                                <!-- Validation -->
                                                @error('national_id')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div> 
                                     <!-- Nationality -->
                                    <div class="card-body">Nationality</div>
                                        <div class="row">
                                            <div class="col">
                                                <!-- Kenyan -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="nationality" value="Kenyan">
                                                    <label for="kenyan" class="form-check-label">Kenyan</label>
                                                </div>
                                                <!-- East African -->
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="nationality" value="East African">
                                                    <label for="east_african" class="form-check-label">East African</label>
                                                </div>
                                                <!-- Others -->
                                            </div>
                                        </div>    
                                    <br>    
                                    <div class="card-header">Religion</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <!-- Protestant -->
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="religion" value="Protestant">
                                                        <label for="protestant" class="form-check-label">Protestant</label>
                                                    </div>
                                                    <!-- Catholic -->
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" name="religion" value="Catholic">
                                                        <label for="catholic" class="form-check-label">Catholic</label>
                                                    </div>
                                                    <!-- Others -->
                                                </div>
                                            </div>
                                        </div>    
                                    <br>
                                    <!-- Home and Address Details -->
                                    <h2 class="card-header">Home and Address Details<h2>
                                    <br>  
                                        <div class="card-header">Contact Addresses</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Email -->
                                                    <div class="col">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" placeholder="Enter email address" name="email" value="{{ old('email') }}">
                                                        <!-- Validation -->
                                                        @error('email')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <!-- Phone -->
                                                    <div class="col">
                                                        <label for="phone" class="form-label">Phone Number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">+254</span>
                                                            <input type="tel" class="form-control" placeholder="7000000**" name="phone" pattern="[0-9]{9}" value="{{ old('phone') }}">
                                                        </div>
                                                        <!-- Validation -->
                                                        @error('phone')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                    <br>
                                    <div class="card-header">Your Home Address</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- City/Town -->
                                                    <div class="col">
                                                        <label for="city" class="form-label">City/Town</label>
                                                        <input type="text" class="form-control" placeholder="Which is your closest city/town" name="city" value="{{ old('city') }}">
                                                        <!-- Validation -->
                                                        @error('city')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <!-- P.O BOX -->
                                                    <div class="col">
                                                        <label for="pob" class="form-label">P.O BOX</label>
                                                        <input type="text" class="form-control" placeholder="Enter your P.O BOX" name="pob" value="{{ old('pob') }}">
                                                        <!-- Validation -->
                                                        @error('pob')
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
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
                                    <div class="row" style="margin-top: 10px ;">
                                        <a href="{{ url('add_student') }}" class="btn btn-outline-danger btn-block">
                                            Cancel Upload
                                        </a>
                                    </div>
                                    
                                    <!-- Submit -->
                                    <div class="row" style="margin-top: 10px;">
                                        <button class="btn btn-outline-success btn-block">Submit Their Personal Details</button>
                                    </div>

                                </form>

                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- End the layouts -->