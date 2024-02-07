@extends('admin.admin-master')

@section('content')

<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-9x1 mx-auto sm:px-10 lg:px-8">
        <div class="bg-white overflow-x shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="centered-text3" style="family-font: Poppins;">Student Data</h1><br><br>
                <table width="100%" style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                    <thead class="table-dark">
                        <tr class="text-black ">
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Student Age</th>
                            <th>Gender</th>
                            <th>NRIC</th>
                            <th>Ethnic Background</th>
                            <th>Other Ethnic</th>
                            <th>School grade</th>
                            <th>Address</th>
                            <th>Father's Name</th>
                            <th>Father's Email</th>
                            <th>Father's Number</th>
                            <th>Mother's Name</th>
                            <th>Mother's Email</th>
                            <th>Mother's Number</th>
                            <th>Programme selected</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentdatas as $studentdata)
                        <tr>
                            <td>{{$studentdata->id}}</td>
                            <td>{{$studentdata->Studentname}}</td>
                            <td>{{$studentdata->Studentage}}</td>
                            <td>{{$studentdata->Gender}}</td>
                            <td>{{$studentdata->NRIC}}</td>
                            <td>{{$studentdata->EtchnicBackground}}</td>
                            <td>{{$studentdata->Ethnicothers}}</td>
                            <td>{{$studentdata->Schoolgrade}}</td>
                            <td>{{$studentdata->Address}}</td>
                            <td>{{$studentdata->Fathername}}</td>
                            <td>{{$studentdata->Fathernum}}</td>
                            <td>{{$studentdata->FatherEmail}}</td>
                            <td>{{$studentdata->Mothername}}</td>
                            <td>{{$studentdata->Motheremail}}</td>
                            <td>{{$studentdata->Mothernum}}</td>
                            <td>{{$studentdata->Progreg}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection