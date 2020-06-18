@extends('template/index')
@section('content')
<style>
.pesan{
	display: none;
	color: red;

}
</style>
<h4 style="margin-bottom:30px;" class="header-title m-t-0 m-b-30">Form Transaksi</h4>

<div class="row">
	<div class="col-lg-10">

			<form action="{{url('/simpantransaksi')}}" class="form form-horizontal" method="POST" enctype="multipart/form-data">

				<div class="row control-group after-add-more">
					<div class="form-group">
						<label class="col-sm-4 control-label">Nama Pelanggan</label>
							<div class="col-sm-8">
						<select name="id_pelanggan"  class="form-control required ">
							<?php
							foreach ($lihat as $qq) {
								echo "<option value='".$qq->id_pelanggan."'> ".$qq->nama_pelanggan."</option>";
							}
							?>
						</select>
					</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Nama Produk</label>
							<div class="col-sm-8">
						<select name="id_produk[]" onchange="changeValue(this.value)" class="form-control" >
							<option>Pilih Produk</option>
							<?php
							$jsArray = "var dtBrng = new Array();\n";
							foreach ($lihat1 as $p) {
								echo "<option value='".$p->id_produk."'> ".$p->nama_produk."</option>";
								 $jsArray .= "dtBrng['" . $p->id_produk . "'] = {harga_jual:'" . addslashes($p->harga) . "'};\n";
							}
							?>
						</select>
					</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Harga (Rp.)</label>
						<div class="col-sm-8">
							<input type="text" name="harga[]" id="hargaJual" class="form-control" placeholder="Harga" readonly>
							<!-- <input name="harga" type="text"  id="subcategory" placeholder="Harga" style="width:70%;" class="form-control" readonly /> -->
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Qty</label>
						<div class="col-sm-8">
							<input name="qty[]" type="text"  placeholder="Qty" style="width:70%;" onkeyup="sum();" class="form-control" id="txt1"  autocomplete='off' required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Total (Rp.)</label>
						<div class="col-sm-8">
							<input name="total" type="text"  placeholder="Total" style="width:70%;" class="form-control" id="txt2" readonly />
						</div>
					</div>
					<div class="col-md-11"></div>
					<div class="col-md-1">
						<button type="button" class="btn btn-primary btn-round add-more pertama"> <i class="zmdi zmdi-plus-circle"></i></button>
					</div>
				</div>

		</div>




		<center>   <div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

				<button type="submit" class="btn btn-success">Simpan</button>
				<a href="{{url('/transaksi')}}"><button class="btn btn-primary" type="button">Kembali</button></a>
			</div>
		</div>
	</center>

	{{ csrf_field() }}
</form>

<div class="copy " style="display:none; " >
	<div class="row control-group" style="margin-top:20px;">
	<div class="form-group">
			<label class="col-sm-4 control-label">Nama Produk</label>
				<div class="col-sm-8">
			<select name="id_produk[]" onchange="changeValue1(this.value)" class="form-control" >
				<option>Pilih Produk</option>

				<?php
				$jsArray1 = "var dtBrng1 = new Array();\n";
				foreach ($lihat1 as $p) {
					echo "<option value='".$p->id_produk."'> ".$p->nama_produk."</option>";
					 $jsArray1 .= "dtBrng1['" . $p->id_produk . "'] = {harga_jual1:'" . addslashes($p->harga) . "'};\n";
				}
				?>
			</select>
		</div>
		</div>

		<div class="form-group">
			<label class="col-sm-4 control-label">Harga (Rp.)</label>
			<div class="col-sm-8">
				<input type="text" name="harga[]" id="hargaJual1" class="form-control" placeholder="Harga" readonly>
				<!-- <input name="harga" type="text"  id="subcategory" placeholder="Harga" style="width:70%;" class="form-control" readonly /> -->
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-4 control-label">Qty</label>
			<div class="col-sm-8">
				<input name="qty[]" type="text"  placeholder="Qty" style="width:70%;" onkeyup="sum1();" class="form-control" id="txt3" autocomplete='off' />
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-4 control-label">Total (Rp.)</label>
			<div class="col-sm-8">
				<input name="total" type="text"  placeholder="Total" style="width:70%;" class="form-control" id="txt4" readonly />
			</div>
		</div>

		<div class="col-md-10"></div>
		<center>   <div class="form-group">
			<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-11">
			<button type="button" class="btn btn-danger remove" > <i class="zmdi zmdi-minus-circle-outline"></i></button>
			<!-- <button type="button" class="btn btn-primary btn-round add-more" > <i class="zmdi zmdi-plus-circle"></i></button> -->
		</div>
	</div>
</center>
	</div>
</div>

</div>
</div><!-- end col -->



</div>
<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(item){
document.getElementById('hargaJual').value = dtBrng[item].harga_jual;
};
</script>

<script type="text/javascript">
<?php echo $jsArray1; ?>
function changeValue1(item){
document.getElementById('hargaJual1').value = dtBrng1[item].harga_jual1;
};
</script>
@endsection
