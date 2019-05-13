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
              <h2 class="box-title">TABLE DATA BARANG</h2>
            </div>

          <!--<div class="box-body">
                      <button onclick="public/table/tambah" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Tambah Data
              </button><br><br> 
              <div class="box-body">

           <a href="/table/tambah" class="btn btn-info" data-target="#modal-info">Tambah Data</a>
           </div>-->


          


            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 50px">ID</th>
                  <th>Nama Barang</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                </tr>
                @foreach($barang as $b)
		            <tr>
                <td>{{ $b->id_barang }} </td>
			          <td>{{ $b->nama_barang }}</td>
			          <td>{{ $b->stok }}</td>
			          <td>{{ $b->harga }}</td>
			          <td>{{ $b->deskripsi }}</td>
			          <td>
				        <a href="/table/edit/{{ $b->id_barang }}">Edit</a>
				        |
				        <a href="/table/hapus/{{ $b->id_barang }}">Hapus</a>
			          </td>
		            </tr>
		            @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
    </section>
@endsection