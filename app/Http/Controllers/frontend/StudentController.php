<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    //Show All Student Record
    public function index()
    {
        $students = Student::all();

       return view('frontend.student.index',compact('students'));
    }
    //Show Student Form
    public function create()
    {
        $response = Http::get("https://data.askbhunte.com/api/v1/districts");
        $districts = json_decode($response);

        return view('frontend.student.create',compact('districts'));
    }
    //Save Student Record
    public function store(Request $request)
    {
      $student = new Student();
      $student->name = $request->name;
      $student->roll = $request->roll;
      $student->faculty = $request->faculty;
      $student->batch = $request->batch;
      $student->contact = $request->contact;
      $student->father = $request->father;
      $student->districts = $request->districts;
      $student->email = $request->email;
      $student->save();
      return redirect()->back();


    }
    //Edit Student Record
    public function edit($id)
    {
        $student = student::find($id);
        return view('frontend.student.edit',compact('student'));
    }
    //Update Student Record
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->faculty = $request->faculty;
        $student -> batch = $request->batch;
        $student->contact = $request->contact;
        $student->father = $request->father;
        $student->email = $request->email;
        $student->districts = $request->districts;
        $student->update();
        return redirect()-> back();
    }
    //Show Single Student Record
    public function show($id)
    {
        # code...
    }
    //Delete Student Record
    public function destroy($id)
    {
        # code...
    }


}
