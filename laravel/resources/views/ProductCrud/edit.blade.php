@extends('layouts.mainlayout')
@section('title', 'Create Product')
@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Edit Product</h3>
                        <form action="/Product/{{ $product['ProductId'] }}" method="POST">
                        @csrf
                        @method('Put')
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductCode" id="ProductCode" value="{{ $product['ProductCode'] }}">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductName" id="ProductName" value="{{ $product['ProductName'] }}">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ProductDescription" id="ProductDescription" value="{{ $product['ProductDescription'] }}">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="PricePrice" id="ProductPrice" value="{{ $product['ProductPrice'] }}">
                            </div>
                            <div class="col-md-12">
                                @if($product['IsActive'] == 0)
                                <input class="form-control" type="checkbox" name="IsActive" id="IsActive" value="1">
                                @elseif($product['IsActive'] == 1)
                                <input class="form-control" type="checkbox" name="IsActive" id="IsActive" value="1" checked>
                                @endif
                                Is Active
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