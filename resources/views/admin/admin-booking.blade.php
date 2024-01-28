@extends('admin.admin-master')

@section('content')

<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-9x1 mx-auto sm:px-30 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="centered-text3" style="family-font: Poppins;">Appointment Data.</h1><br>
                <table width="100%" style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                    <thead class="table-dark">
                        <tr class="text-black ">
                            <th>ID</th>
                            <th>Parents Name</th>
                            <th>Student Name</th>
                            <th>Student age</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Assessment Type</th>
                            <th>Payment Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookingdatas as $bookingdata)
                        <tr>
                            <td>{{$bookingdata->id}}</td>
                            <td>{{$bookingdata->parentsname}}</td>
                            <td>{{$bookingdata->studentssname}}</td>
                            <td>{{$bookingdata->studentsage}}</td>
                            <td>{{$bookingdata->address}}</td>
                            <td>{{$bookingdata->contactnum}}</td>
                            <td>{{$bookingdata->email}}</td>
                            <td>{{$bookingdata->date}}</td>
                            <td>{{$bookingdata->time}}</td>
                            <td>{{$bookingdata->assessmentopt}}</td>
                            <td>{{$bookingdata->paymentopt}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection