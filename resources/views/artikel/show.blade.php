@extends('layouts.master')

@section('content')
  <div class="mx-3 py-2">
    @foreach ($artikel as $key => $item)
      <h1>{{$item->judul}}</h1>
      <span style="white-space: pre-line">{{$item->isi}}</span><br>
      <p style="font-size:12px; text-align: right" class="mb-0"><em>Submitted: {{$item->created_at}}</em></p>
      <p style="font-size:12px; text-align: right"><em>Last Updated: {{$item->updated_at}}</em></p>
      <a href='/artikel/{{$item->id}}/edit'><button type="submit" class="btn btn-primary mb-2">EDIT</button></a>
      <form action="/artikel/{{$item->id}}" method="POST" class="float-right">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-2">DELETE</button>
      </form>
    @endforeach
  </div>
@endsection
