@extends('main_layout')
@section('content')
  <form action="{{route('store')}}" method="post">
    @csrf
    @method('POST')

    <label for="firstname">FIRSTNAME</label>
    <input type="text" name="firstname" value=""><br>

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value=""><br>

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value=""><br>

    <label for="code">CODE</label>
    <input type="text" name="code" value=""><br>

    <label for="state">STATE</label>
    <input type="text" name="state" value=""><br>

    <label for="phonenumber">PHONENUMBER</label>
    <input type="text" name="phonenumber" value=""><br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value=""><br>

    <input type="submit" name="submit" value="CREATE">
  </form>

@endsection
