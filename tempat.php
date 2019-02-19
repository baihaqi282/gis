<div class="page-header">
    <h1>Data Tempat</h1>
</div>
<div class="panel panel-default">

    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="tempat" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian Tempat. . ." name="q" value="<?=$_GET['q']?>" />            
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>            
                <a class="btn btn-primary" href="?m=tempat_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Daftar Tempat</a>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="nw">
                <th>No</th>
                <th>Gambar/Foto</th>
                <th>Nama Tempat</th>
				<th>Unsur</th>
                <th>Kategori</th>
                <th>Lattitude</th>
                <th>Longitude</th>
                <th>Lokasi</th>
                <th>Kecamatan</th>
                <th>Desa/Kelurahan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
                
        $sql = "SELECT * 
            FROM tb_tempat p
            WHERE nama_tempat LIKE '%$q%' 
            ORDER BY id_tempat";
        $rows = $db->get_results($sql);
        
        foreach($rows as $rowt):?>
       <tr>
            <td><?=++$no?></td>
            <td><img class="thumbnail" height="60" src="assets/images/tempat/small_<?=$rowt->gambar?>" /></td>
            <td><?=$rowt->nama_tempat?></td>
			<td><?=$rowt->unsur?></td>
            <td><?=$rowt->kategori?></td>
            <td><?=$rowt->lat?></td>
            <td><?=$rowt->lng?></td>
            <td><?=$rowt->lokasi?></td>
            <td><?=$rowt->kecamatan?></td>
            <td><?=$rowt->desa?></td>
            <td class="nw">
				
				 <!--<a class="btn btn-xs btn-success" href="?m=proyek_tambah_list&IDT=<?=$rowt->id_tempat?>"><span class="glyphicon glyphicon-plus"></span></a>-->
				<a class="btn btn-xs btn-info" href="?m=proyek_list&IDT=<?=$rowt->id_tempat?>"><span class="glyphicon glyphicon-list"></span></a>
                <a class="btn btn-xs btn-warning" href="?m=tempat_ubah&IDT=<?=$rowt->id_tempat?>"><span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=tempat_hapus&IDT=<?=$rowt->id_tempat?>" onclick="return confirm('Menghapus Data Tempat Akan Menghapus Data Proyek dan Galeri Yang Bersangkutan?')"><span class="glyphicon glyphicon-trash"></span></a>

			</td>
        </tr>
        <?php endforeach;    ?>
        </table>
    </div>
 
</div>