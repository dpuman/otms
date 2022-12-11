@extends('website.master')
@section('title')
    Training Detail
@endsection

@section('body')
    <section class="py-5 bg-white">
        <div class="container">


            <div class="row mb-3">
                <div class="card mx-0 ">
                    <div class="row">
                        <div class="col-md-6  card-body">
                            <img src="{{asset('/')}}{{$course->image}}" alt="" class="card-img">
                        </div>

                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="card-header bg-transparent text-center"><h3>Course details</h3></div>
                                <div class="card-body">
                                    <p>{{$course->objective}}</p>

                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Course Name :</h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$course->title}}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Teacher Name :</h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$course->teacher->name}}</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Start Date :</h6></label>
                                        <div class="col-md-9">
                                            <h6>{{$course->starting_date}}</h6>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3"><h6>Course fee :</h6></label>
                                        <div class="col-md-9">
                                            <h6>TK. {{$course->fee}}</h6>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <a href="{{route('training.enroll',['id'=>$course->id])}}" class="btn btn-info shadow">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col">
                        <div class="card border-0 shadow h-100">
                            <div class="bg-dark text-white text-center py-1 display-6">Training Detail</div>
                            <div class="card-body">
                                <p>{!! $course->description !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>




@endsection
