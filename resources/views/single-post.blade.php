@extends('layouts.main')
@section('title','Add post')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                        <h5 class="card-title">Post Details</h5>
                   </div>
                   <div class="card-body">
                   <h3>{{$post->title}}</h3>
                   <p>{{$post->body}}</p>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

@endsection
