@extends('layouts.mainlayout')
@section('title', 'Create Product')
@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Product</h3>
                        <form action="/Product/" method="POST">
                        @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductCode" id="ProductCode" placeholder="Product Code">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductName" id="ProductName" placeholder="Product Name">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductDescription" id="Description" placeholder="Description">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductPrice" id="Price" placeholder="Price">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="checkbox" name="IsActive" id="IsActive" value="1">Is Active
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" value="add" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection