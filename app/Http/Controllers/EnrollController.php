<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index($id)
    {
        return view('website.enroll.index',['id'=>$id]);
    }

    public function newEnroll(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required|alpha',
            'email'=>'required'
        ],[
            'name.required' =>'Vai khali raikhen na',
            'name.alpha'=>'Afa number diyen na'
        ]);
        return $request->all();
    }
}
