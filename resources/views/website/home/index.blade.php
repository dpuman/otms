@extends('website.master')
@section('title')
    Best Online Training System in Bangladesh
@endsection

@section('body')

    <div class="carousel slide" data-bs-ride="carousel" id="slider" data-bs-interval="18000" >
        <div class="carousel-inner" >
            @foreach($offer_courses as $key => $courses)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <img src="{{asset('/')}}{{$courses->image}}" alt="" class="w-100" style="height: 550px; object-fit: cover">
                    <div class="carousel-caption">
                        <h3>{{$courses->title}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, vero?</p>
                        <a href="" class="btn btn-dark px-5">Read more</a>
                    </div>
                </div>
            @endforeach

        </div>

        <a href="#slider"  class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#slider"  class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row bg-danger">
                <div class="col ">
                    <div class="rounded-0 card card-body text-center border-0">
                        <h3 class="">Recent Published Course</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                @foreach($recent_courses as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('/')}}{{$course->image}}" alt="">
                            <div class="card-body">
                                <h4>{{$course->title}}</h4>
                                <p class="mb-0">{{$course->fee}}</p>
                                <p >Starting Date: {{$course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('training.detail',['id'=>$courses->id])}}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row bg-danger">
                <div class="col ">
                    <div class="rounded-0 card card-body text-center border-0">
                        <h3 class="">Popular Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-2.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p >Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-2.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p >Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/images/team-2.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Laravel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p >Starting Date: 10-01-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
