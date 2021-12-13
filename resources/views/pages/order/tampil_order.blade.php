@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Order Produk</a></li>
              <li class="breadcrumb-item active">Product Orders</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="/order/tambah" class="btn btn-block btn-secondary">Tambah Data</a></h3>

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
                <th class="text-center">Id Order</th>
                <th class="text-center">Nama Pemesan</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Telepon</th>
                <th class="text-center">Produk</th>
                <th class="text-center">Jumlah Produk</th>
                <th class="text-center">Tanggal Order</th>
                <th class="text-center">Tanggal Selesai</th>
                <th style="width: 15%" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($order as $o)
                 <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $o->id_order }}</td>
                    <td class="text-center">{{ $o->nama_pemesan }}</td>
                    <td class="text-center">{{ $o->alamat }}</td>
                    <td class="text-center">{{ $o->telepon }}</td>
                    <td class="text-center">{{ $o->product }}</td>
                    <td class="text-center">{{ $o->jumlah_produk }}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($o->tgl_order)->isoFormat('D MMM Y')}}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($o->tgl_selesai)->isoFormat('D MMM Y')}}</td>
                    <td class="text-center">
                        <a href="/order/edit/{{ $o->id_order }}" class="text-primary text-bold"><i class="fa fa-edit" style="padding-right: 5px;"></i>Edit</a>
                        |
                        <a href="/order/hapus/{{ $o->id_order }}" class="text-red text-bold"><i class="fa fa-trash" style="padding-right: 5px;"></i>Hapus</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </section>
@endsection
 