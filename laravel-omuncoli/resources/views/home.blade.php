@extends('layouts.layout')

@section('content')

  <main>
    <h1>Omuncoli around the world</h1>

    @if(session('success'))
      <h3>{{ session('success')}}</h3>
    @endif

    <a href="{{route ('create')}}">CREATE</a>

    <ul>
      @foreach ($omuncoli as $omuncolo)
        <li>
          <a href="{{route('show', $omuncolo['id'])}}">{{$omuncolo['firstname']}} {{$omuncolo['lastname']}}</a>
          </li>
      @endforeach
    </ul>

  </main>

@endsection
