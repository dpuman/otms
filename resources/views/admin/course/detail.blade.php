@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header bg-dark text-white">Course Details</div>
                <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{$course->title}}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{$course->category_id}}</td>
                    </tr>
                    <tr>
                        <th>Teacher</th>
                        <td>{{$course->teacher_id}}</td>
                    </tr>
                    <tr>
                        <th>Objective</th>
                        <td>{{$course->objective}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>DESCRIPTION</td>
                    </tr>
                    <tr>
                        <th>Starting Date</th>
                        <td>{{$course->starting_date}}</td>
                    </tr>
                    <tr>
                        <th>Fee</th>
                        <td>{{$course->fee}}</td>
                    </tr>
                    <tr>
                        <th>image</th>
                        <td>
                            <img src="{{asset('/')}}{{$course->image}}" alt="" height="100" width="100">
                        </td>
                    </tr>
                    <tr>
                        <th>Hit Count</th>
                        <td>{{$course->hit_count}}</td>
                    </tr>
                    <tr>
                        <th>Offer Status</th>
                        <td>{{$course->offer_status}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{$course->status}}</td>
                    </tr>
                </table>

                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
