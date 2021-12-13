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
          <h3 class="card-title">Edit Produk</h3>

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
            <form role="form" action="{{ url('/product/update/'.$product->id_product) }}" method="post">
            {{csrf_field()}} 
            {{ method_field('PUT') }}
             <div class="form-group">
                <label for="id_product">Id Product</label>
                <input type="text" class="form-control" id="id_product" placeholder="Masukkan Id Product" name="id_product" autocomplete="off" value="{{ $product->id_product }}">
                @if($errors->has('id_product'))
                <span class="text-danger">
                    <strong>{{$errors->first('id_product')}}</strong>
                </span>
                @endif
            </div>
             <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" placeholder="Masukkan Nama Product" name="nama_product" autocomplete="off" value="{{ $product->nama_product }}">
                @if($errors->has('nama_product'))
                <span class="text-danger">
                    <strong>{{$errors->first('nama_product')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
               <input type="submit" class="btn btn-block btn-secondary" style="width: 10%" value="Ubah">
            </div>
            </form>

        </div>
        {{-- <div class="card-footer">
          <h3 class="card-title"><a href="" class="btn btn-block btn-secondary"></a></h3>
        </div> --}}
      </div>
    </section>
@endsection
 