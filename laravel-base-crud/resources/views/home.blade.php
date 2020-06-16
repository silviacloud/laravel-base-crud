@extends('layout')

@section('main')
  <main>
    @foreach ($cagnolini as $cagno)

      <a href="{{route('gooddoggo', $cagno['id'])}}"><i class="fas fa-dog"></i> {{$cagno['id']}}</a>
      <p>{{$cagno['name']}}</p>

    @endforeach
  </main>
@endsection
