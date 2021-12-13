@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Harga Komponen Pembuatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Harga Komponen</a></li>
              <li class="breadcrumb-item active">Component Price</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="/harga_komponen/tambah" class="btn btn-block btn-secondary">Tambah Data</a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px" class="text-center">No</th>
                <th class="text-center">Produk</th>
                <th class="text-center">Nama Komponen</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Harga</th>
                <th style="width: 20%" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($harga_komponen as $hk)
                 <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $hk->product }}</td>
                    <td class="text-center">{{ $hk->komponen }}</td>
                    <td class="text-center">{{ $hk->jumlah }}</td>
                    <td class="text-center">{{ $hk->harga }}</td>
                    <td class="text-center">
                        <a href="/harga_komponen/edit/{{ $hk->id_harga_komponen }}" class="text-primary text-bold"><i class="fa fa-edit" style="padding-right: 5px;"></i>Edit</a>
                        |
                        <a href="/harga_komponen/hapus/{{ $hk->id_harga_komponen }}" class="text-red text-bold"><i class="fa fa-trash" style="padding-right: 5px;"></i>Hapus</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{-- <div class="card-footer">
          <h3 class="card-title"><a href="" class="btn btn-block btn-secondary">Kembali</a></h3>
        </div> --}}
      </div>
    </section>
@endsection
 