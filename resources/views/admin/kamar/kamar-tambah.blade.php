@extends('layouts.layout-admin')
@section('content')
<h1>Tambah Tipe Kamar</h1>
<form action="{{ route('admin.simpan-kamar') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row justify-content-center">
    <div class="mb-3 col-sm-8">
        <label for="exampleInputEmail1" class="form-label">Nama Tipe Kamar : </label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="tipekamar" required>
    </div>
    <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Harga : </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="harga" required>
    </div>
    <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Stock : </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="stock" required>
    </div>
    <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Gambar/foto : </label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="gambar" id="gambar" required>
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
    <a href="{{ route('admin.kamar') }}" class="btn btn-danger">Kembali</a>
</div>
<div class="ms-auto">
    <button type="submit" class="btn btn-primary ">Submit</button>
</div>
</div>
</form>
@endsection