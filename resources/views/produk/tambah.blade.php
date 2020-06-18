@extends('template/index')
@section('content')
<style>
.pesan{
	display: none;
	color: red;

}
</style>
<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Form Tambah produk</h4>

<div class="row">
	<div class="col-lg-10">

		<div class="p-20">
			<form action="{{url('/simpanproduk')}}" class="form form-horizontal" method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-sm-4 control-label">Nama Produk</label>
					<div class="col-sm-8">
						<input name="nama" type="text"  placeholder="Nama Produk" style="width:70%;" class="form-control" required autocomplete='off' />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Kategori</label>
					<div class="col-sm-8">
						<select class="form-control" name="id_kategori" style="width:70%;">
							@foreach($lihat as $p)
							<option value="{{$p->id_kategori}}">{{$p->nama_kategori}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Harga</label>
					<div class="col-sm-8">
						<input name="harga" type="text"  placeholder="Harga" style="width:70%;" class="form-control" required autocomplete='off' />
					</div>
				</div>




			</div>
		</div>



		<center>   <div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

				<button type="submit" class="btn btn-success">Simpan</button>
				<a href="{{url('/produk')}}"><button class="btn btn-primary" type="button">Kembali</button></a>
			</div>
		</div>
	</center>

	{{ csrf_field() }}
</form>
</div>
</div><!-- end col -->



</div>

@endsection
