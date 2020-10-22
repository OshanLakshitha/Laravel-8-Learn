@extends('layout.master')
@section('title','UploadController')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    File Upload
                </div>
                <div class="card-body">
                <form method="POST" action="{{route('upload.uploadFile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="file">Choose File</label>
                      <input type="file" name="file" id="file" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
