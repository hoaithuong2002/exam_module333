@extends('layouts.master')
@section('content ')
    <div style="display: block; position: relative">
        <div class="row p-4">
            <div class="col col-4">
                <div class="card">
                    <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header"><strong>Add Author</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Name Author <i class="contact-index-index ">*</i>
                                </label>
                                <input value="{{old('name')}}" type="text" name="name"
                                       class="form-control  @error('name') border-danger  @enderror">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="desc" class=" form-control-label">Description<i
                                                class="contact-index-index ">*</i></label>
                                        <input type="number" id="desc" name="desc"
                                               class="form-control @error('desc') border-danger @enderror">
                                        @error('desc')
                                        <p class="text-danger"> {{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-lg btn-block">Add Coffer </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col col-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <div class="row box-top">
                            <div class="showing">
                                <span class="showinfo-1">Show</span>
                                <select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table"
                                        class="form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="-1">All</option>
                                </select>
                                <span class="showinfo-2">entries</span>
                            </div>
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
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->desc}}</td>
                                    <td>
                                        <div class="action-box">
                                            {{--                                                <button type="button" id="{{$category->id}}" class="button-show-author btn btn-outline-warning">--}}
                                            {{--                                                    Show--}}
                                            {{--                                                </button>--}}
                                            <button style="display: none" type="button" id="show-author" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">

                                            </button>
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
                        <div class="d-flex justify-content-center">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
