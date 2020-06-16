@extends('layout')

@section ('main')
  <main>
    <h2>{{$cagno['name']}}</h2><br>
    <p>{{$cagno['type']}}</p><br>
    <p>{{$cagno['weight']}}</p> <br>
    <p>{{$cagno['height']}}</p>
  </main>
@endsection
