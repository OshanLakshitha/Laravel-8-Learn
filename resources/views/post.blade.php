<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($post as $onePost )
        <h3>{{$onePost->title}}</h3>
        <p>{{$onePost->body}}</p>
    @endforeach
</body>
</html>