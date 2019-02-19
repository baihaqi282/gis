<?php
    $rowtempat = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[IDT]'"); 
	$rowproyek= $db->get_row("SELECT * FROM tb_proyek WHERE id_proyek='$_GET[IDP]'"); 
	
?>

<div class="page-header">
    <h1>Tambah Gambar/Foto</h1>
	<?php
	 $tgl=date('l, d F Y', strtotime(date('d-m-Y')));
	 echo $tgl;
	 ?>
</div>
<div class="row">
    <div class="col-sm-7">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=galeri_tambah" enctype="multipart/form-data">
		
		<div class="col-sm-12">
            <div class="form-group">
                <label>Daftar Tempat <span class="text-danger">*</span></label>
                <select class="form-control" name="id_tempat" value=" <?=get_tempat_option($rowtempat->id_tempat)?>" >
                    <?=get_tempat_option($rowtempat->id_tempat)?>
                </select>
            </div>
		</div>
		
		<div class="col-sm-12">		
			<div class="form-group">
                <label>Nomor Kontrak dan Kegiatan <span class="text-danger">*</span></label>
                <select class="form-control" name="id_proyek" value="<?=get_proyek_option($rowproyek->id_proyek)?>" >
                     <?=get_proyek_option($rowproyek->id_proyek)?>
                </select>
            </div>
		</div>
		
		<div class="col-sm-12">			
            <div class="form-group">
                <label>Gambar <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="gambar"/>
            </div>
		</div>
		
		<div class="col-sm-12">
            <div class="form-group">
                <label>Nama Judul Galeri<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_galeri" value="<?=$_POST[nama_galeri]?>"/>
            </div>
		</div>
		
	
				<div class="form-group">
					<div class="col-sm-8">
						<div class="slidecontainer">
						<label>Proses Pengerjaan<span class="text-danger">*</span></label>
						<input type="range" min="0" max="100" value="0" class="slider" id="myRange">
						</div> 
					</div>
					 
					<div class="col-sm-2"><br>
					   <input class="form-control" type="text" name="proses" id="proses" value="<?=$_POST[proses]?>"/>
					</div>
					
					<div class="col-sm-2"><br>
					   <font face="Agency FB" size=4pxc align="center"><span class="text-success">% Pengerjaan</span></font>
					</div>
					
				</div>
		
		
		<div class="col-sm-12">
            <div class="form-group">
                <label>Keterangan dan Catatan Gambar/Foto</label>
                <textarea class="mce" name="ket_galeri"><?=$_POST['ket_galeri']?></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=proyek"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
			</div>
        </form>
    </div>
</div>




<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("proses");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
  document.getElementById('proses').value = this.value;
}
</script>

<style type="text/css">
.slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */ 
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}
</style>
