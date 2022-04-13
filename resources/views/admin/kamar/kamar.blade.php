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
        <th scope="col">Nama Kamar</th>
        <th scope="col">Harga</th>
        <th scope="col">Stock</th>
        {{-- <th scope="col">Dipakai</th>
        <th scope="col">Dipesan</th> --}}
        <th scope="col">Gambar</th>
        <th scope="col" colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($kamar as $no => $item)
      <tr>
        <th scope="row">{{ $no+1 }}</th>
        <td>{{ $item->nama_kamar }}</td>
        <td class="harga">{{ $item->harga }}</td>
        <td>{{ $item->stock }}</td>
        {{-- <td>{{ $item->dipakai }}</td>
        <td>{{ $item->dipesan }}</td> --}}
        <td><img class="img-kamar" src="{{ asset('storage/uploaded/'. $item->gambar) }}" alt="Gambar upload"></td>
        <td><a class="btn btn-primary" href="/admin/kamar/edit/{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>Edit</a> 
      <a class="btn btn-danger" href="/admin/kamar/hapus/{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
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
      <div class="ms-auto"><a class="btn btn-primary rounded-circle" href="{{ route('admin.tambah-kamar') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
      </svg></a></div>
  </div>
@endsection
@push('tambahan')
  {{-- <script src="{{ asset('js/accounting.min.js') }}">
  </script>
  <script>
    accounting.formatMoney(.harga, {
      symbol : Rp,
      precision : 0,
      thousand : '.'
    });
  </script> --}}
@endpush