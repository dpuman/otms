<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class AdminCourseController extends Controller
{
    public function index(){
        return view('admin.course.index',['courses'=>Course::orderBy('id','desc')->get()]);
    }

    public function detail($id){
        return view('admin.course.detail',['course'=>Course::find($id)]);
    }

    public function updateStatus($id){

        return redirect('/admin/manage-course')->with('message',Course::updateStatus($id));
    }

    public function updateOfferStatus($id){

        return view('admin.course.offer-edit',['course'=>Course::find($id)]);
    }

    public function update(Request $request,$id){
        Course::updateOfferStatus($request,$id);
        return redirect('/admin/manage-course')->with('message','offer added');
    }



}
