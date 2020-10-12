<div>
    <h1>this is header</h1>
    <h3>Hello {{$name}}</h3>
    <h3>fruits are
     <ul>
         @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
         @endforeach
     </ul>   
    </h3>
</div>