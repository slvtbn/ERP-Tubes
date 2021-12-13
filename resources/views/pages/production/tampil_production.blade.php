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
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <input type="submit" value="Pilih Id Order" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#orderIdModal">
          </h3>

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
                    <th style="width: 20%" class="text-center">Action</th>
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
                      <td class="text-center">
                          <a href="/production/detail/{{ $o->id_order }}" class="text-primary text-bold"><i class="fa fa-info" style="padding-right: 5px;"></i>Detail</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          </div>
        </div>
      </div>
  </section>
@endsection

<!-- Modal ID Order-->
<div class="modal fade" id="orderIdModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-bold" id="exampleModalLabel">Pilih Id Order</h5>
      </div>
      <div class="modal-body">
        <form action="{{ url('/production/proses') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          @foreach ($order as $o)
            <div class="checkbox">
              <label for="">
                <input type="checkbox" name="id_order[]" id="id_order" value="{{ $o->id_order }}">
                {{ $o->id_order }}
              </label>
            </div>
          @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Proses">
      </div>
      </form>
    </div>
  </div>
</div>
{{-- AKhir Modal ID Order --}}

 