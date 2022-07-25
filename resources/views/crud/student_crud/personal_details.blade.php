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
        <div class="row">
            <div class="col-md-12">
                <h2>Personal Details</h2>
                    <div class="card">
                        <div class="card-header">Your Name</div>
                            <div class="card-body">
                                <form action="{{ url('personal_details') }}" method="POST"> <!-- The route personal_details posts the details -->
                                    <!-- The cross-site request forgery     -->
                                    @csrf
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <!-- surname -->
                                        <div class="col">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" class="form-control" placeholder="Surname" name="surname">
                                        </div>
                                        <!-- first_name -->
                                        <div class="col">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                        </div>
                                        <!-- last_name -->
                                        <div class="col">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name">
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
            </div>
        </div>
    </div>
</x-app-layout>

<!-- End the layouts -->
@endsection
 