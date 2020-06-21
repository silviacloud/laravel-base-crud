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

    <form action="{{route('store')}}" method="post">
      @csrf
      @method('POST')

      <label for="firstname">Firstname</label>
      <input type="text" name="firstname" value="{{old('firstname')}}"><br>

      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" value="{{old('lastname')}}"><br>

      <label for="role">Role</label>
      <input type="text" name="role" value="{{old('role')}}"><br>

      <label for="phone_number">Phone Number</label>
      <input type="text" name="phone_number" value="{{old('phone_number')}}"><br>

      <label for="address">Address</label>
      <input type="text" name="address" value="{{old('address')}}"><br>

      <label for="post_code">Post Code</label>
      <input type="text" name="post_code" value="{{old('post_code')}}"><br>

      <label for="state">State</label>
      <input type="text" name="state" value="{{old('state')}}"><br>
      <br>

      <input type="submit" name="submit" value="CREATE">


    </form>
  </main>

@endsection
