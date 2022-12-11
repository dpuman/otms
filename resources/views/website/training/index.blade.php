@extends('website.master')
@section('title')
    All Training
@endsection

@section('body')



    <section class="py-5 bg-white">
        <div class="container">
            <div class="row bg-danger">
                <div class="col ">
                    <div class="rounded-0 card card-body text-center border-0">
                        <h3 class="">All Training</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                @foreach($courses as $course)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{asset('/')}}{{$course->image}}" alt="">
                        <div class="card-body">
                            <h4>{{$course->title}}</h4>
                            <p class="mb-0">TK. {{$course->price}}</p>
                            <p >Starting Date: {{$course->starting_date}}</p>
                            <hr/>
                            <a href="{{route('training.detail',['id'=>$course->id])}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col">
                    <div class="float-end">
                        {{$courses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
