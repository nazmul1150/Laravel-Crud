<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //
    public function index(){

        $students = student::all();
        return view('student', ['students' => $students, 'layout' => 'index']);
    }
    public function create(){

        $students = student::all();
        return view('student', ['students' => $students, 'layout' => 'create']);
    }

    public function stordata(Request $req){

        $datastor = new student();
        $datastor->name = $req->input('name');
        $datastor->age = $req->input('age');
        $datastor->phone = $req->input('phone');
        $datastor->speciality = $req->input('speciality');
        $datastor->save();

        return redirect('/');


    }

    public function editShowData($id){

        $student = student::find($id);
        $students = student::all();
        return view('student', ['student'=> $student, 'students'=> $students, 'layout' => 'editShowData']);
    }
    public function editData($id){

        $student = student::find($id);
        $students = student::all();
        return view('student', ['student'=> $student, 'students'=> $students, 'layout' => 'editData']);
    }

    public function updateData(Request $req, $id){

        $dataUpdate = student::find($id);
        $dataUpdate->name = $req->input('name');
        $dataUpdate->age = $req->input('age');
        $dataUpdate->phone = $req->input('phone');
        $dataUpdate->speciality = $req->input('speciality');
        $dataUpdate->save();

        return redirect('/');
    }
    public function deleteData($id){

        $student = student::find($id);
        $student->delete();
        return redirect('/');
    }
}
