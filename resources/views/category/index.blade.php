@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <div class="row box-top">
                                <div class="search-box">
                                    <div class="dataTables_filter">
                                        <div class="dataTables_filter">
                                            <form action="{{route('category.search')}}" method="post">
                                                @csrf
                                                <label for="keyword">Search:</label>
                                                <input type="search" id="keyword" name="keyword" class="form-control form-control-sm"
                                                       aria-controls="bootstrap-data-table">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-author">
                                    <a type="submit" class=" fa-plus-square-o btn btn-outline-success" href="{{route('category.create')}}">Add Author</a>
                                </div>
                            </div>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key=>$category)
                                    <tr class="author-list">
                                        <td>{{++$key}}</td>
                                        <td><a href="{{$category->name}}">{{$category->name}}</a></td>
                                        <td>{{$category->amount}}</td>
                                        <td>
                                            <div class="action-box">
                                                <a onclick="return confirm('Are you sure delete user: {{ $category->name }}')"
                                                   class="btn btn-outline-danger"
                                                   href="{{ route('category.delete', $category->id) }}">Delete</a>
                                                <a class="btn btn-outline-info"
                                                   href="{{ route('category.edit', $category->id) }}">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfood>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Action</th>

                                    </tr>
                                </tfood>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>
@endsection
