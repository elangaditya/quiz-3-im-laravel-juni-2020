@extends('layouts.master')

@section('content')
  <div class="mx-2 justify-content-center">
    <img src="{{asset('/images/erd.jpg')}}" class="img-fluid">
  </div>
  <div class="m-2">
    <a href="/artikel"><button type="button" class="btn btn-primary">Go to Artikel</button></a>
  </div>

@endsection
