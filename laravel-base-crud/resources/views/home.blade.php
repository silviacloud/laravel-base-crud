@extends('layout')

@section('main')
  <main>
    @foreach ($cagnolini as $cagno)

      <a href="{{route('gooddoggo', $cagno['id'])}}">{{$cagno['id']}}</a> <br>
      {{$cagno['name']}} <br>

    @endforeach
  </main>
@endsection
