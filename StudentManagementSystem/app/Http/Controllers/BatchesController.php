<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;

class BatchesController extends Controller
{
  
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches',$batches);
    }

    public function create()
    {
        $courses = Course::pluck('name','id');
        return view('batches.create',compact('courses'));
    }

    public function store(Request $request)
    {
        
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');
    }

    public function show(string $id)
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }
    public function edit(string $id)
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    public function update(Request $request, string $id)
    {
        $batches = Batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!'); 
    }

    public function destroy(string $id)
    {
        $batches = Batch::findOrFail($id); 
        $batches->delete();
        return redirect('batches')->with('flash_message', 'Batch deleted!'); 
    }
}
