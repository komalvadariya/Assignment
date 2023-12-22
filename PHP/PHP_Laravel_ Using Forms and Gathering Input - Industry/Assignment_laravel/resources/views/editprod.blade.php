@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center">PRODUCT FORM</h2>
        <form action="/updateproduct/{{$productById['id']}}" method="post" enctype="multipart/form-data">
            @csrf
            {{--dd($productById['product_title'])--}}
            <div class="row">
                <div class="col-6 offset-3">
                    <label for=product_title" class="label-control mb-1">product_title</label>
                    <input type="text" class="form-control" name="product_title" id="product_title" value="{{$productById['product_title']}}">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for=product_discripation" class="label-control mb-1">product_discripation</label>
                    <input type="text" class="form-control" name="product_decription" id="product_discripation" value="{{$productById['product_decription']}}">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for="price" class="label-control mb-1">price</label>
                    <input type="tel" class="form-control" name="price" id="price" value="{{$productById['price']}}">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for="quantity" class="label-control mb-1">quantity</label>
                    <inPut type="tel" class="form-control" name="quantity" id="quantity" value="{{$productById['quantity']}}">
                </div>
                <div class="col-6 offset-3 mt-2">
                    <label for="product_image" class="label-control mb-1">product_image</label>
                    <inPut type="file" class="form-control" name="product_image" id="product_image" value="{{$productById['product_image}']}}">
                </div>
              
                <div class="col-6 offset-3 mt-2">
                    <input type="submit" class="btn btn-success" value="Update" name="addproduct">&nbsp;
                    <input type="reset" class="btn btn-danger" value="CANCEL">
                </div>
            </div>

        </form>
    </div>
</div>
@endsection