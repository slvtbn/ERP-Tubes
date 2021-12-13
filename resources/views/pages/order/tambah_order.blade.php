@extends('layouts.master') 

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Produk</h1>
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
          <h3 class="card-title">Order Produk</h3>

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
          <form role="form" action="{{ url('/order/upload') }}" method="post">
            {{csrf_field()}} 
            <div class="form-group">
                <label for="id_order">Id Order</label>
                <input type="text" class="form-control" id="id_order" placeholder="Masukkan ID Order" name="id_order" autocomplete="off">
                @if($errors->has('id_order'))
                <span class="text-danger">
                    <strong>{{$errors->first('id_order')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama_pemesan" placeholder="Masukkan Nama Pemesan" name="nama_pemesan" autocomplete="off">
                @if($errors->has('nama_pemesan'))
                <span class="text-danger">
                    <strong>{{$errors->first('nama_pemesan')}}</strong>
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
                <label for="telepon">No Telp</label>
                <input type="text" class="form-control" id="telepon" placeholder="Masukkan No Telp" name="telepon" autocomplete="off">
                @if($errors->has('telepon'))
                <span class="text-danger">
                    <strong>{{$errors->first('telepon')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label>Produk</label>
                <select class="form-control" name="id_product" id="id_product">
                <option value="">-- Pilih Product --</option>
                @foreach($product as $p)
                    <option value="{{$p->id_product}}">{{$p->nama_product}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="text" class="form-control" id="jumlah_produk" placeholder="Masukkan Jumlah" name="jumlah_produk" autocomplete="off">
                @if($errors->has('jumlah_produk'))
                <span class="text-danger">
                    <strong>{{$errors->first('jumlah_produk')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label for="tgl_order">Tanggal Order</label>
                <input type="date" class="form-control" id="tgl_order" placeholder="Masukkan Tanggal Order" name="tgl_order" autocomplete="off">
                @if($errors->has('tgl_order'))
                <span class="text-danger">
                    <strong>{{$errors->first('tgl_order')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tgl_selesai" placeholder="Masukkan Tanggal Selesai" name="tgl_selesai" autocomplete="off">
                @if($errors->has('tgl_selesai'))
                <span class="text-danger">
                    <strong>{{$errors->first('tgl_selesai')}}</strong>
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
 