@extends('layouts.app')
@section('content')
<div class="container col-8 pt-3">
    <form method="post" action="/post" enctype="multipart/form-data" action="#">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>
                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file" id="image" name="image" />
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 float-right">
        <button type="submit" class="btn btn-primary btn-sm">Add New Post</button>     
    </div>
    </form>
</div>
@endsection
