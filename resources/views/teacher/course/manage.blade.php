@extends('teacher.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Title</th>
                            <th>Fee</th>
                            <th>Starting Date</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->starting_date}}</td>

                                <td>
                                    <img src="{{asset('/')}}{{$course->image}}" class="img-fluid" alt="" height="100" width="100" >
                                </td>
                                <td>
                                    <a href="{{route('course.edit',['id'=>$course->id])}}" class=" me-3 btn btn-success btn-sm float-left">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('course.delete',['id'=>$course->id])}}" method="post" >
                                        @csrf
                                        <button  type="submit" class="  btn btn-danger btn-sm float-left">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
