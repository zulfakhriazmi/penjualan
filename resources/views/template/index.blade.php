<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut-icon" href="{{URL::asset('images/rdmobil1.jpg')}}">

  <title>Sistem Informasi Pelanggaran Siswa</title>

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{URL::asset('plugins/morris/morris.css')}}">

  <!-- DataTables -->
  <link href="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">

  <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />


  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->


  <script type="text/javascript">
  $(document).ready(function() {
    $('.form').submit(function() {
      var nama = $('#nis').val().length;

      if (nama == 0) {
        $(".pesan-nis").css('display','block').fadeOut(5000);
        return false;
      }
    });
  });
  </script>
</head>


<body>

  <!-- Navigation Bar-->
  <header id="topnav">
    <div class="topbar-main">
      <div class="container">

        <!-- LOGO -->
        <div class="topbar-left">
          <a href="{{url('/')}}" class="logo"><span>Sistem Informasi <span>Penjualan</span></span></a>
        </div>
        <!-- End Logo container-->


        <div class="menu-extras">

          <ul class="nav navbar-nav navbar-right pull-right">

            <li>

              <!-- Notification -->
              <div class="notification-box">
                <ul class="list-inline m-b-0">
                  <li>
                    <a href="javascript:void(0);" class="right-bar-toggle">

                      <i class="zmdi zmdi-T`H`E`M`E`L`O`C`K`.`C`O`M`-none"></i>
                    </a>
                    <div class="noti-dot">
                      <span class="dot" style="margin-top:15px;"></span>
                      <span class="pulse" style="margin-top:15px;"></span>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- End Notification bar -->
            </li>

            <li class="dropdown user-box">
              <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" style="margin-top:9px;" alt="user-img" class="img-circle user-img">
                <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
              </a>

              <ul class="dropdown-menu">

                <li><a href="{{url('/logout')}}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>

      </div>
    </div>

    <div class="navbar-custom">
      <div class="container">
        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            @if (!empty($halaman) && $halaman == 'index')
            <li class="active">
              <a href="{{url('/dashboard')}}"><i class="zmdi zmdi-home"></i> <span> Home </span> </a>
            </li>
            @else
            <li>
              <a href="{{url('/dashboard')}}"><i class="zmdi zmdi-home"></i> <span> Home </span> </a>
            </li>
            @endif


                @if (!empty($halaman) && $halaman == 'pelanggan')
                <li class="has-submenu active">
                  <a href="{{url('/pelanggan')}}"><i class="fa fa-user"></i> <span>Pelanggan</span> </a>

                </li>
                @else
                <li class="has-submenu">
                  <a href="{{url('/pelanggan')}}"><i class="fa fa-user"></i> <span>Pelanggan</span> </a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'produk')
                <li class="has-submenu active">
                  <a href="{{url('/produk')}}"><i class="fa fa-puzzle-piece"></i> <span>Produk</span> </a>

                </li>
                @else
                <li class="has-submenu">
                  <a href="{{url('/produk')}}"><i class="fa fa-puzzle-piece"></i> <span>Produk</span> </a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'kategori')
                <li class="has-submenu active">
                  <a href="{{url('/kategori')}}"><i class="fa fa-archive"></i> <span>Kategori</span> </a>

                </li>
                @else
                <li class="has-submenu">
                  <a href="{{url('/kategori')}}"><i class="fa fa-archive"></i> <span>Kategori</span> </a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'transaksi')
                <li class="has-submenu active">
                  <a href="{{url('/transaksi')}}"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span> </a>

                </li>
                @else
                <li class="has-submenu">
                  <a href="{{url('/transaksi')}}"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span> </a>
                </li>
                @endif



              <!-- End navigation menu  -->
            </div>
          </div>
        </div>
      </header>
      <!-- End Navigation Bar-->


      <div class="wrapper">
        <div class="container">

          <!-- Page-Title -->






          <div class="row">
            <div class="col-sm-12">
              <div class="card-box">

                @yield('content')
              </div>
            </div><!-- end col -->
          </div>
          <!-- end row -->





          <!-- Footer -->
          <footer class="footer text-right">
            <div class="container">
              <div class="row">
                <div class="col-xs-6">
                  2020 © Zulfakhri
                </div>

              </div>
            </div>
          </footer>
          <!-- End Footer -->

        </div>
        <!-- end container -->





      </div>



      <!-- jQuery  -->
      <script src="{{URL::asset('assets/js/jquery.min.js')}}"> </script>
      <script src="{{URL::asset('assets/js/jquery.mask.min.js')}}"></script>

      <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
      <script src="{{URL::asset('assets/js/waves.js')}}"></script>
      <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>

      <!-- Plugins Js -->

      <script src="{{URL::asset('assets/plugins/switchery/switchery.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
      <script type="text/javascript" src="{{URL::asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
      <script type="text/javascript" src="{{URL::asset('assets/plugins/parsleyjs/dist/parsley.min.js')}}"></script>

      <!-- App js -->
      <script src="{{URL::asset('assets/js/jquery.core.js')}}"></script>
      <script src="{{URL::asset('assets/js/jquery.app.js')}}"></script>
      <script src="{{URL::asset('assets/js/detect.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
      <script src="{{URL::asset('assets/pages/jquery.dashboard.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>

      <!-- Datatables-->
      <script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>

      <!-- Datatable init js -->
      <script src="{{URL::asset('assets/pages/datatables.init.js')}}"></script>

      <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { ajax: "{{URL::asset('assets/plugins/datatables/json/scroller-demo.json')}}", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
      } );
      TableManageButtons.init();
      </script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('form').parsley();
      });
      </script>

      <script type="text/javascript">
      $(document).ready(function() {
      $(".add-more").click(function(){
      var html = $(".copy").html();
      $(".after-add-more").after(html);

      });
      $("body").on("click",".remove",function(){
      $(this).parents(".control-group").remove();
      });
      });
      </script>

      

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('hargaJual').value;
      var txtSecondNumberValue = document.getElementById('txt1').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt2').value = result;
         document.getElementById('txt5').value = result;

      }
}
</script>

