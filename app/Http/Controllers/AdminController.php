<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
  

    public function modelHasRoles()
    {
        $modelHasRoles = \DB::table('model_has_roles')->get();
        $users = User::all();

        return view('admin.admin-has-roles', compact('modelHasRoles', 'users'));
    }

    public function deleteModelHasRole($role_id)
    {
        \DB::table('model_has_roles')->where('role_id',$role_id)->delete();

        return redirect()->route('admin.admin-has-roles')->with('success', 'Role deleted successfully.');
    }

    public function altermodelid(Request $request, $model_id)
    {
        \DB::table('model_has_roles')->where('model_id',$model_id)->update([
            'model_id'=> $request->input('model_id'),
        ]);

        return redirect()->route('admin.admin-has-roles')->with('success','Model id has been updated according to the id');
    }

    public function alterroleid(Request $request, $role_id)
    {
        \DB::table('model_has_roles')->where('role_id',$role_id)->update([
            'role_id'=> $request->input('role_id'),
        ]);

        return redirect()->route('admin.admin-has-roles')->with('success','Role id has been updated according to the id');
    }
    
    public function viewcontact()
    {
        $contactdata = \DB::table('contactus')->get();

        return view('admin.admin-contact', compact('contactdata'));
    }

    public function viewbooking()
    {
        $bookingdatas = \DB::table('appointment')->get();
        return view('admin.admin-booking' , compact('bookingdatas'));
    }
    
    public function managestudent()
    {
        $managestudent = \DB::table('student')->get();
        return view('admin.Admin' , compact('managestudent'));
    }
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a newly created student in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            // Add validation rules for each field
        ]);

        // Create the student
        Student::create($request->all());

        // Redirect to a success page or back to the form
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Show the form for editing the specified student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update the specified student in the database
    public function update(Request $request, Student $student)
    {
        // Validate the request data
        $request->validate([
            // Add validation rules for each field
        ]);

        // Update the student
        $student->update($request->all());

        // Redirect to a success page or back to the form
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from the database
    public function destroy(Student $student)
    {
        $student->delete();

        // Redirect to a success page or back to the list of students
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
    
    public function adminaddstudent()
    {
        return view('Adminaddstudent');
    }


    // 8.2.2024
    public function viewstudent()
    {
        $studentdatas = \DB::table('studentreg')->get();
        return view('admin.admin-view-student', compact('studentdatas'));
    }
    public function view4mdailyclass()
    {
        $fourmdailydatas = \DB::table('four_mdailyclass')->get();
        return view('admin.admin-view-student-class', compact('fourmdailydatas'));
    }

    public function view4msatclass()
    {
        $fourmsatdatas = \DB::table('fourmsatclass')->get();
        return view('admin.admin-view-student-class', compact('fourmsatdatas'));
    }

}
