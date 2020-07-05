@extends('layouts.master')

@section('content')
  <div class="mx-3 py-2">
    @foreach ($artikel as $key => $item)
      <h1>{{$item->judul}}</h1>
      <span style="white-space: pre-line">{{$item->isi}}</span><br>
      <a href='/artikel/{{$item->id}}/edit'>EDIT</a>
    @endforeach
  </div>
@endsection
