<?php
    $rowt = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[IDT]'"); 
	
?>

<div class="page-header">
    <h1>Ubah Tempat </h1> 
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
	
<div class="rowt">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=tempat_ubah&IDT=<?=$rowt->id_tempat?>" enctype="multipart/form-data">
			<div class="col-sm-12">
            <div class="form-group">
                <label>Nama Tempat <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_tempat" value="<?=$rowt->nama_tempat?>"/>
            </div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label>Gambar <span class="text-danger">*</span></label>
					<input class="form-control" type="file" name="gambar" />
					<p class="help-block">Kosongkan jika tidak mengubah gambar</p>
					<img class="thumbnail" src="assets/images/tempat/small_<?=$rowt->gambar?>" height="60" />
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="form-group">
					<label>Unsur <span class="text-danger">*</span></label>
					<select name="combo_unsur" id="combo_unsur" class="form-control">
						<option value="<?=$rowt->id_unsur?>"><?=$rowt->unsur?></option>
						<?php
							while($rowt_unsur=mysqli_fetch_assoc($result_unsur)){
								echo'<option value="'.$rowt_unsur['id_unsur'].'">'.$rowt_unsur['unsur'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
				<label>Kategori <span class="text-danger">*</span></label>
				<select name="combo_kategori" id="combo_kategori" class="form-control">
					<option value="<?=$rowt->kategori?>"><?=$rowt->kategori?></option>
					<?php
						while($rowt_kategori=mysqli_fetch_assoc($result_kategori)){
							echo'<option class="dt '.$rowt_kategori['id_unsur'].'" value="'.$rowt_kategori['kategori'].'">'.$rowt_kategori['kategori'].'</option>';
						}
					?>
				</select>
				</div>
			</div>
			
			<div class="col-sm-12">
				<div class="form-group">
					<label>Latitude <span class="text-danger">*</span></label>
					<input class="form-control" type="text" id="lat" name="lat" value="<?=$rowt->lat?>"/>
				</div>
				<div class="form-group">
					<label>Longitude <span class="text-danger">*</span></label>
					<input class="form-control" type="text" id="lng" name="lng" value="<?=$rowt->lng?>"/>
				</div>
			</div>
			
				<div class="form-group">
					<div class="col-sm-8">
						<div class="slidecontainer">
						<label>Perkiraan Skala Radius Proyek (1 s/d 100Meter)<span class="text-danger">*</span></label>
						<input type="range" min="0" max="100" value="<?=$rowt->radius?>" class="slider" id="myRange">
						</div> 
					</div>
					 
					<div class="col-sm-2"><br>
					   <input class="form-control" type="text" name="radius" id="radius" Readonly value="<?=$rowt->radius?>" />
					</div>
					
					<div class="col-sm-2"><br>
					   <font face="Agency FB" size=4pxc align="center"><span class="text-success">Meter</span></font>
					</div>
					
				</div>
			
			<div class="col-sm-12">
			<div class="form-group">
					<label>Lokasi <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="lokasi" value="<?=$rowt->lokasi?>"/>
				</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
				<label>Kecamatan <span class="text-danger">*</span></label>
				<select name="combo_kecamatan" id="combo_kecamatan" class="form-control">
					<option value="<?=$rowt->id_kecamatan?>"><?=$rowt->kecamatan?></option>
					<?php
						while($rowt_kecamatan=mysqli_fetch_assoc($result_kecamatan)){
							echo'<option value="'.$rowt_kecamatan['id_kecamatan'].'">'.$rowt_kecamatan['kecamatan'].'</option>';
						}
					?>
				</select>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
				<label>Desa/Kelurahan <span class="text-danger">*</span></label>
				<select name="combo_desa" id="combo_desa" class="form-control">
					<option value="<?=$rowt->desa?>"><?=$rowt->desa?></option>
					<?php
						while($rowt_desa=mysqli_fetch_assoc($result_desa)){
							echo'<option class="dt '.$rowt_desa['id_kecamatan'].'" value="'.$rowt_desa['desa'].'">'.$rowt_desa['desa'].'</option>';
						}
					?>
				</select>
			</div>
			</div>
			
			<div class="col-sm-12">			
				<div class="form-group">
					<label>Keterangan dan Catatan Tempat</label>
					<textarea class="mce" name="keterangan"><?=$rowt->keterangan?></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
					<a class="btn btn-danger" href="?m=tempat"><span class="glyphicon glyphicon-arrowt-left"></span> Kembali</a>
				</div> 
			</div>
        </form>
    </div>
    <div class="col-md-6">
    <h1>Lokasi Pada Peta</h1>
        <div id="map" style="height: 500px;"></div>
    </div>
</div>
<script type="">
	function run(){
		var combo_kecamatan = document.getElementById("combo_kecamatan");
 
		if(document.getElementById("cekbox_kecamatan").checked == true){
			combo_kecamatan.disabled = false;
		}else{
			combo_kecamatan.disabled = true;
		}
 
	}
	</script>
<script>
var defaultCenter = {
    lat : <?=$rowt->lat * 1?>, 
    lng : <?=$rowt->lng * 1?>
	
};
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: defaultCenter, 
	mapTypeId: google.maps.MapTypeId.SATELLITE
  });
  
  	var citymap = {
        tabalong: {
          center: defaultCenter,
          population: <?=$rowt->radius * 1?>
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
            map: map,
            center: citymap[city].center,
           radius: Math.sqrt(citymap[city].population) * 10
          });
		}

  var marker = new google.maps.Marker({
    position: defaultCenter,
    map: map,
    title: 'Click to zoom',
    draggable:true
  });
  
  
    marker.addListener('drag', handleEvent);
    marker.addListener('dragend', handleEvent);
    
    var infowindow = new google.maps.InfoWindow({
        content: '<h4>Drag untuk pindah lokasi</h4>'
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
}

$(function(){
    initMap();
})
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