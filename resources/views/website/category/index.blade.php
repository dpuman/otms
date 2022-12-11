@extends('website.master')
@section('title')
    Training Category
@endsection

@section('body')



    <section class="py-5 bg-white">
        <div class="container">
            <div class="row bg-danger">
                <div class="col ">
                    <div class="rounded-0 card card-body text-center border-0">
                        <h3 class="">{{isset($courses[0]->category) ? $courses[0]->category->name.' Training Course': 'No Course Available' }} </h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                @foreach($courses as $course)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{asset('/')}}website/images/team-1.jpg" alt="">
                                <div class="card-body">
                                    <h4>{{$course->title}}</h4>
                                    <p class="mb-0">{{$course->fee}}</p>
                                    <p >Starting Date: {{$course->starting_date}}</p>
                                    <hr/>
                                    <a href="" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                @endforeach




            </div>
        </div>
    </section>




@endsection
