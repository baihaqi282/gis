<?php
    $rowt = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[IDT]'"); 
	
?>
<div class="page-header">
    <h2>Data Proyek Pada <?=$rowt->nama_tempat?>. </h2>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="proyek_list" />
			
            <div class="form-group">
               <a class="btn btn-danger" href="?m=tempat"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
      
               <a class="btn btn-primary" href="?m=proyek_tambah_list&IDT=<?=$rowt->id_tempat?>"><span class="glyphicon glyphicon-plus"></span> Tambah Proyek </a>
            </div>
        </form>
    </div>
    <div class="oxa">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="nw">
                <th>No</th>
                <th>Nama Tempat</th>
                <th>No Kontrak</th>
                <th>Kegiatan</th>
                <th>Pekerjaan</th>
                <th>Biaya Anggaran</th>
                <th>Pelaksanaan</th>
                <th>Pelaksana Proyek</th>
                <th>Pengawas Proyek</th>
				<th>Aksi</th>
            </tr>
        </thead>
        <?php
            $rowst = $db->get_results("SELECT * FROM tb_proyek WHERE id_tempat='$_GET[IDT]'");
            foreach($rowst as $rowp):?>
			<tr>
			<td><?=++$no?></td>
			<td><?=$rowt->nama_tempat?></td>
            <td><?=$rowp->kontrak?></td>
			<td><?=$rowp->kegiatan?></td>
			<td><?=$rowp->pekerjaan?></td>
            <td>Rp. <?=$rowp->biaya?></td>
            <td><?=$rowp->waktu?> Hari</td>
			<td><?=$rowp->pelaksana?></td>
			<td><?=$rowp->pengawas?></td>				
		
            <td class="nw">
				<a class="btn btn-xs btn-info" href="?m=galeri_list&IDT=<?=$rowp->id_tempat?>&IDP=<?=$rowp->id_proyek?>"><span class="glyphicon glyphicon-list"></span></a>
				 <!--<a class="btn btn-xs btn-success" href="?m=galeri_tambah_list&IDT=<?=$rowp->id_tempat?>&IDP=<?=$rowp->id_proyek?>"><span class="glyphicon glyphicon-plus"></span></a>-->
				<a class="btn btn-xs btn-warning" href="?m=proyek_ubah_list&IDP=<?=$rowp->id_proyek?>"><span class="glyphicon glyphicon-edit"></span></a>
				<a class="btn btn-xs btn-danger" href="aksi.php?act=proyek_hapus_list&IDP=<?=$rowp->id_proyek?>&IDT=<?=$rowp->id_tempat?>" onclick="return confirm('Hapus Data Proyek Dan Daga Galeri Yang Terkait?')"><span class="glyphicon glyphicon-trash"></span></a>
				
			</td>
        </tr>
        <?php endforeach;    ?>
        </table>
    </div>
    <div class="panel-footer">
   
    </div>
</div>