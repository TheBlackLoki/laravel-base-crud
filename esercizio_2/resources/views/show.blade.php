@extends('main_layout')
@section('content')
    FIRSTNAME: <b> {{$omino -> firstname}}</b> <br>
    LASTNAME: <b> {{$omino -> lastname}}</b> <br>
    ADDRESS: <b> {{$omino -> address}}</b> <br>
    CODE: <b> {{$omino -> code}}</b> <br>
    STATE: <b> {{$omino -> state}}</b> <br>
    PHONENUMBER: <b> {{$omino -> phonenumber}}</b> <br>
    ROLE: <b> {{$omino -> role}}</b> <br>
    <a href="{{route('destroy',$omino['id'])}}">DELETE ME</a>
    <a href="{{route('edit', $omino['id'])}}">EDIT ME</a>
@endsection
