@extends('main_layout')
@section('content')
  <form action="{{route('update', $omino['id'])}}" method="post">
    @csrf
    @method('POST')

    <label for="firstname">FIRSTNAME</label>
    <input type="text" name="firstname" value="{{ $omino ['firstname']}}"><br>

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{ $omino ['lastname']}}"><br>

    <label for="address">ADDRESS</label>
    <input type="text" name="address" value="{{ $omino ['address']}}"><br>

    <label for="code">CODE</label>
    <input type="text" name="code" value="{{ $omino ['code']}}"><br>

    <label for="state">STATE</label>
    <input type="text" name="state" value="{{ $omino ['state']}}"><br>

    <label for="phonenumber">PHONENUMBER</label>
    <input type="text" name="phonenumber" value="{{ $omino ['phonenumber']}}"><br>

    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{ $omino ['role']}}"><br>

    <input type="submit" name="submit" value="UPDATE">
  </form>

@endsection
