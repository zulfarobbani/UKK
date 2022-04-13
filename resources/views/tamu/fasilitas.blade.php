@extends('layouts.layout')
@section('content')
<div class="row">
@foreach($fashot as $item)
<div class="col-sm-5 ms-2 mb-4">
    <div class="card card-main">
      <img src="{{ asset('storage/uploaded.fashot/'.$item->gambar) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $item->nama_fashot }}</h5>
        <p class="card-text">{{ $item->deskripsi }}.</p>
      </div>
    </div> 
    
    </div> 
@endforeach
</div>
@endsection