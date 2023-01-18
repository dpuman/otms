<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class studentController extends Controller
{
    public function allCourse(){
        return view('student.course.index',[
            'enrolls'=>Enroll::where('student_id',Session::get('student_id'))->orderBy('id','desc')->get()
        ]);
    }
}
