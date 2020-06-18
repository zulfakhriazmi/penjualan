@extends('template/index')
@section('content')


                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">

                                  <div class="row" style="margin-top: 10px; margin-bottom:40px;">
                                    <div class="col-md-11">
                                  <a href="{{url('/tambahproduk')}}" class="btn btn-sm btn-success"> <i class="zmdi zmdi-account-add"></i> Tambah Produk</a>
                                </div>
                <div class="col-md-1"> <a href="{{url('/produk')}}" class="btn btn-sm btn-info">Refresh <i class="fa fa-refresh"></i></a>
                </div>
              </div>

                      <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Produk</th>
                        <th><center>Nama Produk </center></th>
                        <th><center>Kategori </center></th>
                        <th><center>Harga </center></th>

                        <th><center>Aksi</center></th>

                      </tr>
                  </thead>

                 <?php $no=1; ?>
                    <tbody>
                    <tr>
                    @foreach($lihat as $p)
                   <td><?php echo $no++ ?></td>

                     <td>{{$p->id_produk}}</td>
                    <td><center>{{$p->nama_produk}}</center></td>
                    <td><center>{{$p->nama_kategori}}</center></td>
                    <td><center>{{$p->harga}}</center></td>



                    <td><center><div id="thanks">
                      <form action="{{url ('hapusproduk/'.$p->id_produk)}}" method="post" >
				   				   <a href="{{ url('editproduk/'.$p->id_produk)  }}" class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Ubah Data"><span class="glyphicon glyphicon-edit"></span></a>
                   <button onclick="return confirm ('Yakin hapus ?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Data?" ><span class="glyphicon glyphicon-trash"></a></center>
                     {{ csrf_field() }}
                     <input type="hidden" name="_method" value="DELETE">
                     </form>


</td></tr></div>
              @endforeach
                   </tbody>
                   </table>


@endsection
