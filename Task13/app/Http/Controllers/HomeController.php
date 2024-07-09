<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employes;

class HomeController extends Controller
{
    public function upload(Request $request){
        $employes = new employes;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employes,email',
            'phone' => 'required|string|max:20',
            'designation' => 'required|string|max:255',
            'project' => 'required|string|max:255',
        ]);

    $employes->name=$request->name;
    $employes->email=$request->email;
    $employes->phone=$request->phone;
    $employes->designation=$request->designation;
    $employes->project=$request->project;

    $employes->save();

    return redirect()->back();
   // return view('home');
}
      public function view(){

        $data = employes::all();
        return view('display',compact('data'));
      }  
      public function delete($id){
        $data=employes::find($id);
        $data->delete();
        return redirect()->back();
      }

      public function search(Request $request){
        $search = $request->search;
        $data = employes::where('name','Like','%'.$search.'%')->get();

        return view('display',compact('data'));
      }

      public function update_view($id){

        $employes = employes::find($id);
        return view('update_page',compact('employes'));
      }

      public function update(Request $request,$id){
         $employes = employes::find($id);
         $employes->name=$request->name;
         $employes->email=$request->email;
         $employes->phone=$request->phone;
         $employes->designation=$request->designation;
         $employes->project=$request->project;

        
         $employes->save();

         return redirect("http://127.0.0.1:8000/project");


      }
}
