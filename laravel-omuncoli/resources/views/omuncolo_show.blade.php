@extends('layouts.layout')

@section('content')

  <main>
    <h1>Omuncolo</h1>

    @if(session('success'))
      <h3>{{ session('success')}}</h3>
    @endif

    <h3>{{$omuncolo['firstname']}} {{$omuncolo['lastname']}}</h3>

    <span>{{$omuncolo['role']}}</span><br>
    <span>{{$omuncolo['phone_number']}}</span><br>
    <span>{{$omuncolo['address']}}</span><br>
    <span>{{$omuncolo['post_code']}}</span><br>
    <span>{{$omuncolo['state']}}</span><br>
    <br>
    <br>

    <a href="{{route ('edit', $omuncolo['id'])}}">EDIT</a>
    <a href="{{route ('destroy', $omuncolo['id'])}}">DELETE</a>

    <div class="">
      <a href="{{ route('home') }}">
        <p>Omuncoli list</p>
      </a>
    </div>

  </main>

@endsection
