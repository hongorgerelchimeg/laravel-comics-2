@extends('template.layout')
@section('title', $comic['series'])
@section('content')
  <h1>{{$comic['title']}}</h1>
@endsection
