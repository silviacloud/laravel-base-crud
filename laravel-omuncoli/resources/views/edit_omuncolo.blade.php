@extends('layouts.layout')

@section('content')

  <main>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form action="{{route('update', $omuncolo['id'])}}" method="post">
      @csrf
      @method('POST')

      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" value="{{$omuncolo['firstname']}}"><br>

      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" value="{{$omuncolo['lastname']}}"><br>

      <label for="role">Role</label>
      <input type="text" name="role" value="{{$omuncolo['role']}}"><br>

      <label for="phone_number">Phone Number</label>
      <input type="text" name="phone_number" value="{{$omuncolo['phone_number']}}"><br>

      <label for="address">Address</label>
      <input type="text" name="address" value="{{$omuncolo['address']}}"><br>

      <label for="post_code">Post Code</label>
      <input type="text" name="post_code" value="{{$omuncolo['post_code']}}"><br>

      <label for="state">State</label>
      <input type="text" name="state" value="{{$omuncolo['state']}}"><br>
      <br>

      <input type="submit" name="submit" value="UPDATE">


    </form>
  </main>

@endsection
