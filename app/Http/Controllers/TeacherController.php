<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers;
    public function index(){
        return view('admin.teacher.index');
    }

    public function create(Request $request){
        Teacher::createTeacher($request);
        return redirect('/teachers/manage')->with('message',"teacher added successfully");

    }

    public function manage(){
        $this->teachers = Teacher::orderBy('id','desc')->get();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public function editTeacher($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public function updateTeacher(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect('/teachers/manage')->with('message','Updated successfully');
    }

    public function deleteTeacher($id){
        Teacher::deleteTeacher($id);
        return redirect('/teachers/manage')->with('message',"Teacher Deleted");
    }
}
