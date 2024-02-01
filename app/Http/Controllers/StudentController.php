<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display a listing of the students
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
}
