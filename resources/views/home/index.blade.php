@extends('layout/master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
    <h1>Index View</h1>
    {{-- <p>{{$course}}</p>
    <p>{{$dept}}</p> --}}
    {{-- <p>{{$course1}}</p>
    <p>{{$course2}}</p>
    <p>{{$course3}}</p> --}}
    {{-- <p>{{$product1}}</p>
    <p>{{$product2}}</p> --}}

    {{-- <p>{{$course[0]}}</p>
    <p>{{$course[1]}}</p>
    <p>{{$course[2]}}</p>
    <p>{{$dept[0]}}</p>
    <p>{{$dept[1]}}</p>
    <p>{{$dept[2]}}</p> --}}
    {{-- @foreach ($course as $item)
        {{$item}}
    @endforeach
    @foreach ($dept as $depts)
        {{$depts}}
    @endforeach --}}

   @if ($number>0)
    <h1>Number is positive</h1>
    @else
    <h1>Number is negative</h1>   
   @endif
   
   @if ($marks>=80)
   <h1>A-one grade</h1>
   @elseif ($marks>=70)
   <h1>A grade</h1>
   @elseif ($marks>=60)
   <h1>B grade</h1>
   @elseif ($marks>=50)
   <h1>C grade</h1>
   @elseif ($marks>=40)
   <h1>D grade</h1>
   @else
   <h1>Failed</h1>
   @endif

   @switch($age)
       @case(16)
          <h1>You are under age</h1> 
           @break
       @case(18)
       <h1>You are eligible for vote</h1> 
           @break
           @case(65)
       <h1>You are senior citizen</h1> 
           @break
       @default
       <h1>please enter valid age</h1> 
   @endswitch
   @endsection
</body>
</html>