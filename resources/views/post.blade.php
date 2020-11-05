@extends('layouts.main')
@section('title','Add post')
@section('content')

<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                    <div class="card-header">
                       <a href="/add-post" class="btn btn-success"> Add new Post </a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_delete'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_delete')}}
                            </div>
                        @endif
                        <table class="table table-striped table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">  {{$post->id}}</th>
                                    <td>  {{$post->title}}</td>
                                    <td>  {{$post->body}}</td>
                                    <td>
                                        <a href="/post/{{$post->id}}" class="btn btn-info" >Deatils</a>
                                        <a href="/update-post/{{$post->id}}" class="btn btn-warning" >Update</a>
                                        <a href="/delete-post/{{$post->id}}" class="btn btn-danger" >Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
            </div>
        </div>
    </div>
</section>

@endsection
