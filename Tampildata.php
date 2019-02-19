<?php
if( isset( $_POST['user_name'] ) )
{
$name = $_POST['user_name'];
$host = 'localhost';
$user = 'root';
$pass = ' ';
$database = 'gisdata';
mysql_connect($host, $user, $pass, $database);
mysql_select_db('student');
$selectdata = "SELECT * FROM tb_desa where desa = '$name%' ";
$query = mysql_query($selectdata);
while($row = mysql_fetch_array($query))
{
    echo "<p>".$row['latti']."</p>";
    echo "<p>".$row['longi']."</p>";
}
}
?>