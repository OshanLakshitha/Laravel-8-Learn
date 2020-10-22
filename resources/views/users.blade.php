@extends('layout.master')
@section('title','users')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>User Details</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>email</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($users as $user )
                    <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>

@endsection
