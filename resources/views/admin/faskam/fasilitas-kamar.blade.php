@extends('layouts.layout-admin')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>

@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Fasilitas</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($faskam as $no => $item)
      <tr>
        <th scope="row">{{ $no+1 }}</th>
        <td>{{ $item->nama_faskam }}</td>
        <td>{{ $item->nama_kamar }}</td>
        
        <td> 
      <a class="btn btn-danger" href="/admin/fasilitas-kamar/hapus/{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
      </svg>Hapus</a></td>
        <td></td>
      </tr>
      @empty
      <tr>
        <td colspan="8" style="text-align: center">Data Masih Kosong</td>
    </tr>
      @endforelse
      
    </tbody>
  </table>
  <br>
  <div class="d-flex">
      <div class="ms-auto"><a class="btn btn-primary rounded-circle" href="{{ route('admin.tambah-faskam') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
      </svg></a></div>
  </div>
@endsection