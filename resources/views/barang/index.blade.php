@extends('layout.master')
@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Daftar Barang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Daftar Barang</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="card" >
		<div class="card-header">
			<h3 class="card-title">Tambah Barang</h3>
		</div>
		<!-- .card-body -->
		<div class="card-body">
			<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
			<div class="row">
				<div class="col-sm-12">

					<form action="#" method="GET" class="form-inline mr-auto" >
						<input class="form-control mr-sm2" name="cari" placeholder="Cari judul .." value="{{ old('cari') }}">
						<button type="submit" class="btn btn-primary" value="CARI">Search</button>
					</form>
					<br/>
					<a href = "/barang/tambah" class="open_modal_tambah dnone d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>
					<br/>
					<br/>
					<table id="example2" class="table tablebordered table-hover dataTable" role="grid" ariadescribedby="example2_info">
						<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1" ariasort="ascending">NO</th>
								<th class="sorting" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1">NAMA</th>
								<th class="sorting" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1">HARGA</th>
								<th class="sorting" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1">GAMBAR</th>
								<th class="sorting" tabindex="0" ariacontrols="example2" rowspan="1" colspan="1">TINDAKAN</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;?>
								@foreach($barang as $b)
								<?php $no++ ;?>
								<tr role="row" class="odd">
									<td>{{ $no }}</td>
									<td>{{ $b->nama_produk }}</td>
									<td>{{ $b->harga }}</td>
									<td><img width="150px" src="{{ url('/data_store/'.$b->gambar) }}"></td>
								<td>
									<a href="/barang/edit/{{$b->id}}" class='open_modal_ubah btn btn-sm btn-primary shadow-sm'><i class="fa fa-bars"></i> Edit</a>
									<a href="/barang/hapus/{{$b->id}}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i> Delete</a>
								</td>
							</tr>
							<?php $no++; ?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

			Halaman : {{ $barang->currentPage() }} <br/>
			Jumlah Data : {{ $barang->total() }} <br/>
			Data Per Halaman : {{ $barang->perPage() }} <br/>

			{{ $barang->links() }}

		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</section>
<!-- /.content -->
@endsection