@extends('layouts.master')
@section('content ')
    <div class="col-md-12 m-b-30">
        <h5>Table Cards</h5>
        <div class="table-responsive">
            <table class="table align-td-middle table-card">
                <div class="add-author">
                    <a type="submit" class=" fa-plus-square-o btn btn-outline-success" href="{{route('product.create')}}">Add Author</a>
                </div>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Avatar</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $key=>$product)
                        <td>{{++$key}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{asset('storage/' .$product->image)}}" width="200" alt=""></td>
                        <td>{{$product->categories->name}}</td>
                        <td>
                            <div class="action-box">
                                <a onclick="return confirm('Are you sure delete user: {{ $product->name }}')"
                                   class="btn btn-outline-danger"
                                   href="{{ route('product.delete', $product->id) }}">Delete</a>
                                <a class="btn btn-outline-info"
                                   href="{{ route('prduct.edit', $product->id) }}">Edit</a>
                            </div>
                        </td>
                    @endforeach

                </tbody>
                <tfood>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Avatar</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </tfood>
            </table>

        </div>
    </div>
@endsection
