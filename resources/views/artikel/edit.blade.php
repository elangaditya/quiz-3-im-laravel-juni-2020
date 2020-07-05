@extends('layouts.master')

@section('content')
<div class="mx-2 py-2">
    @foreach ($artikel as $key => $value)
    <form action="/artikel/{{$value->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{$value->judul}}">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="13">{{$value->isi}}</textarea>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="tag" name="tag" value="{{$value->tag}}">
        </div>
        <input type="hidden" class="form-control" id="slug" name="slug" value="slug">
        <input type="hidden" class="form-control" id="id" name="id" value="{{$value->id}}">
        <button type="submit" class="btn btn-primary mb-2">Submit Artikel</button>
    </form>
    @endforeach
</div>
@endsection
