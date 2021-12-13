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
              <li class="breadcrumb-item"><a href="#">Harga Komponen</a></li>
              <li class="breadcrumb-item active">Component Price</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Komponen</h3>

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
            <form role="form" action="{{ url('/harga_komponen/update/'.$harga_komponen->id_harga_komponen) }}" method="post">
            {{csrf_field()}} 
            {{ method_field('PUT') }}
             <div class="form-group">
                <label>Product</label>
                <select class="form-control" name="id_product" id="id_product">
                <option value="">-- Pilih Product --</option>
                @foreach($product as $p)
                    <option 
                        value="{{$p->id_product}}"
                        @if ($p->id_product === $harga_komponen->id_product)
                            selected
                        @endif
                    > 
                    {{$p->nama_product}}
                    </option>
                @endforeach
                </select>
            </div>
           <div class="form-group">
                <label>Nama Komponen</label>
                <select class="form-control" name="id_komponen" id="id_komponen">
                <option value="">-- Pilih Komponen --</option>
                @foreach($komponen as $k)
                    <option 
                        value="{{$k->id_komponen}}"
                        @if ($k->id_komponen === $harga_komponen->id_komponen)
                            selected
                        @endif
                    > 
                    {{$k->nama_komponen}}
                    </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah" autocomplete="off" value="{{ $harga_komponen->jumlah }}">
                @if($errors->has('jumlah'))
                <span class="text-danger">
                    <strong>{{$errors->first('jumlah')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" autocomplete="off" value="{{ $harga_komponen->harga }}">
                @if($errors->has('harga'))
                <span class="text-danger">
                    <strong>{{$errors->first('harga')}}</strong>
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
 