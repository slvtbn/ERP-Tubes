@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Varian Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Produk</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="/product/tambah" class="btn btn-block btn-secondary">Tambah Produk</a></h3>

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
                <th class="text-center">ID Produk</th>
                <th class="text-center">Nama Produk</th>
                <th style="width: 20%" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($product as $p)
                 <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $p->id_product }}</td>
                    <td class="text-center">{{ $p->nama_product }}</td>
                    <td class="text-center">
                        <a href="/product/edit/{{ $p->id_product }}" class="text-primary text-bold"><i class="fa fa-edit" style="padding-right: 5px;"></i>Edit</a>
                        |
                        <a href="/product/hapus/{{ $p->id_product }}" class="text-red text-bold"><i class="fa fa-trash" style="padding-right: 5px;"></i>Hapus</a>
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
 