@extends('admin.admin-master')

@section('content')
<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-9x1 mx-auto sm:px-10 lg:px-8">
        <div class="bg-white overflow-x shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="centered-text3" style="family-font: Poppins;">Programme Data</h1><br><br>
                <table width="100%" style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                    <thead class="table-dark">
                        <tr class="text-black ">
                            <th>ID</th>
                            <th>Programme</th>
                            <th>Time</th>
                            <th>Online class</th>
                            <th>Student name</th>
                            <th>NRIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fourmdailydatas as $fourmdailydata)
                        <tr>
                            <td>{{$fourmdailydata->id}}</td>
                            <td>{{$fourmdailydata->Programme}}</td>
                            <td>{{$fourmdailydata->time}}</td>
                            <td>{{$fourmdailydata->Online_Class}}</td>
                            <td>{{$fourmdailydata->Student_name}}</td>
                            <td>{{$fourmdailydata->NRIC}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection