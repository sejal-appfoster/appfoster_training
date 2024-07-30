<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses',$courses);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course Addedd!');
    }

    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!'); 
    }

    public function destroy(string $id)
    {
        $courses = Course::findOrFail($id); 
        $courses->delete();
        return redirect('courses')->with('flash_message', 'Course deleted!'); 
    }
}
