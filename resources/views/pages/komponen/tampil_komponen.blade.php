@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Komponen Pembuatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Komponen</a></li>
              <li class="breadcrumb-item active">Component</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="/komponen/tambah" class="btn btn-block btn-secondary">Tambah Komponen</a></h3>

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
                <th class="text-center">ID Komponen</th>
                <th class="text-center">Nama Komponen</th>
                <th class="text-center">Satuan</th>
                <th class="text-center">Harga</th>
                <th style="width: 20%" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($komponen as $k)
                 <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $k->id_komponen }}</td>
                    <td class="text-center">{{ $k->nama_komponen }}</td>
                    <td class="text-center">{{ $k->satuan }}</td>
                    <td class="text-center">{{ $k->harga }}</td>
                    <td class="text-center">
                        <a href="/komponen/edit/{{ $k->id_komponen }}" class="text-primary text-bold"><i class="fa fa-edit" style="padding-right: 5px;"></i>Edit</a>
                        |
                        <a href="/komponen/hapus/{{ $k->id_komponen }}" class="text-red text-bold"><i class="fa fa-trash" style="padding-right: 5px;"></i>Hapus</a>
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
 