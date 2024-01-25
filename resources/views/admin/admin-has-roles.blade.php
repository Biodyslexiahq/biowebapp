@extends('admin.admin-master')

@section('content')

<h1 class="centered-text2" style="font-family: Poppins;">Edit Profile Role !</h1>

    <table class="table table-hover container ">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <!-- Add other columns as needed -->
                <th>Action</th>
                <th>Update ID field</th>
                <th>Update Role ID field</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modelHasRoles as $modelHasRole)
                <tr>
                    <td>{{$modelHasRole->model_id}}</td>
                    <td>{{ $users->find($modelHasRole->model_id)->name }}</td>
                    <td>{{ $modelHasRole->role_id }}</td>
                    
                    <!-- Add other columns as needed -->
                    <td>
                        <form action="{{ route('admin.model_has_roles.delete', $modelHasRole->role_id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary text-dark " type="submit">Delete</button>
                        </form>
                        <br>
                    </td>
                      <!-- Edit Form -->
                      <td>
                        <form action="{{ route('admin.model_has_roles.update', $modelHasRole->model_id) }}" method="post">
                            @csrf
                            @method('patch')
                            <input type="text" name="model_id" value="{{ $modelHasRole->model_id }}">
                            <!-- Add other input fields for editing -->

                            <button class="btn btn-primary text-dark " type="submit">Update</button>
                        </form>
                        <br>
                        <td>
                        <form action="{{ route('admin.model_has_roles.update', $modelHasRole->role_id) }}" method="post">
                            @csrf
                            @method('patch')
                            <input type="text" name="role_id" value="{{ $modelHasRole->role_id }}">
                            <!-- Add other input fields for editing -->

                            <button class="btn btn-primary text-dark " type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <p class="centered-text3">*Adjust role according to the information given.</p><br>
    <p class="centered-text3">1 = "Admin" | 2 = "Teacher" | 3 = "User"</p>
@endsection