<?php
    $rowtempat = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[IDT]'"); 
	$rowproyek = $db->get_row("SELECT * FROM tb_proyek WHERE id_proyek='$_GET[IDP]'");
?>
<div class="page-header">
    <h3>Data Galeri Pada <?=$rowtempat->nama_tempat?>, Di Kegiatan <?=$rowproyek->kegiatan?>.  </h3>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="proyek_list" />
			
            <div class="form-group">
               <a class="btn btn-danger" href="?m=proyek_list&IDT=<?=$rowtempat->id_tempat?>"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

               <a class="btn btn-primary" href="?m=galeri_tambah_list&IDT=<?=$rowtempat->id_tempat?>&IDP=<?=$rowproyek->id_proyek?>"><span class="glyphicon glyphicon-plus"></span> Tambah Foto Galeri </a>
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
				<th>Proses Pengerjaan</th>				
                <th>Foto Tersimpan</th>
                <th>Pembaharuan Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tr>
          <?php
            $rowsg = $db->get_results("SELECT * FROM tb_galeri WHERE id_proyek='$_GET[IDP]'");
            foreach($rowsg as $rg):?>
			<tr>
			<td><?=++$no?></td>
			<td><img class="thumbnail" src="assets/images/galeri/small_<?=$rg->gambar?>" height="60" /></td>
			<td>
			<?php
				$rowst = $db->get_results("SELECT * FROM tb_tempat WHERE id_tempat='$rg->id_tempat'");
				foreach($rowst as $rt):?>
				<?=$rt->nama_tempat?>				
				<?php endforeach?>
			</td>
			
			
			<?php
				$rowsp = $db->get_results("SELECT * FROM tb_proyek WHERE id_proyek='$rg->id_proyek'");
				foreach($rowsp as $rp):?>
				<td><?=$rp->kontrak?></td>
				<td><?=$rp->kegiatan?></td>		
				<?php endforeach?>
				
			<td><?=$rg->nama_galeri?></td>
			<td><?=$rg->proses?>%</td>
			<td>
			<?php
			$convertedAd = date("d-F-Y", strtotime($r->disimpan));
			echo $convertedAd ;
			?></td>
			<td>
			<?php
			$convertedUp = date("d-F-Y", strtotime($r->diupdate));
			echo $convertedUp ;
			?>
			</td>
            <td class="nw">
                <a class="btn btn-xs btn-warning" href="?m=galeri_ubah_list&IDT=<?=$rt->id_tempat?>&IDG=<?=$rg->id_galeri?>&IDP=<?=$rp->id_proyek?>"><span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=galeri_hapus_list&IDG=<?=$rg->id_galeri?>&IDP=<?=$rowproyek->id_proyek?>&IDT=<?=$rowtempat->id_tempat?>" onclick="return confirm('Hapus Data Galeri?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        <?php endforeach?>
		
        </tr>
       
        </table>
    </div>
    <div class="panel-footer">
      
    </div>
</div>