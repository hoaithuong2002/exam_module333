@extends('layouts.master')
@section('content')
    <div class="card">
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-header"><strong>Add Author</strong></div>
            <div class="card-body card-block row justify-content-between">
                <div class="col col-8 col-lg-8">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author <i
                                class="contact-index-index ">*</i>
                        </label>
                        <input value="{{old('name')}}" type="text" name="name"
                               class="form-control  @error('name') border-danger  @enderror">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class=" form-control-label">Price <i
                                class="contact-index-index ">*</i></label>
                        <input type="date" id="price" name="price"
                               class="form-control col-sm-12 @error('price') border-danger @enderror ">
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col col-4 ol-lg-4">
                        <label for="avatars" class=" form-control-label">Image </label>
                        <input accept="image/*" type="file" id="image" name="image"
                               class="form-control @error('image') border-danger  @enderror">@error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                    <div class="row form-group">
                        <div class="col col-6">
                            <div class="form-group">
                                <label for="category_id" class=" form-control-label">Category ID <i
                                        class="contact-index-index ">*</i></label>
                                <input type="number" id="amount" name="amount"
                                       class="form-control @error('category_id') border-danger @enderror">
                                @error('category_id')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success btn-lg btn-block">Add Coffer</button>
        </form>
    </div>


@endsection
