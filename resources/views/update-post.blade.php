@extends('layouts.main')
@section('title','Add post')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                        <h5 class="card-title">Edit Post</h5>
                   </div>
                   <div class="card-body">
                       @if(Session::has('update'))
                            <div class="alert alert-success" role="alert">
                                 {{Session::get('update')}}
                        @endif

                       </div>
                        <form method="POST" action="{{route('update.post')}}">
                           @csrf
                           <input type="hidden" name="id" class="form-control" value="{{$post->id}}"/>
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="postTitle" class="form-control" value="{{$post->title}}"/>
                            </div>

                            <div class="form-group">
                                <label for="body">Post Description</label>
                                <textarea name="postBody" class="form-control" rows="3">{{$post->body}}</textarea>
                            </div>

                            <div class="card-footer text-muted">
                               <button class="btn btn-success" type="submit">Update Post</button>
                            </div>

                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection
