@extends('layouts.app')

@section('content')
<a href="Add">Add</a>
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped">
            {{--$allproduct--}}
            <thead>
                <tr>
                    <th>product_title</th>
                    <th>product_decription</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>Product_Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allproduct as $data)
                <tr>
                    <th>{{ $data->product_title}}</th> <br>
                    <th>{{ $data->product_decription}}</th> <br>
                    <th>{{ $data->price}}</th> <br>
                    <th>{{ $data->quantity}}</th>
                    <th>{{ $data->product_image}}</th>
                    <th>
                        <a href="editproduct/{{ $data->id}}">Edit</a>
                      &nbsp;&nbsp;  <a href="deleteproduct/{{ $data->id}}">Delete</a>
                        </th>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection