@extends('layouts.master')

@section('content')
  <div class="mx-2 py-2">
    <h1>Artikel</h1>
    <a href="/create" class="float-right"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></a>
    <br>
    @foreach ($artikel as $key => $item)
      {{-- <h3>{{$item->judul}}</h3>
      <p>{{substr($item->isi, 0, 500)}}...</p>
      <a href="/artikel/{{$item->id}}">Baca lebih lanjut</a> --}}
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title" style="font-size:32px; font-weight:bold">{{$item->judul}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">slug: {{$item->slug}}</h6>
          <p class="card-text">{{substr($item->isi, 0, 500)}}...</p>
          <span>Tags: </span>
            <a href="/artikel"><button type="button" class="btn btn-primary btn-sm">{{$item->tag}}</button></a>
          <br>
          <a href="/artikel/{{$item->id}}" class="card-link">Baca lebih lanjut</a>
        </div>
      </div>
    @endforeach

    @push('script')
      <script>
          Swal.fire({
              title: 'Berhasil!',
              text: 'Memasangkan script sweet alert',
              icon: 'success',
              confirmButtonText: 'Cool'
          })
      </script>
    @endpush
  </div>
@endsection
