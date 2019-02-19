
<div class="page-header">

    <h1>Lokasi Pada Peta</h1>

	<div id="wrapper">

    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" id="layer_01" class="switch_css" checked="checked" aria-label="...">
      </span>
      <font face="Agency FB" size=5> Peta Batas Kabupaten </font>
	  <span class="input-group-addon">
        <input type="checkbox" id="layer_02" class="switch_css" aria-label="...">
      </span>
      <font face="Agency FB" size=5> Peta Batas Kecamatan </font>
	  <span class="input-group-addon">
        <input type="checkbox" id="layer_03" class="switch_css" aria-label="...">
      </span>
		<font face="Agency FB" size=5> Peta Batas Desa/Kelurahan </font>
	

		
</div>
</div>
</div>
<div id="map" style="height: 500px;"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDdGyp6n2hKHPECuB6JZIT-8dVHCpwI0&language=id&region=ID"></script>

<script>



var layers = [];
//disini layer kml nya
  layers[0] = new google.maps.KmlLayer('https://docs.google.com/uc?export=download&id=1I20sFBHpf7N44WBs54uQa8TfNoSScHb1', {
  preserveViewport: true});
  layers[1] = new google.maps.KmlLayer('https://docs.google.com/uc?export=download&id=1Us2T-f8mxaHKBpworXGzxePKv4lmGsJJ',  {
  preserveViewport: true});
  layers[2] = new google.maps.KmlLayer('https://docs.google.com/uc?export=download&id=1Nsu9jSwaWAhvvVb6nDhBSLgpzGrd57cg',  {
  preserveViewport: true});


function initialize() {
    var myLatlng = new google.maps.LatLng ( <?=get_option('default_lat')?>, <?=get_option('default_lng')?>); //disini fokus mapnya (seputih banyak lamteng)
    var mapOptions = {
        zoom:  <?=get_option('default_zoom')?>,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
	
    var map1 = new google.maps.Map(document.getElementById('map'), mapOptions);
//	var citymap = {
//        tabalong: {
//          center: {lat:  <?=get_option('default_lat')?>, lng: <?=get_option('default_lng')?>},
//          population: 66666666
//        },  
//      };	
//	for (var city in citymap) {
//          // Add the circle for this city to the map.
//          var cityCircle = new google.maps.Circle({
//            strokeColor: '#F2F4FF',
//            strokeOpacity: 0.1,
//            strokeWeight: 2,
//            fillColor: '#FFFFFF',
//            fillOpacity: 0.1,
//            map: map1,
//            center: citymap[city].center,
//           radius: Math.sqrt(citymap[city].population) * 10
//          });
//		}
	
    loadKml = function (opts, map1) {
        var layer = new google.maps.KmlLayer();
        opts.preserveViewport = true;
        if (map) {
            opts.map = map1;
        }
        google.maps.event.addListener(layer, 'defaultviewport_changed', function () {
        var map1 = this.getMap(),
            bounds = map1.get('kmlBounds') || this.getDefaultViewport();

            bounds.union(this.getDefaultViewport());
            map1.set('kmlBounds', bounds);
            map1.fitBounds(bounds);	
        });
		
        layer.setOptions(opts);
        return layer;		
    };
	
    function toggleLayers(i) {
        if (layers[i].getMap() == null) {
            layers[i].setMap(map1);
        } else {
            layers[i].setMap(null);
        }
        google.maps.event.addListener(layers[i], 'status_changed', function () {

           });
    }
	
	
    google.maps.event.addDomListener(document.getElementById('layer_01'), 'click', function (evt) {
        toggleLayers(0);
    });
    google.maps.event.addDomListener(document.getElementById('layer_02'), 'click', function (evt) {
        toggleLayers(1);
    });
	    google.maps.event.addDomListener(document.getElementById('layer_03'), 'click', function (evt) {
        toggleLayers(2);
    });
		toggleLayers(0);

  
		
	var data =  <?=json_encode($db->get_results("SELECT * FROM tb_tempat"))?>;
    $.each(data, function(k, v){
        var pos = {
            lat : parseFloat(v.lat),
            lng : parseFloat(v.lng)
        };
		var nilai = k + 1;
		
        var contentString = 
		    '<font align="center"><h4>'  + v.nama_tempat + '</h4></font>' + 		    
            '<font align="center"><h6><img width=200px src="assets/images/tempat/small_'+ v.gambar + '" align="middle" /><h6></font>' +
			'<font align="center" face="Agency FB"><h6>Tersimpan : ' + v.disimpan + '</h6></font>' +
			'<font align="center" face="Agency FB"><h6>Pembaharuan : ' +  v.diupdate + '</h6></font>  ' +
			'<p align="center"><a href="?m=tempat_detail&ID=' + v.id_tempat + '" class="link_detail btn btn-primary">Lihat Detail Tempat</a>';
        var marker = new google.maps.Marker({
            position: pos,
            map: map1,			
            animation: google.maps.Animation.DROP
        });        
	
//      	google.maps.event.addListener(marker, 'mouseover', (function(marker, nilai) {
//		return function() {
//		
//			 infowindow.open(map1, marker);
//			 infowindow.setContent(contentString);
//		   }
//        })(marker, nilai));
		
		google.maps.event.addListener(marker, 'click', (function(marker, nilai) {
		return function() {
		
			 infowindow.open(map1, marker);
			 infowindow.setContent(contentString);
			   marker.addListener('rightclick', function() {
					  map1.setZoom(12);
					  map1.setCenter(marker.getPosition());
						marker.addListener('rightclick', function() {
						  map1.setZoom(16);
						  map1.setCenter(marker.getPosition());
							  marker.addListener('rightclick', function() {
							  map1.setZoom(20);
							  map1.setCenter(marker.getPosition());
							
							});
						});
					});  
		   }
        })(marker, nilai));
		
		   
    });    
	var infowindow = new google.maps.InfoWindow({ maxWidth: 280}), marker, nilai;		
}

google.maps.event.addDomListener(window, 'load', initialize);


</script>
	
<style type="text/css">

      #map {
        height: 100%;
      }


input[type="checkbox"].switch_css{
	font-size: 15px;
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
	width: 3.5em;
	height: 1.5em;
	background: #ddd;
	border-radius: 3em;
	position: relative;
	cursor: pointer;
	outline: none;
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
  }
  
  input[type="checkbox"].switch_css:checked{
	background: #0ebeff;
  }
  
  input[type="checkbox"].switch_css:after{
	position: absolute;
	content: "";
	width: 1.5em;
	height: 1.5em;
	border-radius: 50%;
	background: #fff;
	-webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
	        box-shadow: 0 0 .25em rgba(0,0,0,.3);
	-webkit-transform: scale(.7);
	        transform: scale(.7);
	left: 0;
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
  }
  
  input[type="checkbox"].switch_css:checked:after{
	left: calc(100% - 1.5em);
  }
	
/* Switch 1 Specific Style End */


</style>

</head>
<body>  

<div id="map"></div>
<div id="status"></div>
</body>  
