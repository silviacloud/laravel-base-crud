@extends('layout')

@section ('main')
  <main>
    <h2>{{$cagno['name']}}</h2><br>
    <p>Razza: {{$cagno['type']}}</p><br>
    <p>Peso: {{$cagno['weight']}}</p> <br>
    <p>Altezza: {{$cagno['height']}}</p>
  </main>
@endsection
