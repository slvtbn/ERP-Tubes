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
        <h3 class="card-title">Input Data Production</h3>

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
        <form role="form" action="{{ url('/production/upload') }}" method="post">
          {{csrf_field()}} 
          <div class="form-group">
              <label for="id_order">Id Order</label>
              <input type="text" class="form-control" id="id_order" placeholder="Masukkan ID Order" name="id_order" autocomplete="off" value="{{ $order->id_order }}">
              @if($errors->has('id_order'))
              <span class="text-danger">
                  <strong>{{$errors->first('id_order')}}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
              <label for="nama_pemesan">Nama Pemesan</label>
              <input type="text" class="form-control" id="nama_pemesan" placeholder="Masukkan Nama Pemesan" name="nama_pemesan" autocomplete="off" value="{{ $order->nama_pemesan }}">
              @if($errors->has('nama_pemesan'))
              <span class="text-danger">
                  <strong>{{$errors->first('nama_pemesan')}}</strong>
              </span>
              @endif
          </div>
           <div class="form-group">
              <label for="product">Product</label>
              <input type="text" class="form-control" id="product" placeholder="Masukkan Product" name="product" autocomplete="off" value="{{ $order->product }}">
              @if($errors->has('product'))
              <span class="text-danger">
                  <strong>{{$errors->first('product')}}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
              <label for="jlh_product">Jumlah Product</label>
              <input type="text" class="form-control" id="jlh_product" placeholder="Masukkan Jumlah Product" name="jlh_product" autocomplete="off" value="{{ $order->jlh_product }}">
              @if($errors->has('jlh_product'))
              <span class="text-danger">
                  <strong>{{$errors->first('jlh_product')}}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
              <label for="tgl_order">Tanggal Order</label>
              <input type="date" class="form-control" id="tgl_order" placeholder="Masukkan Tanggal order" name="tgl_order" autocomplete="off" value="{{ $order->tgl_order }}">
              @if($errors->has('tgl_order'))
              <span class="text-danger">
                  <strong>{{$errors->first('tgl_order')}}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
              <label for="tgl_selesai">Tanggal Selesai</label>
              <input type="date" class="form-control" id="tgl_selesai" placeholder="Masukkan Tanggal Selesai" name="tgl_selesai" autocomplete="off" value="{{ $order->tgl_selesai }}">
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
    </div>
  </section>
@endsection