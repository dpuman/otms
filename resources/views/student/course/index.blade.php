@extends('website.master')
@section('title')
Student All Course
@endsection

@section('body')



<section class="py-5 bg-white">
    <div class="container">
        <div class="row ">
            <div class="col-md-3 ">
                <div class="card card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="" class="nav-link">My Profile</a></li>
                        <li class="list-group-item"><a href="" class="nav-link">My Course</a></li>
                        <li class="list-group-item"><a href="" class="nav-link">Change Password</a></li>
                        <li class="list-group-item"><a href="{{route('student.all-courses')}}" class="nav-link">My Dashboard</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="card card-body">
                    <h4 class="text-center">My All Courses</h4>

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>Starting Date</th>
                            <th>Enroll Status</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($enrolls as $enroll)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><a target="_blank" class="text-decoration-none text-dark" href="{{route('training.detail',['id'=>$enroll->course->id])}}">{{$enroll->course->title}}</a></td>
                            <td>{{$enroll->course->starting_date}}</td>
                            <td>{{$enroll->enroll_status}}</td>
                            <td>{{$enroll->payment_status}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</section>




@endsection
