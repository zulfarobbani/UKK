@extends('layouts.layout')
@include('layouts.navbar')
@section('content')
<h1 class="pesan">Pesan kamar</h1>
<form method="post" action="{{ route('tamu.booking') }}">
    @csrf
    <div class="row align-items-end">
        <div class="mb-3 col-sm-4">
            <label for="exampleInputPassword1" class="form-label">Check-in</label>
            <input type="date" name="checkin" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-sm-2"></div>
        <div class="mb-3 col-sm-4">
            <label for="exampleInputPassword1" class="form-label">Check-out</label>
            <input type="date" name="checkout" class="form-control" id="exampleInputPassword1">
        </div>
        {{-- <div class="mb-3 col-sm-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>   --}}
    </div>
    <div class="row justify-content-center">
        <div class="mb-3 col-sm-8">
            <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3 col-sm-8">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-sm-8">
            <label for="exampleInputPassword1" class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-sm-8">
            <label for="exampleInputPassword1" class="form-label">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-sm-8">
            <label for="exampleInputPassword1" class="form-label">Tipe Kamar</label>
            <select class="form-select" name="tipe_kamar" aria-label="Default select example">
                <option hidden>Pilih Tipe Kamar</option>
                @foreach($kamar as $option)
                <option value="{{ $option->id }}">{{ $option->nama_kamar }}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-3 col-sm-8">
            <label for="exampleInputPassword1" class="form-label">Jumlah Kamar</label>
            <input type="text" name="jmlh_kamar" class="form-control" id="exampleInputPassword1">
        </div>
        <input name="user_id" value="{{ auth()->user()->id }}" hidden>
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
    </div>
<div class="d-flex">
    <div class="justify-content-start">
        <a href="{{ route('dashboard') }}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="ms-auto">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
</div>
</form>
@endsection
