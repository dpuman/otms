@extends('website.master')
@section('title')
    Course Enroll Page
@endsection

@section('body')
    <section class="py-5 bg-white">
        <div class="container">


            <div class="row mt-3">


                <div class="col-md-8 mx-auto">
                    <div class="card border-0 shadow h-100">
                        <div class="bg-dark text-white text-center py-1 display-6">Course Enroll Form</div>
                        <div class="card-body">

                            <form action="{{route('training.new-enroll',['id'=>$id])}}" method="post"  >
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                        <span class="text-warning">{{$errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                        <span class="text-warning">{{$errors->has('email') ? $errors->first('email') : '' }}</span>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Payment Type</label>
                                    <div class="col-md-9">
                                        <label for=""><input checked value="1" type="radio" class="" name="payment_type">Cash On Delivery</label>
                                        <label for=""><input value="2" type="radio" class="" name="payment_type">Online</label>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" name="" value="Enroll Now">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>




@endsection