<script>
function sum1() {
      var txtFirstNumberValue = document.getElementById('hargaJual1').value;
      var txtSecondNumberValue = document.getElementById('txt3').value;
      var txtThirdNumberValue = document.getElementById('txt2').value;

      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt4').value = result;
      }
      var txtFifthNumberValue = document.getElementById('txt4').value;

      var result1 = parseInt(txtThirdNumberValue) + parseInt(txtFifthNumberValue);
      if (!isNaN(result1)) {
         document.getElementById('txt5').value = result1;
      }

}
</script>

      <script type="text/javascript">
      $(function(){
        $(":radio.rad").click(function(){
          $("#pel1, #pel2").hide()
          if($(this).val() == "1"){
            $("#pel1").show();
          }else{
            $("#pel2").show();
          }
        });
      });
      </script>
      <script type="text/javascript">
      $(document).ready(function(){

        // Format mata uang.
        $( '.uang' ).mask('000.000.000', {reverse: true});
        // $( '.no_hp' ).mask('0000−0000−0000');

      })
      </script>

      <script>
      jQuery(document).ready(function() {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
          selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
          selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
          afterInit: function (ms) {
            var that = this,
            $selectableSearch = that.$selectableUl.prev(),
            $selectionSearch = that.$selectionUl.prev(),
            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
            .on('keydown', function (e) {
              if (e.which === 40) {
                that.$selectableUl.focus();
                return false;
              }
            });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
            .on('keydown', function (e) {
              if (e.which == 40) {
                that.$selectionUl.focus();
                return false;
              }
            });
          },
          afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
          },
          afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
          }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
          maximumSelectionLength: 2
        });

      });

      //Bootstrap-TouchSpin
      $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
      });
      var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
      });
      if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
      }

      $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        postfix: '%'
      });
      $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        maxboostedstep: 10000000,
        prefix: '$'
      });
      $("input[name='demo3']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
      });
      $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
      });
      $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
      });

      $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
      });
      $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
      });

      // Time Picker
      jQuery('#timepicker').timepicker({
        defaultTIme : false
      });
      jQuery('#timepicker2').timepicker({
        showMeridian : false
      });
      jQuery('#timepicker3').timepicker({
        minuteStep : 15
      });

      //colorpicker start

      $('.colorpicker-default').colorpicker({
        format: 'hex'
      });
      $('.colorpicker-rgba').colorpicker();

      // Date Picker
      jQuery('#datepicker').datepicker();
      jQuery('#datepicker-autoclose').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
      });

      jQuery('#datepicker-autoclose1').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
      });
      jQuery('#datepicker-inline').datepicker();
      jQuery('#datepicker-multiple-date').datepicker({
        format: "yyyy/mm/dd",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
      });
      jQuery('#date-range').datepicker({
        format: "yyyy/mm/dd",
        toggleActive: true
      });

      //Date range picker
      $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
      });
      $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
      });
      $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2016',
        maxDate: '06/30/2016',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary',
        dateLimit: {
          days: 6
        }
      });

      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

      $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2016',
        maxDate: '12/31/2016',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Cancel',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      });

      //Bootstrap-MaxLength
      $('input#defaultconfig').maxlength()

      $('input#thresholdconfig').maxlength({
        threshold: 20
      });

      $('input#moreoptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
      });

      $('input#alloptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You typed ',
        postText: ' chars available.',
        validate: true
      });

      $('textarea#textarea').maxlength({
        alwaysShow: true
      });

      $('input#placement').maxlength({
        alwaysShow: true,
        placement: 'top-left'
      });




      </script>
      <script src="{{URL::asset('assets/plugins/fileuploads/js/dropify.min.js')}}"></script>
      <script type="text/javascript">
      $('.dropify').dropify({
        messages: {
          'default': 'Tarik atau klik foto dari komputer anda',
          'replace': 'Drag and drop or click to replace',
          'remove': 'Hapus',
          'error': 'Maaf, ada kesalahan.'
        },
        error: {
          'fileSize': 'Maksimal Ukuran foto adalah 2 MB (2000KB)'
        }
      });

      </script>
      <script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <script>
      // Date Picker
      jQuery('#datepicker').datepicker();
      jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      jQuery('#datepicker-inline').datepicker();
      jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
      });
      jQuery('#date-range').datepicker({
        toggleActive: true
      });
      </script>

    </body>
    </html>
