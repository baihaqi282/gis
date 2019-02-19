<div class="page-header">
    <h1>Data Proyek</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="proyek" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />                                                                                
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
            <!--<div class="form-group">
                <a class="btn btn-primary" href="?m=proyek_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Proyek</a>
            </div>-->
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
				<!--<th>Aksi</th>-->
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $pg = new Paging();        
        $limit = 10;
        $offset = $pg->get_offset($limit, $_GET[page]);
        
        $rows = $db->get_results("SELECT g.*, t.nama_tempat 
            FROM tb_proyek g INNER JOIN tb_tempat t ON t.id_tempat=g.id_tempat
            WHERE nama_tempat LIKE '%$q%' ORDER BY nama_tempat LIMIT $offset, $limit");
        
        $no = $offset;
        
        $jumrec = $db->get_var("SELECT COUNT(*) 
            FROM tb_proyek g INNER JOIN tb_tempat t ON t.id_tempat=g.id_tempat 
            WHERE nama_tempat LIKE '%$q%'");
        
        foreach($rows as $rowp):
        ?>
        <tr>
            <td><?=++$no?></td>
            <td><?=$rowp->nama_tempat?></td>
            <td><?=$rowp->kontrak?></td>
			<td><?=$rowp->kegiatan?></td>
			<td><?=$rowp->pekerjaan?></td>
            <td>Rp. <?=$rowp->biaya?></td>
            <td><?=$rowp->waktu?> Hari</td>
			<td><?=$rowp->pelaksana?></td>
			<td><?=$rowp->pengawas?></td>
            <!--<td class="nw">
				<a class="btn btn-xs btn-success" href="?m=galeri_tambah&IDT=<?=$rowp->id_tempat?>&IDP=<?=$rowp->id_proyek?>"><span class="glyphicon glyphicon-plus"></span></a>
                <a class="btn btn-xs btn-warning" href="?m=proyek_ubah&IDP=<?=$rowp->id_proyek?>"><span class="glyphicon glyphicon-edit"></span></a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=proyek_hapus&IDP=<?=$rowp->id_proyek?>" onclick="return confirm('Hapus Data Proyek?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>-->
        </tr>
        <?php endforeach;    ?>
        </table>
    </div>
    <div class="panel-footer">
        <ul class="pagination"><?=$pg->show("m=proyek&q=$_GET[q]&page=", $jumrec, $limit, $_GET[page])?></ul>
    </div>
</div>