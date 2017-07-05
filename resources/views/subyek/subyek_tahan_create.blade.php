@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/skins/_all-skins.min.css">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Perintah Penahanan')

@section('materi')

        <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-12">
        <!-- No. Surat -->
        <div class="form-group">
         <label> No.Surat</label>
         <input type="text" class="form-control" placeholder="PRINT-">
       </div>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-12">
 <!-- Tanggal Surat -->

				<div class="form-group">
                <label>Masa Tahanan:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>


                
                <!-- /.input group -->
              </div>			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
        <!-- No. SprinDik -->
        <div class="form-group">
         <label>Berdasarkan Sprint Penyidikan Umum:</label>
         <input type="text" class="form-control" placeholder="PRINT-XX/f.2/fD./MM/YYYY" disabled="disabled">
       </div>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-12">
      <!-- Disposisi / Keterangan -->
      <div class="form-group">
       <label>Berdasarkan Disposisi / Keterangan:</label>
       <input type="text" class="form-control" placeholder="Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident" disabled="disabled">
     </div>
   </div>

 </div>
 <div class="rows"> 
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Print Lid -->
				<h4>Data Tersangka</h4>
				<!-- Nama Lengkap -->
				<div class="form-group">
					<label>Nama Lengkap</label>
					<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
				</div>
				<!-- Tempat Tinggal -->
				<div class="form-group">
					<label>Tempat Tinggal</label>
					<textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
					<label>Jenis Kelamin</label>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox1" value="option1"> Laki-laki
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="inlineCheckbox2" value="option2"> Perempuan
					</label>
					</div>
				</div>	
								<!-- Pendidikan -->
				<div class="form-group">
					<label>Pendidikan</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
			
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tempat Lahir -->
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Tanggal Lahir -->
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input type="date" class="form-control" placeholder="Enter ...">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Kebangsaan / Kewarganegaraan -->
				<div class="form-group">
					<label>Kebangsaan / Kewarganegaraan</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- Agama -->
				<div class="form-group">
					<label>Agama</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>

			</div>
		</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- text input -->
				<h4>Data Pekerjaan</h4>
				<!-- Pekerjaan -->
				<div class="form-group">
					<label>Pekerjaan</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
				<!-- Institusi / Lembaga -->
				<div class="form-group">
					<label>Institusi / Lembaga</label>
					<input type="text" class="form-control" placeholder="Lembaga" disabled="disabled">
				</div>
				<!-- Jabatan Resmi -->
				<div class="form-group">
					<label>Jabatan Resmi</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
				<!-- Jabatan Lain -->
				<div class="form-group">
					<label>Jabatan Lain</label>
					<input type="text" class="form-control" placeholder="Enter ...">
				</div>
				<!-- Kategori Subyek -->
				<div class="form-group">
					<label>Kategori Subyek</label>
					<select class="form-control" style="width: 100%;">
						<option selected="selected">SWASTA</option>
						<option>PNS</option>
						<option>Hakim</option>
						<option>Pengacara</option>
						<option>Jaksa</option>
						<option>Gubernur</option>
						<option>Walikota</option>
					</select>
				</div>
								<div class="box-tools pull-right">
					<a href="#" class="btn btn-danger"> BATAL</a>
					<a href="frp3sus" class="btn btn-success"> KIRIM</a>
				</div>
			
				</div>
		</div>
      
@stop

@section('script')

	<script>
		$(function () {

			$('select').select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();


    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
    	ranges: {
    		'Today': [moment(), moment()],
    		'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    		'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    		'This Month': [moment().startOf('month'), moment().endOf('month')],
    		'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    	},
    	startDate: moment().subtract(29, 'days'),
    	endDate: moment()
    },
    function (start, end) {
    	$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
    	autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    	checkboxClass: 'icheckbox_minimal-blue',
    	radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    	checkboxClass: 'icheckbox_minimal-red',
    	radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    	checkboxClass: 'icheckbox_flat-green',
    	radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
    	showInputs: false
    });
});
</script>


@endsection
