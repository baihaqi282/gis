
<div class="page-header">
    <h1>Tambah Tempat</h1>
	
<?php
 $tgl=date('l, d F Y', strtotime(date('d-m-Y')));
 echo $tgl;

 ?>
</div>



<?php
	include"koneksi.php";
	
	$sqlkecamatan = "select * from tb_kecamatan";
	$result_kecamatan = mysqli_query($conn,$sqlkecamatan);	
	$sqldesa = "select * from tb_desa";
	$result_desa = mysqli_query($conn,$sqldesa);	
	
	$sqlunsur = "select * from tb_unsur";
	$result_unsur = mysqli_query($conn,$sqlunsur);	
	$sqlkategori = "select * from tb_kategori";
	$result_kategori = mysqli_query($conn,$sqlkategori);	
?>


	<!-- js untuk jquery -->
	<script src="js/jquery-1.11.2.min.js"></script>

<script type="text/javascript">
		$(document).ready(function(){
				var combo_desa = $("#combo_desa");
				
				temp_desa = combo_desa.children(".dt").clone();
				 $("#combo_kecamatan").change(function(){
					var value = $(this).val();              
					combo_desa.children(".dt").remove();
					if(value!==''){
						temp_desa.clone().filter("."+value).appendTo(combo_desa);
					} else {
						temp_desa.clone().appendTo(combo_desa);
					}
				 });
			});
			
			
		$(document).ready(function(){
			var combo_kategori = $("#combo_kategori");
            
            temp_kategori = combo_kategori.children(".dt").clone();
             $("#combo_unsur").change(function(){
             	var value = $(this).val();              
                combo_kategori.children(".dt").remove();
                if(value!==''){
                    temp_kategori.clone().filter("."+value).appendTo(combo_kategori);
                } else {
                    temp_kategori.clone().appendTo(combo_kategori);
                }
             });
		});
</script>
		
