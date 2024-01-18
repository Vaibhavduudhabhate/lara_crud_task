<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showStudentForm()
    {
        return view('add-student-form');
    }

    public function addStudent(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:50',
            'division' => 'required|string|max:10',
            'roll_number' => 'required|string|max:20',
        ]);

        // Create a new student record
        Student::create($validatedData);

        // Redirect to a success page or wherever you need
        return redirect('/students')->with('success', 'Student record added successfully');
    }
    public function showStudents()
{
    $students = Student::all(); // Assuming you have a Student model

    return view('students', ['students' => $students]);
}
public function editStudent($id)
{
    $student = Student::findOrFail($id);

    return view('edit-student-form', ['student' => $student]);
}

public function updateStudent(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'class' => 'required|string|max:50',
        'division' => 'required|string|max:10',
        'roll_number' => 'required|string|max:20',
    ]);

    Student::where('id', $id)->update($validatedData);

    return redirect('/students')->with('success', 'Student record updated successfully');
}

public function deleteStudent($id)
{
    Student::findOrFail($id)->delete();

    return redirect('/students')->with('success', 'Student record deleted successfully');
}

}
