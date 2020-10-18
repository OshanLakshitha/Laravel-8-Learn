@include('heades')

<h1>oshan</h1>
<!-- view data -->
@php
   $name='Lakshitha';
@endphp

<h2>{{$name}}</h2>

<!-- view array data -->
 @php
     $fuirts=array('mango','apple','banana','pineapple');

     $age=10;
 @endphp

 @foreach ($fuirts as $fuirt )
 <ul>
    <li>{{$fuirt}}</li>
 </ul>    
 @endforeach

 <br/>

 @for ($i =1 ; $i <=10 ; $i++)
     {{$i}}<br>
 @endfor

 <br/>

 @if(count($fuirts)==1)
    Single fuirt
 @elseif(count($fuirts)>1)
    More than one fuirts
@else
    No fuirts
@endif

<br>

{{$age>=18 ? 'you are adult' : 'you are not adult'}}