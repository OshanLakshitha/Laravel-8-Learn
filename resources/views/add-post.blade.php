@extends('layouts.main')
@section('title','Add post')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                        <h5 class="card-title">Add Post</h5>
                   </div>
                   <div class="card-body">
                       @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                 {{Session::get('post_created')}}
                        @endif

                       </div>
                        <form method="POST" action="{{route('post.create')}}">
                           @csrf
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="postTitle" class="form-control" placeholder="enter post title"/>
                            </div>

                            <div class="form-group">
                                <label for="body">Post Description</label>
                                <textarea name="postBody" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="card-footer text-muted">
                               <button class="btn btn-success" type="submit">Save</button>
                            </div>

                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection
