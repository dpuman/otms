@extends('website.master')
@section('title')
    Complete Enroll Page
@endsection

@section('body')
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6">Course Enroll Status</div>
                        <div class="card-body">
                            <h4>Congratulation Your registration in complete please wait, We will contact you soon </h4>
                            <p>Registration current status</p>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Enroll status</th>
                                    <th>Payment status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$enroll->course->title}}</td>
                                    <td>{{$enroll->enroll_status}}</td>
                                    <td>{{$enroll->payment_status}}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
