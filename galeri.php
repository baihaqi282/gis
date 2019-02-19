
<div class="page-header">
    <h1>Data Galeri Foto</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="galeri" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />                                                                                
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
      
        </form>
    </div>
    <div class="oxa">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="nw">
                <th>No</th>
                <th>Gambar/Foto</th>
                <th>Nama Tempat</th>
                <th>No Kontrak</th>
                <th>Kegiatan</th>
				<th>Nama Judul Galeri</th>
				<th>Pengerjaan</th>				
                <th>Foto Tersimpan</th>
                <th>Pembaharuan Foto</th>
                 <!--<th>Aksi</th>-->
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $pg = new Paging();        
        $limit = 25;
        $offset = $pg->get_offset($limit, $_GET[page]);
        
		//$rowsp = $db->get_results("SELECT g.*, t.id_proyek 
        //    FROM tb_galeri g INNER JOIN tb_proyek t ON t.id_proyek=g.id_proyek
        //    WHERE id_proyek = $q ORDER BY id_proyek LIMIT $offset, $limit");
		
        $rowsg = $db->get_results("SELECT g.*, t.nama_tempat 
            FROM tb_galeri g INNER JOIN tb_tempat t ON t.id_tempat=g.id_tempat
            WHERE nama_tempat LIKE '%$q%' ORDER BY nama_tempat LIMIT $offset, $limit");
        
		
		
        $no = $offset;
        
        $jumrec = $db->get_var("SELECT COUNT(*) 
            FROM tb_galeri g INNER JOIN tb_tempat t ON t.id_tempat=g.id_tempat 
            WHERE nama_tempat LIKE '%$q%'");
        
		
        
		foreach($rowsg as $rowg ):
	
        ?>
        <tr>
            <td><?=++$no?></td>
            <td><img class="thumbnail" src="assets/images/galeri/small_<?=$rowg->gambar?>" height="60" /></td>
            <td><?=$rowg->nama_tempat?></td>
	
			<?php
            $rowsp = $db->get_results("SELECT * FROM tb_proyek WHERE id_proyek='$rowg->id_proyek'");
            foreach($rowsp as $rowp):?>
            <td><?=$rowp->kontrak?></td>
			<td><?=$rowp->kegiatan?></td>
			<?php endforeach?>
			
			<td><?=$rowg->nama_galeri?></td>
            <td><?=$rowg->proses?>%</td>
			<td><?php
			$convertedAd = date("d-F-Y", strtotime($rowg->disimpan));
			echo $convertedAd ;
			?></td>
			<td><?php
			$convertedAd = date("d-F-Y", strtotime($rowg->diupdate));
			echo $convertedAd ;
			?></td>
             <!-- <td class="nw">
                <a class="btn btn-xs btn-warning" href="?m=galeri_ubah&IDT=<?=$rowg->id_tempat?>&IDG=<?=$rowg->id_galeri?>&IDP=<?=$rowg->id_proyek?>"><span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=galeri_hapus&IDG=<?=$rowg->id_galeri?>" onclick="return confirm('Hapus Data Galeri?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>-->
        </tr>
        <?php endforeach; ?>
        </table>
    </div>
    <div class="panel-footer">
        <ul class="pagination"><?=$pg->show("m=galeri&q=$_GET[q]&page=", $jumrec, $limit, $_GET[page])?></ul>
    </div>
</div>