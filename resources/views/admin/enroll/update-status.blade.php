@extends('admin.master')
@section('title')
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll Status update Form</h4>
                    <p class="card-title-desc">{{Session::get('message')}}
                    </p>

                    <form action="{{route('admin.update-enroll-status',['id'=>$enroll->id])}}" method="POST">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="us" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input readonly value="{{$enroll->course->title}}"  type="text"  class="form-control" id="us">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="us" class="col-sm-3 col-form-label">Enroll Status</label>
                            <div class="col-sm-9">
                                <select name="enroll_status" required class="form-control">
                                    <option value="" disabled selected> -- Enroll Status --</option>
                                    <option name="enroll_status" value="Pending" {{ $enroll->enroll_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option name="enroll_status" value="Processing" {{ $enroll->enroll_status == 'Processing' ? 'selected' : '' }} >Processing</option>
                                    <option name="enroll_status" value="Complete" {{ $enroll->enroll_status == 'Complete' ? 'selected' : '' }} >Complete</option>
                                    <option name="enroll_status" value="Cancel" {{ $enroll->enroll_status == 'Cancel' ? 'selected' : '' }} >Cancel</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="us" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input  type="submit"  class="btn btn-success px-5" value="update">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
