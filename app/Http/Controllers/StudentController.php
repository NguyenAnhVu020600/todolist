<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
        return view('index');
    }

    public function getData(){
        $studentModel = new Student();
        $data =  $studentModel->getStudent();
        // đóng gói vào một response JSON và trả về cho client (thông qua API hoặc AJAX request).
        return response()->json($data);
    }
    public function addData(Request $request){
        $studentModel = new Student();
        $result =  $studentModel->addStudent($request->all());
        return $result;
    }

    public function deleteData(Request $request){
        $studentModel = new Student();
        $id =  $request-> id;
        $result =  $studentModel->deleteStudent($id);
        return $result;
    }
}
