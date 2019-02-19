<?php
error_reporting(~E_NOTICE & ~E_DEPRECATED);
session_start();

include dirname(__FILE__) . '/config.php';
include'includes/ez_sql_core.php';
include'includes/ez_sql_mysqli.php';
$db = new ezSQL_mysqli($config[username], $config[password], $config[database_name], $config[server]);
include'includes/general.php';
include'includes/paging.php';
include'includes/SimpleImage.php';

$mod = $_GET[m];
$act = $_GET[act];

function get_tempat_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_tempat, nama_tempat FROM tb_tempat ORDER BY id_tempat");
    foreach($rows as $row){
        if($row->id_tempat==$selected)
            $a.="<option value='$row->id_tempat' selected>$row->nama_tempat</option>";
        else
            $a.="<option value='$row->id_tempat'>$row->nama_tempat</option>";
    }
    return $a;
}

function get_proyek_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_proyek, kontrak, kegiatan, pekerjaan FROM tb_proyek ORDER BY id_proyek");
    foreach($rows as $rowproyek){
        if($rowproyek->id_proyek==$selected)
            $a.="<option value='$rowproyek->id_proyek' selected>$rowproyek->kontrak - $rowproyek->kegiatan </option>";
        else
            $a.="<option value='$rowproyek->id_proyek'>$rowproyek->kontrak - $rowproyek->kegiatan </option>";
    }
    return $a;
}	
	
function get_proyek_kontrak($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_proyek, kontrak, kegiatan, pekerjaan FROM tb_proyek ORDER BY id_proyek");
	 foreach($rows as $rowp){
        if($rowp->id_proyek==$selected)
            $a.="<option value='$rowp->id_proyek' selected>$rowp->kontrak</option>";
        else
            $a.="<option value='$rowp->id_proyek'>$rowp->kontrak</option>";
    }
    return $a;
}

function get_unsur_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT id_unsur, unsur FROM tb_unsur ORDER BY id_unsur");
    foreach($rows as $rowu){
        if($rowu->id_unsur==$selected)
            $a.="<option value='$rowu->id_unsur' selected>$rowu->unsur</option>";
        else
            $a.="<option value='$rowu->id_unsur'>$rowu->unsur</option>";
    }
    return $a;
}

function get_kategori_option($selected = ''){
	
    global $db;
    $rows = $db->get_results("SELECT id_kategori, kategori FROM tb_kategori  ORDER BY id_kategori");
    foreach($rows as $rowk){
        if($rowk->id_kategori==$selected)
            $a.="<option value='$rowk->id_kategori' selected>$rowk->kategori</option>";
        else
            $a.="<option value='$rowk->id_kategori'>$rowk->kategori</option>";
    }
    return $a;
	
}


function parse_file_name($file_name){
    $x = strtolower($file_name);    
    $x = str_replace(array(' '), '-', $x);
    return $x;
}

function hapus_gambar($ID){
    global $db;
    $row = $db->get_row("SELECT gambar FROM tb_tempat WHERE id_tempat='$ID'");
    if($row){
        $file1 = 'assets/images/tempat/' . $row->gambar;
        $file2 = 'assets/images/tempat/small_' . $row->gambar;
        if(is_file($file1))
            unlink($file1);
        if(is_file($file2))
            unlink($file2);    
    }
}

function hapus_galeri($ID){
    global $db;
    $row = $db->get_row("SELECT gambar FROM tb_galeri WHERE id_galeri='$ID'");
    if($row){
        $file1 = 'assets/images/galeri/' . $row->gambar;
        $file2 = 'assets/images/galeri/small_' . $row->gambar;
        if(is_file($file1))
            unlink($file1);
        if(is_file($file2))
            unlink($file2);    
    }
}

function get_page($name = ''){
    global $db;
    return $db->get_row("SELECT * FROM tb_page WHERE nama_page='$name'");
}