@extends('cms.parent')

@section('css')

@endsection
@section('page-big-name', 'Categories')
@section('small-page-name', 'Create')
@section('content')
    <div class="form-group mb-8">

        <div class="col-md-12 form-center">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Base Controls</h3>

                </div>
                <!--begin::Form-->
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_name">Category Name
                                <span class="text-danger">*</span></label>
                            <input type="text" id="category_name" value="{{old('category_name')}}" name="category_name"class="form-control" placeholder="Enter Category Name" />
                            <span class="form-text text-muted">Please Enter The Category Name</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Info
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="category_info" value="{{old('category_info')}}" id="category_info" placeholder="Category Info" />
                        </div>

                        <div class="col-3">
                            <label for="exampleInputPassword1">Make Category Visible
                                <span class="text-danger">*</span></label>
                            <span class="switch switch-icon">
                                <label>
                                    <input type="checkbox" name="is_visible" checked="checked" name="select">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <!--begin: Code-->
                        <div class="example-code mt-10">
                            <div class="example-highlight">
                                <pre style="height:400px">

                        </div>
                    </div>
                </div>
                    <!--end: Code-->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
            </form>

            <!--end::Form-->
            @if ($errors->any())

            @endif

        </div>

@endsection

@section('js')

@endsection
