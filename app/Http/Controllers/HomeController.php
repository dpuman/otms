<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Course;
use Illuminate\Http\Request;
use Mail;
class HomeController extends Controller
{
    private $data =[];

    public function sendMail()
    {
        $this->data=['name'=>'BITM','course'=>'Laravel'];
        Mail::to('dipankarbarman.mail@gmail.com')->send(new EnrollConfirmationMail($this->data));
        return "<h1> Success </h1>";
    }

    public function index(){
        return view('website.home.index',
            ['recent_courses'=>Course::where('status',1)->orderBy('id','desc')->take(8)->get(),
                'offer_courses'=>Course::where('offer_status',1)->orderBy('id','desc')->take(4)->get()

            ]);
    }
    public function about(){
        return view('website.about.index');
    }
    public function categoryTraining($id){
        $this->courses = Course::where('category_id',$id)->orderBy('id','desc')->get();
        return view('website.category.index',['courses'=>$this->courses]);

    }
    public function allTraining(){
        return view('website.training.index',['courses'=>Course::where('status',1)->orderBy('id','desc')->simplePaginate(2)]);
    }
    public function trainingDetail($id){
        return view('website.training.detail',['course'=>Course::updateHitCount($id)]);
    }
    public function contact(){
        return view('website.contact.index');
    }

    public function loginRegistration()
    {
        return view('website.auth.index');
    }


}