<form method="post" action="?m=tempat_tambah" enctype="multipart/form-data">    
    <div class="row">
        <div class="col-sm-6">
			<div class="col-sm-12">
				<?php if($_POST) include'aksi.php'?>
				<div class="form-group">
					<label>Nama Tempat <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="nama_tempat" value="<?=$_POST['nama_tempat']?>"/>
				</div>
			</div>
			
			<div class="col-sm-12">
				<div class="form-group">
					<label>Gambar <span class="text-danger">*</span></label>
					<input class="form-control" type="file" name="gambar" />
				</div>
			</div>
		
			<div class="col-sm-6">
				<div class="form-group">
					<label>Unsur <span class="text-danger">*</span></label>
					<select name="combo_unsur" id="combo_unsur" class="form-control">
						<option value="">--Pilih Unsur--</option>
						<?php
							while($row_unsur=mysqli_fetch_assoc($result_unsur)){
								echo'<option value="'.$row_unsur['id_unsur'].'">'.$row_unsur['unsur'].'</option>';
							}
						?>
					</select>

				</div>
			</div>
				<div class="col-sm-6">
				<div class="form-group">
					<label>Kategori <span class="text-danger">*</span></label>
					<select name="combo_kategori" id="combo_kategori" class="form-control">
						<option value="">--Pilih Kategori--</option>
						<?php
							while($row_kategori=mysqli_fetch_assoc($result_kategori)){
								echo'<option class="dt '.$row_kategori['id_unsur'].'" value="'.$row_kategori['kategori'].'">'.$row_kategori['kategori'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			
				
			<div class="col-sm-12">
				<div class="form-group">
					<label>Lokasi <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="lokasi" value="<?=$_POST['lokasi']?>"/>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					<label>Kecamatan <span class="text-danger">*</span></label>
					<select name="combo_kecamatan" id="combo_kecamatan" class="form-control">
						<option value="">--Pilih Kecamatan--</option>
						<?php
							while($row_kecamatan=mysqli_fetch_assoc($result_kecamatan)){
								echo'<option value="'.$row_kecamatan['id_kecamatan'].'">'.$row_kecamatan['kecamatan'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Desa/Kelurahan <span class="text-danger">*</span></label>
					<select name="combo_desa" id="combo_desa" class="form-control"  onchange="changeFunc();">
						<option value="">--Pilih Desa/Kelurahan--</option>
						<?php
							while($row_desa=mysqli_fetch_assoc($result_desa)){
								echo'<option class="dt '.$row_desa['id_kecamatan'].'" value="'.$row_desa['desa'].'">'.$row_desa['desa'].'</option>';
							}
						?>
					</select>
			
				</div>
			</div>

			
			<div class="form-group">
				<div class="col-sm-7">
					<label>Latitude <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="lat" id="lat" value="<?=get_option('default_lat')?>"  />
				
					<label>Longitude <span class="text-danger">*</span></label>
					<input class="form-control" type="text" id="lng" name="lng" value="<?=get_option('default_lng')?>"/> <br>
				</div>
				
				<div class="col-sm-1">
					<br>
					<br>
					<br>
					<br>
						<input type="button" class="btn btn-primary btn-lg active" value="Cek Koordinat" onclick="hitungtotal()"> 
				</div>			
			</div>
			
				<div class="form-group">
					<div class="col-sm-8">
						<div class="slidecontainer">
						<label>Perkiraan Skala Radius Proyek (1 s/d 100Meter)<span class="text-danger">*</span></label>
						<input type="range" min="0" max="100" value="0" class="slider" id="myRange">
						</div> 
					</div>
					 
					<div class="col-sm-2"><br>
					   <input class="form-control" type="text" name="radius" id="radius" Readonly value="<?=$rowt->radius?>"/>
					</div>
					
					<div class="col-sm-2"><br>
					   <font face="Agency FB" size=4pxc align="center"><span class="text-success">Meter</span></font>
					</div>					
				</div>
				
	
			<div class="form-group">
				<div class="col-sm-12">
					<label>Keterangan dan Catatan Tempat</label>
					<textarea class="mce" name="keterangan"><?=$_POST['keterangan']?></textarea>
				</div>
			</div>
				<div class="form-group">
					<div class="col-sm-12">
					<button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
					<a class="btn btn-danger" href="?m=tempat"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
					</div>
				</div>        
        </div>
        <div class="col-sm-6">
            <div id="map" style="height: 700px;"></div>
        </div>        
    </div>

</form>


<script>
var defaultCenter = {
    lat : <?=get_option('default_lat')?>, 
    lng : <?=get_option('default_lng')?>
};
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: <?=get_option('default_zoom')?>,
    center: defaultCenter,
	mapTypeId: google.maps.MapTypeId.HYBRID
  });

  var marker = new google.maps.Marker({
    position: defaultCenter,
    map: map,
    title: 'Click to zoom',
    draggable:true
  });
  
  
     marker.addListener('drag', handleEvent);
     marker.addListener('dragend', handleEvent);

    var infowindow = new google.maps.InfoWindow({
        content: '<h5>Drag untuk pindah lokasi</h5>'
    });
    
	
	
    infowindow.open(map, marker);
}

function handleEvent(event) {

   var latggs = event.latLng.lat();
   var intlat = latggs.toFixed(6);
   
   var lngggs = event.latLng.lng();
   var intlng = lngggs.toFixed(6);
   
   
   document.getElementById('lat').value = intlat;
   document.getElementById('lng').value = intlng;

  //  document.getElementById('lat').value = event.latLng.lat();
  //  document.getElementById('lng').value = event.latLng.lng();
}

$(function(){
    initMap();

		
})
</script>


 <script type="text/javascript">
 //edit disini tampilan fit peta
   function changeFunc() {
    var desa = document.getElementById("combo_desa");
    var SVdesa = desa.options[desa.selectedIndex].value;
	var kecamatan = document.getElementById("combo_kecamatan");
    var SVkecamatan = kecamatan.options[kecamatan.selectedIndex].value;
	
	$datakec = SVkecamatan;
	$datades = SVdesa;
	
    var name=$datades;
	
  
   }
</script>


<script>
function hitungtotal() {
//new
 var  latgg = document.getElementById('lat').value;
 var  lnggg =  document.getElementById('lng').value;
 var myLatlng = new google.maps.LatLng ( latgg, lnggg); //disini fokus mapnya (seputih banyak lamteng)
    var mapOptions = {
        zoom:  19,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };

  var map1 = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map1,
    title: 'Click to zoom',
    draggable:true
  });
  
  
    marker.addListener('drag', handleEvent);
    marker.addListener('dragend', handleEvent);
    
    var infowindow = new google.maps.InfoWindow({
        content: '<h4>Lokasi Yang Telah Ditentukan</h4>'
    });
    
    infowindow.open(map, marker);
}

//function handleEvent(event) {
//    document.getElementById('lat').value = event.latLng.lat();
//    document.getElementById('lng').value = event.latLng.lng();
 
//}

</script>

<script>

function selectktg() {
 document.getElementById('kategori').options.length=0;
 var  kelasori = document.getElementById('kelas').value;

}

</script>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("radius");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  document.getElementById('radius').value = this.value; 
 var  latgg = document.getElementById('lat').value;
 var  lnggg =  document.getElementById('lng').value;
 var myLatlng = new google.maps.LatLng ( latgg, lnggg); //disini fokus mapnya (seputih banyak lamteng)
    var mapOptions = {
        zoom:  18,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };
	
  var map1 = new google.maps.Map(document.getElementById('map'), mapOptions);

  	var citymap = {
        tabalong: {
          center: myLatlng,
          population: this.value
        },  
      };	
	for (var city in citymap) {
          // Add the circle for this city to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#000000',
            strokeOpacity: 0.5,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.1,
            map: map1,
            center: citymap[city].center,
           radius: Math.sqrt(citymap[city].population) * 10
          });
		}
  
  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map1,
    title: 'Click to zoom',
    draggable:true
  });
  
  
  
    marker.addListener('drag', handleEvent);
    marker.addListener('dragend', handleEvent);
    
    var infowindow = new google.maps.InfoWindow({
        content: '<h4>Skala Radius</h4>'
    });
    
    infowindow.open(map, marker);
  
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
