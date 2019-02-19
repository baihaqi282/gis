<?php

include 'functions.php';
/*if(empty($_SESSION['user']))
    header("location:login.php");*/
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>

    <link rel="icon" href="assets/point.ico"/>


    <title>GIS-PEMPROPEM Tabalong</title>
    <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
    <script src="assets/tinymce/tinymce.min.js"></script> 
    <script>
        tinymce.init({
        selector: "textarea.mce",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            menubar : false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDdGyp6n2hKHPECuB6JZIT-8dVHCpwI0&language=id&region=ID"></script>
	
	
    <script>
        var default_lat = <?=get_option('default_lat')?>; 
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
		
    </script>
    <script src="assets/js/script.js"></script>
	
	
	
	
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?"><span class="glyphicon glyphicon-globe" ></span> GIS-PEMPROPEM </a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?m=tempat"><span class="glyphicon glyphicon-map-marker"></span> Data Tempat</a></li>
			<li><a href="?m=proyek"><span class="glyphicon glyphicon-list-alt"></span> Data Proyek</a></li> 
            <li><a href="?m=galeri"><span class="glyphicon glyphicon-picture"></span> Data Galeri</a></li>            
            <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
            <?php else:?>            
            <li><a href="?m=tempat_list"><span class="glyphicon glyphicon-map-marker"></span> Daftar Tempat Proyek</a></li>
			<li><a href="https://www.arcgis.com/apps/View/index.html?appid=40cca3f7e866404581236768826d660f"><span class="glyphicon glyphicon-send" ></span> Aplikasi SINONIM</a></li>
           <li><a href="?m=login"><span class="glyphicon glyphicon-user"></span> Masuk</a></li>
            <?php endif?>                   
          </ul>          
        </div>
      </div>
    </nav>

    <div class="container">
    <?php
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div>
	<footer class="footer bg-success">
      <div class="container">
        <p>Copyright &copy; <?=date('Y')?> Asrani, S.Kom <span class="glyphicon glyphicon-pencil"></span><em class="pull-right"><?php
																				 $tgl=date('l, d F Y', strtotime(date('d-m-Y')));
																				 echo $tgl;
																				 ?></em></p>
      </div>
    </footer>  
</body>
</html>