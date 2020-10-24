<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //get all data students table
    /*public function fetchStudents(){
        $student=Student::all();
        return $student;
    }*/

    //get one student filler by id
   /* public function fetchStudents(){
        $student=Student::where('id',3)->get();
        return $student;
    }*/

    public function fetchStudents(){
        $student=Student::whereBetween('id',[33,44])->orderBy('id','DESC')->get();
        return $student;
    }

}
