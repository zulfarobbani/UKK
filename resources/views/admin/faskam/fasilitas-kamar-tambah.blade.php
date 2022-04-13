@extends('layouts.layout-admin')
@section('content')
<h1>Tambah Fasilitas Kamar</h1>
<form action="{{ route('admin.simpan-faskam') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row justify-content-center">
    <div class="mb-3 col-sm-8">
        <label for="exampleInputEmail1" class="form-label">Nama Tipe Kamar : </label>
        <select class="form-select" name="tipekamar" id="category">
            <option hidden>Pilih Tipe Kamar</option>
            @foreach($faskam as $itemfaskam)
            <option value="{{ $itemfaskam->id }}">{{ $itemfaskam->nama_kamar }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Nama Fasilitas : </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_faskam" required>
    </div>
    
    {{-- <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Tipe Kamar</label>
        <select class="form-select" aria-label="Default select example">
            <option selected></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
    </div> --}}
    {{-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
</div>
<div class="d-flex">
<div class="justify-content-start">
    <a href="{{ route('admin.faskam') }}" class="btn btn-danger">Kembali</a>
</div>
<div class="ms-auto">
    <button type="submit" class="btn btn-primary ">Submit</button>
</div>
</div>
</form>
@endsection
