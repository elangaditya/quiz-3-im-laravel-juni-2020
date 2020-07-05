@extends('layouts.master')

@section('content')
  <div class="mx-2 py-2">
    <h1>Artikel</h1>
    @foreach ($artikel as $key => $item)
      <h3>{{$item->judul}}</h3>
      <p>{{substr($item->isi, 0, 500)}}...</p>
      <a href="/artikel/{{$item->id}}">Baca lebih lanjut</a>
      <hr>
    @endforeach
  </div>
@endsection
