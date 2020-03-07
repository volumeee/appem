<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <a href="<?php echo SITE_URL; ?>/pengaduan.php?action=new" class="btn-small waves-effect waves-light place">
        <i class="fa fa-plus-square"></i> Tulis Laporan Baru</a>
    <div class="responsive-table">
        <?php if (isset($success)) : ?>
        <p><strong>Sukses!</strong><?php echo $success; ?></p>
        <?php endif; ?>
        <table border="1" style="width: 100%">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Username</th>
                <th>Judul</th>
                <th>Isi Laporan</th>
                <th>Tanggal</th>
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
                <td><?php echo $a['judul'] ?></td>
                <td><?php echo $sub_kalimat; ?></td>
                <td><?php echo $a['tgl_pengaduan'] ?></td>
                <td>
                    <span class="new badge"><?php echo $a['status'] ?></span>
                </td>
                <td>
                    <a href="<?php echo SITE_URL; ?>/pengaduan.php?action=detail&idadu=<?php echo $a['id_pengaduan'] ?>"
                        class="btn-small waves-effect waves-light place blue"><i class="fa fa-inbox mr-2"></i>Lihat
                        detail & Verifikasi</a>
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