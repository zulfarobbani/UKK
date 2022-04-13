@extends('layouts.layout')
@section('content')
<div class="row">
  @foreach ($kamar as $item)
      
  
<div class="col-sm-5 ms-2">
<div class="card card-main" >
  <img class="img-fluid" src="{{ asset('storage/uploaded/'.$item->gambar) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $item->nama_kamar }}</h5>
    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     --}}
     <table class="card-text">
        <tr>
          <td>Fasilitas : </td>
        </tr>
        @foreach($item->faskam() as $f)
        <tr>
          <td>{{ $f->nama_faskam }}</td>
        </tr>
        @endforeach 
        <tr>
          <td> <h3>Harga : Rp.{{ $item->harga }}</h3> </td>
        </tr>
     </table>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@endforeach


</div> 


</div>
@endsection