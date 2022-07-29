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
         <!-- Viewing the student individually    -->
         <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-12">
                    <!-- Display the name of the student -->
                    <div class="card">
                        <div class="card-header">Details of {{ $personal_details->first_name }} {{ $personal_details->last_name }} {{ $personal_details->surname }}</div>
                            <div class="card-body">
                                <div class="card-header">Name</div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                <!-- Table columns -->
                                                    <th scope="col">#</th>
                                                    <th scope="col">Surname</th>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">DOB</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">National_ID</th>
                                                    <th scope="col">Nationality</th>
                                                    <th scope="col">Religion</th>
                                                    <!-- <th scope="col">Actions</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                    
                                                <td>{{ $personal_details->id }}</td>
                                                <td>{{ $personal_details->surname }}</td>
                                                <td>{{ $personal_details->first_name }}</td>
                                                <td>{{ $personal_details->last_name }}</td>
                                                <td>{{ $personal_details->date }}</td>
                                                <td>{{ $personal_details->gender }}</td>
                                                <td>{{ $personal_details->national_id }}</td>
                                                <td>{{ $personal_details->nationality }}</td>
                                                <td>{{ $personal_details->religion }}</td>
                                            </tbody>
                                                
                                        </table>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>

         </div>
    </x-app-layout>
<!-- End layouts -->