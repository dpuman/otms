<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class studentAuthController extends Controller
{
    public $student;
    public function login(Request $request)
    {
        $this->student = Student::where('email',$request->email)->first();

        if($this->student)
        {
            if($this->student->status == 1 )
            {
                if(password_verify($request->password,$this->student->password))
                {
                    Session::put('student_id',$this->student->id);
                    Session::put('student_name',$this->student->name);

                    return redirect('/student-dashboard/');
                }
                else
                {
                    return redirect()->back()->with('message','sorry Your Password is invalid');
                }
            }
            else
            {
                return redirect()->back()->with('message','sorry You Are not authorized');

            }
        }
        else
        {
            return redirect()->back()->with('message','sorry Your email address  is invelid');
        }
    }

    public function register(Request $request){}

    public function Dashboard()
    {
        return view('student.dashboard.index');
    }

    public function logout()
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/login-registration');
    }
    public function studentRegistration(Request $request)
    {
        $this->validate($request,
            [
            'name'=>'required|regex:/^[a-zA-Z- ]+$/',
            'email'=>'required|unique:students,email',
            'password'=>'required|min:6',
            ],[
                'name.required'=>'name needed',
                'name.regex'=>'No number',
                'email.required'=>'name needed',
                'email.unique'=>'need unique email',
                'password.required'=>'password needed',
                'password.min'=>'minimum 6 char',
            ]
        );

        $this->student= Student::newStudent($request);

        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);

        return redirect('/student-dashboard/');
    }
}
