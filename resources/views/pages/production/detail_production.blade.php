@extends('layouts.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Production Proses</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Proses Produksi</a></li>
            <li class="breadcrumb-item active">Production Proses</li>
        </ol>
        </div>
    </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
             <h3 class="card-title">Detail Produksi</h3>
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
                <tbody>
                <tr>
                    <th style="width: 15%">Id Order</th>
                    <td>{{ $production->id_order }}</td>
                </tr>
                <tr>
                    <th>Nama Pemesan</th>
                    <td>{{ $production->nama_pemesan }}</td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>{{ $production->product }}</td>
                </tr>
                <tr>
                    <th>Jumlah Product</th>
                    <td>{{ $production->jlh_product }}</td>
                </tr>
                <tr>
                    <th>Tanggal Order</th>
                    <td>{{\Carbon\Carbon::parse($production->tgl_order)->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <th>Tanggal Selesai</th>
                    <td>{{\Carbon\Carbon::parse($production->tgl_selesai)->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <th>Komponen</th>
                    <td>{{ $production->id_harga_komponen }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
    
@endsection