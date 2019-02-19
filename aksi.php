<?php
require_once'functions.php';

    /** LOGIN */ 
    if ($mod=='login'){
        $user = esc_field($_POST['user']);
        $pass = esc_field($_POST['pass']);
        
        $row = $db->get_row("SELECT * FROM tb_user WHERE user='$user' AND pass='$pass'");
        if($row){
            $_SESSION['login'] = $row->user;
            redirect_js("index.php");
        } else{
            print_msg("Salah kombinasi username dan password.");
        }          
    }  else if ($mod=='password'){
        $pass1 = $_POST[pass1];
        $pass2 = $_POST[pass2];
        $pass3 = $_POST[pass3];
        
        $row = $db->get_row("SELECT * FROM tb_user WHERE user='$_SESSION[user]' AND pass='$pass1'");        
        
        if($pass1=='' || $pass2=='' || $pass3=='')
            print_msg('Field bertanda * harus diisi.');
        elseif(!$row)
            print_msg('Password lama salah.');
        elseif( $pass2 != $pass3 )
            print_msg('Password baru dan konfirmasi password baru tidak sama.');
        else{        
            $db->query("UPDATE tb_user SET pass='$pass2' WHERE user='$_SESSION[user]'");                    
            print_msg('Password berhasil diubah.', 'success');
        }
    } elseif($act=='logout'){
        unset($_SESSION['login']);
        header("location:index.php?m=login");
    }
           
    
    /** PURA */    
    if($mod=='tempat_tambah'){
        $nama_tempat = $_POST['nama_tempat'];
        $gambar = $_FILES['gambar'];
		$id_unsur = $_POST['combo_unsur'];
		$unsur = "";
		$kategori = $_POST['combo_kategori'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $radius = $_POST['radius'];
        $lokasi = $_POST['lokasi'];
		$id_kecamatan = $_POST['combo_kecamatan'];
		$kecamatan = "";
		$desa = $_POST['combo_desa'];
        $keterangan = esc_field($_POST['keterangan']);
		$disimpan = date('Y-m-d');
		$diupdate = date('Y-m-d');
		//$disimpan = date('l, d F Y', strtotime(date('d-m-Y')));
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
		
		if ($id_unsur == 1) {
			$unsur = "Toponimi Bangunan";
		} else if ($id_unsur == 2) {
			$unsur = "Toponimi Cakupan";
		} else if ($id_unsur == 3) {
			$unsur = "Toponimi Industri";
		} else if ($id_unsur == 4) {
			$unsur = "Toponimi Olahraga";
		} else if ($id_unsur == 5) {
			$unsur = "Toponimi Pariwisata, Seni dan Budaya";
		} else if ($id_unsur == 6) {
			$unsur = "Toponimi Pemerintahan";
		} else if ($id_unsur == 7) {
			$unsur = "Toponimi Pemerintahan Negara Asing";
		} else if ($id_unsur == 8) {
			$unsur = "Toponimi Pendidikan dan IPTEK";
		} else if ($id_unsur == 9) {
			$unsur = "Toponimi Perairan";
		} else if ($id_unsur == 10) {
			$unsur = "Toponimi Perekonomian dan Perdagangan";
		} else if ($id_unsur == 11) {
			$unsur = "Toponimi Peribadatan";
		} else if ($id_unsur == 12) {
			$unsur = "Toponimi Permakaman";
		} else if ($id_unsur == 13) {
			$unsur = "Toponimi Permukiman";
		} else if ($id_unsur == 14) {
			$unsur = "Toponimi Pertahanan dan Keamanan";
		} else if ($id_unsur == 15) {
			$unsur = "Toponimi Pertambangan Mineral";
		} else if ($id_unsur == 16) {
			$unsur = "Toponimi Relief";
		} else if ($id_unsur == 17) {
			$unsur = "Toponimi Sarana Kesehatan";
		} else if ($id_unsur == 18) {
			$unsur = "Toponimi Sosial";
		} else if ($id_unsur == 19) {
			$unsur = "Toponimi Transportasi";
		} else if ($id_unsur == 20) {
			$unsur = "Toponimi Utilitas";
		} else if ($id_unsur == 21) {
			$unsur = "Toponimi Vegetasi dan Lahan Terbuka";
		} else if ($id_unsur == 22) {
			$unsur = "Toponimi Wilayah Administrasi";
		} else {
			$unsur = "";
		}
		
		if ($id_kecamatan == 1) {
			$kecamatan = "Banua Lawas";
		} else if ($id_kecamatan == 2) {
			$kecamatan = "Kelua";
		} else if ($id_kecamatan == 3) {
			$kecamatan = "Tanta";
		} else if ($id_kecamatan == 4) {
			$kecamatan = "Tanjung";
		} else if ($id_kecamatan == 5) {
			$kecamatan = "Haruai";
		} else if ($id_kecamatan == 6) {
			$kecamatan = "Murung Pudak";
		} else if ($id_kecamatan == 7) {
			$kecamatan = "Muara Uya";
		} else if ($id_kecamatan == 8) {
			$kecamatan = "Muara Harus";
		} else if ($id_kecamatan == 9) {
			$kecamatan = "Pugaan";
		} else if ($id_kecamatan == 10) {
			$kecamatan = "Upau";
		} else if ($id_kecamatan == 11) {
			$kecamatan = "Jaro";
		} else if ($id_kecamatan == 12) {
			$kecamatan = "Bintang Ara";
		} else {
			$kecamatan = "";
		}
        
        if($nama_tempat=='' || $gambar['name']=='' || $lat=='' || $lng=='' || $lokasi=='' || $kecamatan=='' || $desa==''  || $unsur=='' || $kategori=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{
            $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
            $img = new SimpleImage($gambar['tmp_name']);
            if($img->get_width()>800)
                $img->fit_to_width(800);
            if($img->get_height()>600);
                $img->fit_to_height(600);
            $img->save('assets/images/tempat/' . $file_name);            
            $img->thumbnail(180, 120);
            $img->save('assets/images/tempat/small_' . $file_name);
            
            $db->query("INSERT INTO tb_tempat (nama_tempat, gambar, id_unsur, unsur, kategori, lat, lng, radius, lokasi, id_kecamatan, kecamatan, desa, keterangan, disimpan, diupdate) 
                    VALUES ('$nama_tempat', '$file_name', '$id_unsur', '$unsur', '$kategori', '$lat', '$lng', $radius, '$lokasi', $id_kecamatan, '$kecamatan', '$desa', '$keterangan', '$disimpan', '$diupdate')");                       
            redirect_js("index.php?m=tempat");
        }                    
    } else if($mod=='tempat_ubah'){
        $nama_tempat = $_POST['nama_tempat'];
        $gambar = $_FILES['gambar'];
		$id_unsur = $_POST['combo_unsur'];
		$unsur = "";
		$kategori = $_POST['combo_kategori'];
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $radius = $_POST['radius'];
        $lokasi = $_POST['lokasi'];
		$id_kecamatan = $_POST['combo_kecamatan'];
		$kecamatan = "";
		$desa = $_POST['combo_desa'];
        $keterangan = esc_field($_POST['keterangan']);
		$diupdate = date('Y-m-d');
		//$diupdatestring = date('l, d F Y', strtotime(date('d-m-Y')));
		
        
		if ($id_unsur == 1) {
			$unsur = "Toponimi Bangunan";
		} else if ($id_unsur == 2) {
			$unsur = "Toponimi Cakupan";
		} else if ($id_unsur == 3) {
			$unsur = "Toponimi Industri";
		} else if ($id_unsur == 4) {
			$unsur = "Toponimi Olahraga";
		} else if ($id_unsur == 5) {
			$unsur = "Toponimi Pariwisata, Seni dan Budaya";
		} else if ($id_unsur == 6) {
			$unsur = "Toponimi Pemerintahan";
		} else if ($id_unsur == 7) {
			$unsur = "Toponimi Pemerintahan Negara Asing";
		} else if ($id_unsur == 8) {
			$unsur = "Toponimi Pendidikan dan IPTEK";
		} else if ($id_unsur == 9) {
			$unsur = "Toponimi Perairan";
		} else if ($id_unsur == 10) {
			$unsur = "Toponimi Perekonomian dan Perdagangan";
		} else if ($id_unsur == 11) {
			$unsur = "Toponimi Peribadatan";
		} else if ($id_unsur == 12) {
			$unsur = "Toponimi Permakaman";
		} else if ($id_unsur == 13) {
			$unsur = "Toponimi Permukiman";
		} else if ($id_unsur == 14) {
			$unsur = "Toponimi Pertahanan dan Keamanan";
		} else if ($id_unsur == 15) {
			$unsur = "Toponimi Pertambangan Mineral";
		} else if ($id_unsur == 16) {
			$unsur = "Toponimi Relief";
		} else if ($id_unsur == 17) {
			$unsur = "Toponimi Sarana Kesehatan";
		} else if ($id_unsur == 18) {
			$unsur = "Toponimi Sosial";
		} else if ($id_unsur == 19) {
			$unsur = "Toponimi Transportasi";
		} else if ($id_unsur == 20) {
			$unsur = "Toponimi Utilitas";
		} else if ($id_unsur == 21) {
			$unsur = "Toponimi Vegetasi dan Lahan Terbuka";
		} else if ($id_unsur == 22) {
			$unsur = "Toponimi Wilayah Administrasi";
		} else {
			$unsur = "";
		}
		
		if ($id_kecamatan == 1) {
			$kecamatan = "Banua Lawas";
		} else if ($id_kecamatan == 2) {
			$kecamatan = "Kelua";
		} else if ($id_kecamatan == 3) {
			$kecamatan = "Tanta";
		} else if ($id_kecamatan == 4) {
			$kecamatan = "Tanjung";
		} else if ($id_kecamatan == 5) {
			$kecamatan = "Haruai";
		} else if ($id_kecamatan == 6) {
			$kecamatan = "Murung Pudak";
		} else if ($id_kecamatan == 7) {
			$kecamatan = "Muara Uya";
		} else if ($id_kecamatan == 8) {
			$kecamatan = "Muara Harus";
		} else if ($id_kecamatan == 9) {
			$kecamatan = "Pugaan";
		} else if ($id_kecamatan == 10) {
			$kecamatan = "Upau";
		} else if ($id_kecamatan == 11) {
			$kecamatan = "Jaro";
		} else if ($id_kecamatan == 12) {
			$kecamatan = "Bintang Ara";
		} else {
			$kecamatan = "";
		}
		
        if($nama_tempat=='' || $lat=='' || $lng=='' || $lokasi=='' || $kecamatan=='' || $desa==''  || $unsur=='' || $kategori=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{           
            if($gambar['name']!=''){
                hapus_gambar($_GET['IDT']);
                                
                $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
                $img = new SimpleImage($gambar['tmp_name']);
                if($img->get_width()>800)
                    $img->fit_to_width(800);
                if($img->get_height()>600);
                    $img->fit_to_height(600);
                $img->save('assets/images/tempat/' . $file_name);            
                $img->thumbnail(180, 120);
                $img->save('assets/images/tempat/small_' . $file_name);
                
                $sql_gambar = ", gambar='$file_name'";
            }
			
			
            $db->query("UPDATE tb_tempat SET nama_tempat='$nama_tempat' $sql_gambar , id_unsur='$id_unsur', unsur='$unsur', kategori='$kategori', lat='$lat', lng='$lng', radius='$radius', lokasi='$lokasi', id_kecamatan=$id_kecamatan, kecamatan='$kecamatan', desa='$desa', keterangan='$keterangan', diupdate='$diupdate' WHERE id_tempat='$_GET[IDT]'");
            redirect_js("index.php?m=tempat");
        }    
    } else if ($act=='tempat_hapus'){
        hapus_gambar($_GET['IDT']);
        $db->query("DELETE FROM tb_tempat WHERE id_tempat='$_GET[IDT]'");
		 $db->query("DELETE FROM tb_proyek WHERE id_tempat='$_GET[IDT]'");
		
		$rowst = $db->get_results("SELECT * FROM tb_galeri WHERE id_tempat='$_GET[IDT]'");
		foreach($rowst as $rg):
		hapus_galeri($rg->id_galeri);	
		endforeach;
		 
		$db->query("DELETE FROM tb_galeri WHERE id_tempat='$_GET[IDT]'");
        header("location:index.php?m=tempat");
    } 
    
	    /** Proyek */    
    if($mod=='proyek_tambah'){
        $id_tempat = $_POST['id_tempat'];
        $kontrak = $_POST['kontrak'];
        $kegiatan = $_POST['kegiatan'];
        $pekerjaan = $_POST['pekerjaan'];
        $biaya = $_POST['biaya'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];		
        $waktu = $_POST['waktu'];
        $pelaksana = $_POST['pelaksana'];
        $pengawas = $_POST['pengawas'];
		$disimpan = date('Y-m-d');
		$diupdate = date('Y-m-d');
        //$disimpan = date('l, d F Y', strtotime(date('d-m-Y')));
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
		if($kontrak=='' || $kegiatan=='' || $pekerjaan=='' || $biaya=='' || $awal=='' || $akhir==''  || $waktu=='' || $pelaksana=='' || $pengawas=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{           
            $db->query("INSERT INTO tb_proyek (id_tempat, kontrak, kegiatan, pekerjaan, biaya, awal, akhir, waktu, pelaksana, pengawas, disimpan, diupdate) VALUES
			('$id_tempat', '$kontrak', '$kegiatan', '$pekerjaan', '$biaya', '$awal', '$akhir', '$waktu', '$pelaksana', '$pengawas', '$disimpan', '$diupdate')");                       
            redirect_js("index.php?m=proyek");       
		}			
    }  else if($mod=='proyek_ubah'){
        $id_tempat = $_POST['id_tempat'];
        $kontrak = $_POST['kontrak'];
        $kegiatan = $_POST['kegiatan'];
        $pekerjaan = $_POST['pekerjaan'];
        $biaya = $_POST['biaya'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];		
        $waktu = $_POST['waktu'];
        $pelaksana = $_POST['pelaksana'];
        $pengawas = $_POST['pengawas'];
		$diupdate = date('Y-m-d');
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
        
        if($kontrak=='' || $kegiatan=='' || $pekerjaan=='' || $biaya=='' || $awal=='' || $akhir==''  || $waktu=='' || $pelaksana=='' || $pengawas=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{  
            $db->query("UPDATE tb_proyek SET id_tempat='$id_tempat', kontrak='$kontrak', kegiatan='$kegiatan', pekerjaan='$pekerjaan', biaya='$biaya', awal='$awal', akhir='$akhir', waktu='$waktu', pelaksana='$pelaksana', pengawas='$pengawas', diupdate='$diupdate' WHERE id_proyek='$_GET[IDP]'");
            redirect_js("index.php?m=proyek");
        }    
    } else if ($act=='proyek_hapus'){
        hapus_galeri($_GET['IDP']);
        $db->query("DELETE FROM tb_proyek WHERE id_proyek='$_GET[IDP]'");
		
		$rowsp = $db->get_results("SELECT * FROM tb_galeri WHERE id_proyek='$_GET[IDP]'");
		foreach($rowsp as $rg):
		hapus_galeri($rg->id_galeri);	
		endforeach;
		
		$db->query("DELETE FROM tb_galeri WHERE id_tempat='$_GET[IDT]'");
        header("location:index.php?m=proyek");
    }            
	
	 /** GAMBAR */    
    if($mod=='galeri_tambah'){
        $id_tempat = $_POST['id_tempat'];
		$id_proyek = $_POST['id_proyek'];
		$gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
		$proses = $_POST['proses'];
        $ket_galeri = $_POST['ket_galeri'];
		$disimpan = date('Y-m-d');
		$diupdate = date('Y-m-d');
        //$disimpan = date('l, d F Y', strtotime(date('d-m-Y')));
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
		
        if( $gambar[name]=='' || $nama_galeri==''  || $proses==''  )
            print_msg("Field bertanda * tidak boleh kosong!");
        else{            
            $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
            $img = new SimpleImage($gambar['tmp_name']);
            if($img->get_width()>800)
                $img->fit_to_width(800);
            if($img->get_height()>600);
                $img->fit_to_height(600);
            $img->save('assets/images/galeri/' . $file_name);
            $img->thumbnail(180, 120);
            $img->save('assets/images/galeri/small_' . $file_name);
            
            $db->query("INSERT INTO tb_galeri (id_tempat, id_proyek, gambar, nama_galeri, proses, ket_galeri, disimpan, diupdate) 
                    VALUES('$id_tempat','$id_proyek', '$file_name', '$nama_galeri','$proses', '$ket_galeri', '$disimpan', '$diupdate')");                       
            redirect_js("index.php?m=galeri");
        }                    
    } else if($mod=='galeri_ubah'){
        $id_tempat = $_POST['id_tempat'];
		$id_proyek = $_POST['id_proyek'];
		$gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
		$proses = $_POST['proses'];
        $ket_galeri = $_POST['ket_galeri'];
		$diupdate = date('Y-m-d');
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
        
        if(  $nama_galeri==''  || $proses==''  )
            print_msg("Field bertanda * tidak boleh kosong!");
        else{  
            if($gambar[tmp_name]!=''){
                hapus_galeri($_GET['IDG']);
                $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
                $img = new SimpleImage($gambar['tmp_name']);
                if($img->get_width()>800)
                    $img->fit_to_width(800);
                if($img->get_height()>600);
                    $img->fit_to_height(600);
                $img->save('assets/images/galeri/' . $file_name);
                $img->thumbnail(180, 120);
                $img->save('assets/images/galeri/small_' . $file_name);
                $sql_gambar = ", gambar='$file_name'";
            }
            $db->query("UPDATE tb_galeri SET id_tempat='$id_tempat', id_proyek='$id_proyek',proses='$proses', nama_galeri='$nama_galeri' $sql_gambar, ket_galeri='$ket_galeri', diupdate='$diupdate' WHERE id_galeri='$_GET[IDG]'");
            redirect_js("index.php?m=galeri");
        }    
    } else if ($act=='galeri_hapus'){
        hapus_galeri($_GET['IDG']);
        $db->query("DELETE FROM tb_galeri WHERE id_galeri='$_GET[IDG]'");
        header("location:index.php?m=galeri");
    }  


	/** Proyek List */    
    if($mod=='proyek_tambah_list'){
        $id_tempat = $_POST['id_tempat'];
        $kontrak = $_POST['kontrak'];
        $kegiatan = $_POST['kegiatan'];
        $pekerjaan = $_POST['pekerjaan'];
        $biaya = $_POST['biaya'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];		
        $waktu = $_POST['waktu'];
        $pelaksana = $_POST['pelaksana'];
        $pengawas = $_POST['pengawas'];
		$disimpan = date('Y-m-d');
		$diupdate = date('Y-m-d');
        //$disimpan = date('l, d F Y', strtotime(date('d-m-Y')));
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
		if($kontrak=='' || $kegiatan=='' || $pekerjaan=='' || $biaya=='' || $awal=='' || $akhir==''  || $waktu=='' || $pelaksana=='' || $pengawas=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{           
            $db->query("INSERT INTO tb_proyek (id_tempat, kontrak, kegiatan, pekerjaan, biaya, awal, akhir, waktu, pelaksana, pengawas, disimpan, diupdate) VALUES
			('$id_tempat', '$kontrak', '$kegiatan', '$pekerjaan', '$biaya', '$awal', '$akhir', '$waktu', '$pelaksana', '$pengawas', '$disimpan', '$diupdate')");                       
            redirect_js("index.php?m=proyek_list&IDT=$id_tempat");       
		}			
    }  else if($mod=='proyek_ubah_list'){
        $id_tempat = $_POST['id_tempat'];
        $kontrak = $_POST['kontrak'];
        $kegiatan = $_POST['kegiatan'];
        $pekerjaan = $_POST['pekerjaan'];
        $biaya = $_POST['biaya'];
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];		
        $waktu = $_POST['waktu'];
        $pelaksana = $_POST['pelaksana'];
        $pengawas = $_POST['pengawas'];
		$diupdate = date('Y-m-d');
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
        
        if($kontrak=='' || $kegiatan=='' || $pekerjaan=='' || $biaya=='' || $awal=='' || $akhir==''  || $waktu=='' || $pelaksana=='' || $pengawas=='')
            print_msg("Field bertanda * tidak boleh kosong!");
        else{  
            $db->query("UPDATE tb_proyek SET id_tempat='$id_tempat', kontrak='$kontrak', kegiatan='$kegiatan', pekerjaan='$pekerjaan', biaya='$biaya', awal='$awal', akhir='$akhir', waktu='$waktu', pelaksana='$pelaksana', pengawas='$pengawas', diupdate='$diupdate' WHERE id_proyek='$_GET[IDP]'");
            redirect_js("index.php?m=proyek_list&IDT=$id_tempat");   
        }    
    } else if ($act=='proyek_hapus_list'){

        hapus_galeri($_GET['IDP']);
        $db->query("DELETE FROM tb_proyek WHERE id_proyek='$_GET[IDP]'");
		
		$rowsp = $db->get_results("SELECT * FROM tb_galeri WHERE id_proyek='$_GET[IDP]'");
		foreach($rowsp as $rg):
		hapus_galeri($rg->id_galeri);	
		endforeach;
		
		$db->query("DELETE FROM tb_galeri WHERE id_tempat='$_GET[IDT]'");
		
		//$rowsp1 = $db->get_results("SELECT * FROM tb_proyek WHERE id_proyek='$_GET[IDP]'");
		//foreach($rowsp1 as $rg1):
        header("location:index.php?m=proyek_list&IDT=$_GET[IDT]");
		//redirect_js("index.php?m=proyek_list&IDT=$_GET[IDP]"); 
		//endforeach;
    }	
	
	
	 /** GAMBAR List */    
    if($mod=='galeri_tambah_list'){
        $id_tempat = $_POST['id_tempat'];
		$id_proyek = $_POST['id_proyek'];
		$gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
		$proses = $_POST['proses'];
        $ket_galeri = $_POST['ket_galeri'];
		$disimpan = date('Y-m-d');
		$diupdate = date('Y-m-d');
        //$disimpan = date('l, d F Y', strtotime(date('d-m-Y')));
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
		
        if( $gambar[name]=='' || $nama_galeri==''  || $proses==''  )
            print_msg("Field bertanda * tidak boleh kosong!");
        else{            
            $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
            $img = new SimpleImage($gambar['tmp_name']);
            if($img->get_width()>800)
                $img->fit_to_width(800);
            if($img->get_height()>600);
                $img->fit_to_height(600);
            $img->save('assets/images/galeri/' . $file_name);
            $img->thumbnail(180, 120);
            $img->save('assets/images/galeri/small_' . $file_name);
            
            $db->query("INSERT INTO tb_galeri (id_tempat, id_proyek, gambar, nama_galeri, proses, ket_galeri, disimpan, diupdate) 
                    VALUES('$id_tempat','$id_proyek', '$file_name', '$nama_galeri','$proses', '$ket_galeri', '$disimpan', '$diupdate')");                       
            redirect_js("index.php?m=galeri_list&IDT=$id_tempat&IDP=$id_proyek");
        }                    
    } else if($mod=='galeri_ubah_list'){
        $id_tempat = $_POST['id_tempat'];
		$id_proyek = $_POST['id_proyek'];
		$gambar = $_FILES['gambar'];
        $nama_galeri = $_POST['nama_galeri'];
		$proses = $_POST['proses'];
        $ket_galeri = $_POST['ket_galeri'];
		$diupdate = date('Y-m-d');
		//$diupdate = date('l, d F Y', strtotime(date('d-m-Y')));
        
        if(  $nama_galeri==''  || $proses==''  )
            print_msg("Field bertanda * tidak boleh kosong!");
        else{  
            if($gambar[tmp_name]!=''){
                hapus_galeri($_GET['IDG']);
                $file_name = rand(1000, 9999) . parse_file_name($gambar['name']);
                $img = new SimpleImage($gambar['tmp_name']);
                if($img->get_width()>800)
                    $img->fit_to_width(800);
                if($img->get_height()>600);
                    $img->fit_to_height(600);
                $img->save('assets/images/galeri/' . $file_name);
                $img->thumbnail(180, 120);
                $img->save('assets/images/galeri/small_' . $file_name);
                $sql_gambar = ", gambar='$file_name'";
            }
            $db->query("UPDATE tb_galeri SET id_tempat='$id_tempat', id_proyek='$id_proyek',proses='$proses', nama_galeri='$nama_galeri' $sql_gambar, ket_galeri='$ket_galeri', diupdate='$diupdate' WHERE id_galeri='$_GET[IDG]'");
            redirect_js("index.php?m=galeri_list&IDT=$id_tempat&IDP=$id_proyek");
        }    
    } else if ($act=='galeri_hapus_list'){
        hapus_galeri($_GET['IDG']);
        $db->query("DELETE FROM tb_galeri WHERE id_galeri='$_GET[IDG]'");
        header("location:index.php?m=galeri_list&IDT=$_GET[IDT]&IDP=$_GET[IDP]");
    }  

	