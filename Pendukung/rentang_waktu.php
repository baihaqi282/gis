<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial Menghitung Selisih Hari</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
 <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/moment-with-locales.js"></script>
 <script src="assets/js/jquery-1.11.3.min.js"></script>
 <script src="assets/js/bootstrap-datetimepicker.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.html">
   Pusat Ilmu Secara Detil</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class="clr1 active"><a href="index.html">Home</a></li>
    <li class="clr2"><a href="">Programming</a></li>
    <li class="clr3"><a href="">English</a></li>
   </ul>
  </div>
 </div>
</div>
</br></br></br></br>

<div class="container">
 <div class="row">
  <div class="col-md-4">
  <div class="panel panel-default">
   <div class="panel-heading">Mehgitung Selisih Hari</div>
   <div class="panel-body">
    <div class="form-group">
     <label>Tanggal Mulai</label>
     <div class="input-group date" id="tgl1">
      <input type="text" class="form-control" /> 
       <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
     </div>
    </div>
    <div class="form-group">
     <label>Tanggal Berakhir</label>
     <div class="input-group date" id="tgl2">
      <input type="text" class="form-control"/> 
       <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
     </div>
    </div>
    <div class="form-group">
     <label>Selisih Hari</label>
      <input type="text" class="form-control" id="selisih"/> 
    </div>
   </div>
   </div>
  </div>
  
 </div>
</div>
<script>
$(function() { 
  $('#tgl1').datetimepicker({

   format:'DD/MMMM/YYYY'
   });
   
  $('#tgl2').datetimepicker({
 
   format:'DD/MMMM/YYYY'
   });
   
   $('#tgl1').on("dp.change", function(e) {
    $('#tgl2').data("DateTimePicker").minDate(e.date);
  });
  
   $('#tgl2').on("dp.change", function(e) {
    $('#tgl1').data("DateTimePicker").maxDate(e.date);
      CalcDiff()
   });
  
});

function CalcDiff(){
var a=$('#tgl1').data("DateTimePicker").date();
var b=$('#tgl2').data("DateTimePicker").date();
    var timeDiff=0
     if (b) {
            timeDiff = (b - a) / 1000;
        }
 
 $('#selisih').val(Math.floor(timeDiff/(86400))+' Hari')   
}
</script> 
</body>
</html>