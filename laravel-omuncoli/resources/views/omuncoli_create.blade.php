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
      <input type="text" name="" value=""><br>

      <label for="lastname">Lastname</label>
      <input type="text" name="" value=""><br>

      <label for="role">Role</label>
      <input type="text" name="" value=""><br>

      <label for="phone_number">Phone Number</label>
      <input type="text" name="" value=""><br>

      <label for="address">Address</label>
      <input type="text" name="" value=""><br>

      <label for="post_code">Post Code</label>
      <input type="text" name="" value=""><br>

      <label for="state">State</label>
      <input type="text" name="" value=""><br>
      <br>

      <input type="submit" name="submit" value="CREATE">


    </form>
  </main>

@endsection
