@extends('website.master')
@section('title')
    Student Dashboard
@endsection

@section('body')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row bg-danger">
                <div class="col-md-3 ">
                    <div class="card card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="" class="nav-link">My Profile</a></li>
                            <li class="list-group-item"><a href="{{route('student.all-courses')}}" class="nav-link">My Course</a></li>
                            <li class="list-group-item"><a href="" class="nav-link">Change Password</a></li>
                            <li class="list-group-item"><a href="" class="nav-link">My Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 ">
                    <div class="card card-body">
                        <h1 class="text-center">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
