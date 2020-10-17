<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

    
<div class="container table-responsive py-5"> 
   <center><h1>Post</h1></center>

   @if(Session::has('post_delete'))
    <div class="alert alert-success" role="alert">
        {{Session::get('post_delete')}}
    </div>
   @endif

    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($post as $onePost )
        <tr>
            <th scope="row">1</th>
            <td>{{$onePost->title}}</td>
            <td>{{$onePost->body}}</td>
            <td>
                <a href="/post/{{$onePost->id}}" class="btn btn-success">View</a>
                <a href="/update-post/{{$onePost->id}}" class="btn btn-primary">edit</a>
                <a href="/postDelete/{{$onePost->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach        
      </tbody>
    </table>
    </div>
</body>
</html>