@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Category Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>



                        <div class="form-group row mb-4">
                            <label for="horizontal-address-input" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea  name="description"  class="form-control" id="horizontal-address-input"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-image-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file"  name="image"  class="form-control-file" id="horizontal-image-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-status-input" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <label for="horizontal-status-input">Active <input checked type="radio" value="1"  name="status"  class="form-control-sm" id="horizontal-status-input"></label>

                                <label for="horizontal-status-input2">Unactive <input type="radio" value="0"  name="status"  class="form-control-sm" id="horizontal-status-input2"></label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
