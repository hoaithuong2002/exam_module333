@extends('layouts.master')
@section('content ')
    <div class="row">
        <div class="card">
            <form method="post" action="{{route('category.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong> Edit Coffer </strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Coffer <i class="contact-index-index ">*</i>
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
                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Update </button>
                </div>
            </form>

        </div>
    </div>

@endsection
