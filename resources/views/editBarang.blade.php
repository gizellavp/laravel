@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
@section('content')
<section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h2 class="box-title">EDIT BARANG</h2>
            </div>

<div class="box-body">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              @foreach($barang as $b)
              <form form action="/table/update" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                
                  <input type="hidden" class="form-control" id="id_barang" name="id_barang" placeholder="ID BARANG" value="{{ $b->id_barang}}">
                </div>
                <div class="form-group">
                
                  <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="NAMA BARANG" value="{{ $b->nama_barang }}">
                </div>
                <div class="form-group">
                
                  <input type="number" class="form-control" id="stok" name="stok" placeholder="STOCK" value="{{ $b->stok }}" >
                </div>
                <div class="form-group">
                
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="HARGA" value="{{ $b->harga }}" >
                </div>
                <div>
                
                  <textarea class="textarea" id="deskripsi" name="deskripsi" placeholder="DESKRIPSI" value="{{ $b->deskripsi }}" 
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="box-footer clearfix">
                  <input type="submit" value="UPDATE DATA">
                </div>
              </form>
              @endforeach
            </div>
            <!--<div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default"">SAVE
                <i class="fa fa-arrow-circle-right"></i></button>
            </div> -->
          </div>

</section>
@endsection