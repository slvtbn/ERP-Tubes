@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
              <li class="breadcrumb-item active">Employee Data</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="/data_karyawan/tambah" class="btn btn-block btn-secondary">Tambah Data</a></h3>

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
                <th class="text-center">Id Karyawan</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Tempat Lahir</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">No.Telp</th>
                <th class="text-center">Email</th>
                <th class="text-center">Alamat</th>
                <th style="width: 15%" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($karyawan as $k)
                 <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $k->id_karyawan }}</td>
                    <td class="text-center">{{ $k->nama_karyawan }}</td>
                    <td class="text-center">{{ $k->gender }}</td>
                    <td class="text-center">{{ $k->tempat_lahir }}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($k->tgl_lahir)->isoFormat('D MMM Y')}}</td>
                    <td class="text-center">{{ $k->telepon }}</td>
                    <td class="text-center">{{ $k->email }}</td>
                    <td class="text-center">{{ $k->alamat }}</td>
                    <td class="text-center">
                        <a href="/data_karyawan/edit/{{ $k->id_karyawan }}" class="text-primary text-bold"><i class="fa fa-edit" style="padding-right: 5px;"></i>Edit</a>
                        |
                        <a href="/data_karyawan/hapus/{{ $k->id_karyawan }}" class="text-red text-bold"><i class="fa fa-trash" style="padding-right: 5px;"></i>Hapus</a>
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
 