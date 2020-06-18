@extends('template/index')
@section('content')
<style>
.pesan{
	display: none;
	color: red;

}
</style>
<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Form Tambah Kategori</h4>

<div class="row">
    <div class="col-lg-10">

        <div class="p-20">
<form action="{{url('/simpankategori')}}" class="form form-horizontal" method="POST" enctype="multipart/form-data">

	<div class="form-group">
			<label class="col-sm-4 control-label">Nama Kategori</label>
			<div class="col-sm-8">
				<input name="nama" type="text"  placeholder="Nama Kategori" style="width:70%;" class="form-control" required autocomplete='off' />
			</div>
	</div>




</div>
</div>



              <center>   <div class="form-group">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="{{url('/pelanggan')}}"><button class="btn btn-primary" type="button">Kembali</button></a>
</div>
</div>
</center>

  {{ csrf_field() }}
</form>
        </div>
    </div><!-- end col -->



</div>

@endsection
