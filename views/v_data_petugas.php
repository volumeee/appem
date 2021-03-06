<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <div class="letak">
        <a href="<?php echo SITE_URL; ?>/petugas_laporan.php?action=new"
            class="btn-small waves-effect waves-light place">
            <i class="fa fa-plus-square"></i> Tambah Petugas Baru</a>
        <!-- <a href="<?php echo SITE_URL; ?>/petugas_laporan.php?action=report"
            class="btn-small waves-effect waves-light place">
            <i class="fa fa-clipboard"></i> Print Laporan</a> -->
    </div>
    <div class="responsive-table">
        <?php if (isset($success)) : ?>
        <p><strong>Sukses!</strong><?php echo $success; ?></p>
        <?php endif; ?>
        <table border="1" style="width: 100%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telepon</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach ($petugas as $a) :
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $a['nama_petugas'] ?></td>
                <td><?php echo $a['username'] ?></td>
                <td><?php echo $a['telp'] ?></td>
                <td><?php echo $a['level'] ?></td>
                <td>
                    <a href="<?php echo SITE_URL; ?>/petugas_laporan.php?action=edit&id=<?php echo $a['id_petugas'] ?>"
                        class="btn-small waves-effect waves-light place blue"><i class="fa fa-edit mr-2"></i>
                        Edit</a>
                    <a href="<?php echo SITE_URL; ?>/petugas_laporan.php?action=delete&id=<?php echo $a['id_petugas'] ?>"
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