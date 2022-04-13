@extends('layouts.layout')
@section('content')
<h1>Daftar pemesanan Kamar</h1>
<div class="row">
@foreach($pesan as $item)
<div class="col-sm-5 ms-2 mb-4">
    <div class="card card-main">
      <div class="card-body">
        <h5 class="card-title">{{ $item->ref_pesan }} </h5>
        <p class="card-text">
            <ul>
            <li>
                nama : {{ $item->nama_pemesan }}
            </li>
            <li>
               email : {{ $item->email }}
            </li>
            <li>
              no hp : {{ $item->no_hp }}
            </li>
            <li>
               nama tamu : {{ $item->nama_tamu }}
            </li>
            <li>
               tipe kamar : {{ $item->nama_kamar }}
            </li>
            <li>
               checkin :  {{ $item->checkIn }}
            </li>
            <li>
                Jumlah kamar : {{ $item->jmlh_kamar }}
            </li>
            <li>
               checkout :  {{ $item->checkOut }}
            </li>
            <li>
              total harga : Rp.{{ $item->total }}
            </li>
            </ul></p>
            <a class="btn btn-primary" target="_blank" href="reservasi/cetak/{{ $item->id }}">cetak</a>
      </div>
    </div> 
    
    </div> 
@endforeach
</div>
@endsection