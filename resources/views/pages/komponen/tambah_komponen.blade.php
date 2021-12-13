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
          <h3 class="card-title">Tambah Komponen</h3>

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
          <form role="form" action="{{ url('/komponen/upload') }}" method="post">
            {{csrf_field()}} 
            <div class="form-group">
                <label for="id_komponen">Id Komponen</label>
                <input type="text" class="form-control" id="id_komponen" placeholder="Masukkan Id Komponen" name="id_komponen" autocomplete="off">
                @if($errors->has('id_komponen'))
                <span class="text-danger">
                    <strong>{{$errors->first('id_komponen')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label for="nama_komponen">Nama Komponen</label>
                <input type="text" class="form-control" id="nama_komponen" placeholder="Masukkan Nama Komponen" name="nama_komponen" autocomplete="off">
                @if($errors->has('nama_komponen'))
                <span class="text-danger">
                    <strong>{{$errors->first('nama_komponen')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label>Satuan</label>
                <select class="form-control" name="id_satuan" id="id_satuan">
                <option value="">-- Pilih Satuan --</option>
                @foreach($satuan as $s)
                    <option value="{{$s->id_satuan}}">{{$s->nama_satuan}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" autocomplete="off">
                @if($errors->has('harga'))
                <span class="text-danger">
                    <strong>{{$errors->first('harga')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
               <input type="submit" class="btn btn-block btn-secondary" value="Simpan" style="width: 10%">
            </div>
          </form>
        </div>
        {{-- <div class="card-footer">
          <h3 class="card-title"><a href="" class="btn btn-block btn-secondary"></a></h3>
        </div> --}}
      </div>
    </section>
@endsection
 