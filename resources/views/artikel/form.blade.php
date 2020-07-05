@extends('layouts.master')

@section('content')
  <div class="mx-2 py-2">
    <form action="/artikel" method="POST">
      @csrf
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
      </div>
      <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" id="isi" name="isi" rows="13"></textarea>
      </div>
      <input type="hidden" class="form-control" id="slug" name="slug" value="slug">
      <input type="hidden" class="form-control" id="tag" name="tag" value="default">
      <button type="submit" class="btn btn-primary mb-2">Submit Artikel</button>
    </form>
  </div>
@endsection
