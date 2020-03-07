<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <span class="center besar">
        <p>Laporan Yang Belum Ditanggapi</p>
    </span>
    <div class="letak">
        <a href="" onclick="window.print()" class="btn-small waves-effect waves-light place no-print">
            <i class="fa fa-clipboard"></i> Print Laporan</a>
    </div>
    <div class="responsive-table">
        <?php if (isset($success)) : ?>
        <p class="center" style="color: red"><strong>Sukses!</strong><?php echo $success; ?></p>
        <?php endif; ?>
        <table border="1" style="width: 100%">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Isi Laporan</th>
                <th>Tanggal Laporan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach ($pengaduan as $a) :
                $kalimat = $a['isi_laporan'];
                $sub_kalimat = substr($kalimat, 0, 10);
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $a['nik'] ?></td>
                <td><?php echo $a['username'] ?></td>
                <td><?php echo $sub_kalimat; ?></td>
                <td><?php echo $a['tgl_pengaduan'] ?></td>
                <td> <span class="new badge"><?php echo $a['status'] ?></span></td>
                <td class="no-print">
                    <a href="<?php echo SITE_URL; ?>/tanggapan.php?action=new&idadu=<?php echo $a['id_pengaduan'] ?>"
                        class="btn-small waves-effect waves-light place red"><i class="fa fa-window-close mr-2"></i>
                        Validasi Tanggapan</a>
                </td>
            </tr>
            <?php $i++;
            endforeach; ?>
        </table>

    </div>
</div>
<div class="content">
    <span class="center besar">
        <p>Laporan Yang Telah Ditanggapi</p>
    </span>
    <div class="letak">
        <a href="" onclick="window.print()" class="btn-small waves-effect waves-light place no-print">
            <i class="fa fa-clipboard"></i> Print Laporan</a>
    </div>
    <div class="responsive-table">
        <?php if (isset($berhasil)) : ?>
        <p class="center" style="color: red"><strong>Sukses!</strong><?php echo $berhasil; ?></p>
        <?php endif; ?>
        <table border="1" style="width: 100%">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Isi Laporan</th>
                <th>Tanggal Tanggapan</th>
                <th>Isi Tanggapan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;

            foreach ($tangga as $a) :
                $kalimat1 = $a['isi_laporan'];
                $sub_laporan = substr($kalimat1, 0, 10);
                $kalimat2 = $a['isi_tanggapan'];
                $sub_tanggapan = substr($kalimat2, 0, 10);
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $a['nik'] ?></td>
                <td><?php echo $a['username'] ?></td>
                <td><?php echo $sub_laporan; ?></td>
                <td><?php echo $a['tgl_tanggapan'] ?></td>
                <td><?php echo $sub_tanggapan; ?></td>
                <td> <span class="new badge"><?php echo $a['status'] ?></span></td>
                <td class="no-print">
                    <a href="<?php echo SITE_URL; ?>/tanggapan.php?action=hapus&idadu=<?php echo $a['id_pengaduan'] ?>&id=<?php echo $a['id_tanggapan'] ?>"
                        class="btn-small waves-effect waves-light place red"><i class="fa fa-trash mr-2"></i>
                        Hapus</a>
                </td>
            </tr>
            <?php $i++;
            endforeach; ?>
        </table>

    </div>
</div>
<?php
require_once 'layouts/footer.php';
?>