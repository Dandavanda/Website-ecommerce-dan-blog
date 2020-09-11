@extends('layout.master')
@section ('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Store</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Store</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Store</h3>
		</div>

		<div class="card-body">
			<div id="example2_wrapper" class="dataTables_wrapper dtbootstrap4">
				<div class="row">
					<div class="col-sm-12 col-md-6"></div>
					<div class="col-sm-12 col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<a href = "/barang" class="open_modal_tambah d-none dsm-inline-block btn btn-sm btn-primary shadow-sm">Kembali</a>
						<form action="/barang/tambah/proses" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}
							<div class="form-group">
								<label for="nama_produk">Nama Produk</label>
								<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk ..." value="{{old('nama_produk')}}">

								@if($errors->has('nama_produk'))
								<div class="text-danger">
									{{ $errors->first('nama_produk')}}
								</div>
								@endif
							</div>

							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="text" name="harga" class="form-control" placeholder="Harga Produk..." value="{{old('harga')}}">

								@if($errors->has('harga'))
								<div class="text-danger">
									{{ $errors->first('harga')}}
								</div>
								@endif

							</div>


							<div class="form-group">
								<label for="file">File Gambar</label><br>
								<input type="file" name="file" value="{{old('gambar')}}">
							</div>

							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit" value="Simpan Data">Confirm</button>
								<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
	@endsection