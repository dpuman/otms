@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Course Offer Status</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <form action="{{route('admin.update-course-offer-status.update',["id"=>$course->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input value="{{$course->title}}" type="text" readonly class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Actual Fee</label>
                            <div class="col-sm-9">
                                <input value="{{$course->fee}}" type="number" readonly name="number" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Offer Fee</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{$course->offer_fee}}" name="offer_fee" class="form-control" id="horizontal-password-input">
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file"  name="image"  class="form-control-file mb-2" id="horizontal-image-input">
                                <img src="{{asset('/')}}{{$course->offer_image}}" alt="Offer Image" width="100" height="100">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" value="{{$course->date}}" name="date" class="form-control" id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create Offer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
