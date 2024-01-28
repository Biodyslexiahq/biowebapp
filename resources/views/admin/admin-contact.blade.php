@extends('admin.admin-master')

@section('content')

<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-10 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="centered-text3" style="family-font: Poppins;">Contact Us Data.</h1><br>
                <table width="100%" style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                    <thead class="table-dark">
                        <tr class="text-black ">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contactdata as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection