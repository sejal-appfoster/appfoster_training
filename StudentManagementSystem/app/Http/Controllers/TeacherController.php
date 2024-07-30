<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers',$teachers);
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message', 'Teacher Addedd!');
    }

    public function show(string $id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    public function edit(string $id)
    {
         $teachers = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    public function update(Request $request, string $id)
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash_message', 'Teacher Updated!');  
    }

    public function destroy(string $id)
    {
        $teachers = Teacher::findOrFail($id); 
        $teachers->delete();
        return redirect('teachers')->with('flash_message', 'Teachers deleted!'); 
    }
}
