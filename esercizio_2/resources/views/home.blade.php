@extends('main_layout')
@section('content')
  <a href="{{route('create')}}"><h2>CREATE NEW</h2></a>
  @foreach ($omini as $omino)
    <a href="{{ route('show', $omino['id'])}}">
    <p>{{$omino['firstname']}} {{$omino['lastname']}}</p>
    </a>
  @endforeach
@endsection
