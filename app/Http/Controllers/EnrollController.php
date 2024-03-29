<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Enroll;
use App\Models\Student;
use Hamcrest\Thingy;
use Illuminate\Http\Request;
use Session;
use Mail;

class EnrollController extends Controller
{
    public $student,$enroll,$emailData=[];

    public function index($id)
    {
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index',['id'=>$id,'student'=>$this->student]);
    }

    public function newEnroll(Request $request,$id)
    {
        if(Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
            $this->validate($request,
                [
                    'name'=>'required|regex:/^[a-zA-z- ]+$/',
                    'email'=>'required|unique:students,email',
                    'mobile'=>'required|unique:students,mobile',
                ],
                [
                    'name.required'=>'vai ..khali raikhen na',
                    'name.regex'=>'afa number diyen na',
                    'email.required'=>'vai eta ki korla',
                    'email.unique'=>'Masud tumi ki konodin valo hoba na',
                ]);

            $this->student = Student::newStudent($request);
        }
        $this->enrollExist = Enroll::where(['student_id'=>$this->student->id,'course_id'=>$id])->first();

        if($this->enrollExist)
        {
            return redirect()->back()->with('message','You already enroll to this course');
        }
        $this->enroll=  Enroll::newEnroll($request,$this->student->id,$id);

        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);

        //Mail
            $this->emailData=[
                'name' =>$this->student->name,
                'login_url' => 'http://127.0.0.1:8000/login-registration',
                'email'=>$this->student->email,
                'password' => $this->student->mobile
            ];

            Mail::to($this->student->email)->send( new EnrollConfirmationMail($this->emailData));
        //Mail
        return redirect('/training-complete-enroll/'.$this->enroll->id);
    }

    public function completeEnroll($id)
    {
        return view('website.enroll.complete-enroll',['enroll'=>Enroll::find($id)]);
    }


}
