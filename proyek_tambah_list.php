<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

<?php
    $rowt = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[IDT]'"); 
	
?>

<div class="page-header">
    <h1>Tambah Proyek</h1>
	<?php
	 $tgl=date('l, d F Y', strtotime(date('d-m-Y')));
	 echo $tgl;
	 ?>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=proyek_tambah_list" enctype="multipart/form-data">
		<div class="col-sm-12">
            <div class="form-group">
                <label>Daftar Tempat <span class="text-danger">*</span></label>
                <select class="form-control" name="id_tempat" Readonly>
                    <?=get_tempat_option($rowt->id_tempat)?>
                </select>
            </div>
        </div>
		
		<div class="col-sm-12">
            <div class="form-group">
                <label>Nomor Kontrak <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kontrak" value="<?=$_POST[kontrak]?>"/>
            </div>
		</div>

		<div class="col-sm-12">		
			<div class="form-group">
                <label>Kegiatan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kegiatan" value="<?=$_POST[kegiatan]?>"/>
            </div>
		</div>
		
		<div class="col-sm-12">
			<div class="form-group">
                <label>Pekerjaan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pekerjaan" value="<?=$_POST[pekerjaan]?>"/>
            </div>
		</div>	
						
			<div class="col-sm-6">
			<div class="form-group">
					<label>Tanggal Awal Pelaksanaan <span class="text-danger">*</span></label>
			         <div class='input-group date' id='tglawal'>
						 <input class="form-control" type="text" name="awal" value="<?=$_POST[awal]?>"/>
						 <span class="input-group-addon">
						 <span class="glyphicon glyphicon-calendar"></span>
						 </span>
					</div>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
					<label>Tanggal Akhir Pekerjaaan <span class="text-danger">*</span></label>
			         <div class='input-group date' id='tglakhir' >
						 <input class="form-control" type="text" name="akhir" value="<?=$_POST[akhir]?>"/>
						 <span class="input-group-addon">
						 <span class="glyphicon glyphicon-calendar"></span>
						 </span>
					</div>
			</div>
			</div>
			
			
			
			<div class="form-group">
			<div class="col-sm-1">
			<br>
			<br>
			<label>Rp.<span class="text-danger"></span></label>
			</div>
			<div class="col-sm-5">
                <label>Biaya/Anggaran <span class="text-danger">*</span></label>
                <span class="text-justify"><input class="form-control" type="text" placeholder="Masukkan Anggaran" onkeyup="convertToRupiah(this);" name="biaya" value="<?=$_POST[biaya]?>"/>
            </div>
	 
				<div class="col-sm-3">
				<label> Waktu <span class="text-danger">*</span></label>
                <span class="text-justify"><input class="form-control" onclick="hitungtotal()" type="text" name="waktu" id="waktu" Readonly value="<?=$_POST[waktu]?> "/> 
				</div>
				<div class="col-sm-3">
				<br>
				<br>
				<label>Hari Pekerjaan.<span class="text-danger"></span></label>
				</div>
            </div>
			
			<div class="col-sm-12">
			<div class="form-group">
			<br>
                <label>Kontraktor Pelaksana <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pelaksana" value="<?=$_POST[pelaksana]?>"/>
            </div>
			</div>	

			<div class="col-sm-12">
			<div class="form-group">
                <label>Kontraktor Pengawas <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pengawas" value="<?=$_POST[pengawas]?>"/>
            </div>
			</div>
						
			<div class="col-sm-12">
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=proyek_list&IDT=<?=$rowt->id_tempat?>"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
			</div>
        </form>
		<script type="text/javascript">
			$(".form_datetime").datetimepicker({
				format: "dd MM yyyy - hh:ii"
			});
        </script>
    </div>
</div>


<script>
function hitungtotal() {
alert('ok');
</script>

<script>
  $(function () {
    $('#tglawal').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
	$('#tglakhir').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
				
 });

    $(function () {
        $('#tglawal').datetimepicker();
        $('#tglakhir').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#tglawal").on("dp.change", function (e) {
            $('#tglakhir').data("DateTimePicker").minDate(e.date);
        });
        $("#tglakhir").on("dp.change", function (e) {
            $('#tglawal').data("DateTimePicker").maxDate(e.date);
        });
    });
	
$(function() { 
  $('#tglawal').datetimepicker({

   format: 'YYYY-MM-DD'
   });
   
  $('#tglakhir').datetimepicker({
 
   format: 'YYYY-MM-DD'
   });
   
   $('#tglawal').on("dp.change", function(e) {
    $('#tglakhir').data("DateTimePicker").minDate(e.date);
  });
  
   $('#tglakhir').on("dp.change", function(e) {
    $('#tglawal').data("DateTimePicker").maxDate(e.date);
      CalcDiff()
   });
  
});

function CalcDiff(){
var a=$('#tglawal').data("DateTimePicker").date();
var b=$('#tglakhir').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
 
 $('#waktu').val(Math.floor(timeDiff/(86400)))   
}
</script> 


<script type="text/javascript"  src="style/rupiah.js"></script>

		