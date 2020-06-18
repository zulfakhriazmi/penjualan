@extends('template/index')
@section('content')
<style>
.pesan{
  display: none;
  color: red;

}
</style>
<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Form Ubah Data Produk</h4>

<div class="row">
  <div class="col-lg-10">

    <div class="p-20">

      <form action="{{url('/ubahproduk/'.$lihat->id_produk)}}" class="form form-horizontal" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-4 control-label">ID Produk</label>
          <div class="col-sm-8">
            <input name="id" type="text"  placeholder="ID Produk" value="{{$lihat->id_produk}}"style="width:70%;" class="form-control" disabled />

          </div>

        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Nama Produk</label>
          <div class="col-sm-8">
            <input name="nama" type="text"  placeholder="Nama produk" value="{{$lihat->nama_produk}}"style="width:70%;" class="form-control" required autocomplete='off' />
          </div>
        </div>


        <div class="form-group">
					<label class="col-sm-4 control-label">Kategori</label>
					<div class="col-sm-8">
						<select class="form-control" name="id_kategori" style="width:70%;">
							@foreach($kat as $p)
              @if($lihat->id_kategori == $p->id_kategori)
							<option value="{{$p->id_kategori}}" selected >{{$p->nama_kategori}}</option>
              @else
              <option value="{{$p->id_kategori}}" >{{$p->nama_kategori}}</option>
              @endif
							@endforeach
						</select>
					</div>
				</div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Harga</label>
          <div class="col-sm-8">
            <input name="harga" type="text"  placeholder="Harga" value="{{$lihat->harga}}" style="width:70%;" class="form-control" required autocomplete='off' />
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
