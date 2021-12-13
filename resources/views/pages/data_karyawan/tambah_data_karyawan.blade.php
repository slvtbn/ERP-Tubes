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
          <h3 class="card-title">Tambah Data Karyawan</h3>

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
          <form role="form" action="{{ url('/data_karyawan/upload') }}" method="post">
            {{csrf_field()}} 
            <div class="form-group">
                <label for="id_karyawan">Id Karyawan</label>
                <input type="text" class="form-control" id="id_karyawan" placeholder="Masukkan ID Karyawan" name="id_karyawan" autocomplete="off">
                @if($errors->has('id_karyawan'))
                <span class="text-danger">
                    <strong>{{$errors->first('id_karyawan')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="nama_karyawan">Nama Karyawan</label>
                <input type="text" class="form-control" id="nama_karyawan" placeholder="Masukkan Nama Karyawan" name="nama_karyawan" autocomplete="off">
                @if($errors->has('nama_karyawan'))
                <span class="text-danger">
                    <strong>{{$errors->first('nama_karyawan')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="id_gender" id="id_gender">
                <option value="">-- Masukkan Gender --</option>
                @foreach ($gender as $g)
                    <option value="{{ $g->id_gender }}">{{ $g->nama }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" autocomplete="off">
                @if($errors->has('tempat_lahir'))
                <span class="text-danger">
                    <strong>{{$errors->first('tempat_lahir')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" autocomplete="off">
                @if($errors->has('tgl_lahir'))
                <span class="text-danger">
                    <strong>{{$errors->first('tgl_lahir')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="telepon">No Telp</label>
                <input type="text" class="form-control" id="telepon" placeholder="Masukkan No Telp" name="telepon" autocomplete="off">
                @if($errors->has('telepon'))
                <span class="text-danger">
                    <strong>{{$errors->first('telepon')}}</strong>
                </span>
                @endif
            </div>
             
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" autocomplete="off">
                @if($errors->has('email'))
                <span class="text-danger">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
                @endif
            </div>
             
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" autocomplete="off">
                @if($errors->has('alamat'))
                <span class="text-danger">
                    <strong>{{$errors->first('alamat')}}</strong>
                </span>
                @endif
            </div>
            
            <div class="form-group">
               <input type="submit" class="btn btn-block btn-secondary" value="Simpan" style="width: 10%">
            </div>
          </form>
        </div>
      </div>
    </section>
@endsection
 