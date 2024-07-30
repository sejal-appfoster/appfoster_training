<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students',$students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Addedd!');
    }

    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit(string $id)
    {
         $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');  
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id); 
        $student->delete();
        return redirect('students')->with('flash_message', 'Student deleted!'); 
    }
}
