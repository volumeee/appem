<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <?php if ($_SESSION['level'] == 'rakyat') { ?>
    <div>
        <p>
            <h3 class="kata center">Lapor !</h3>
        </p>
        <p class="mt-3 center">Merupakan Layanan Aspirasi dan Pengaduan Online Rakyat
            Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang.<br>
            Tulis Laporan
            Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap !</p>
    </div>
    <div class="center">
        <a href="<?php echo SITE_URL; ?>/pengaduan.php" class="waves-effect waves-light btn-large btn-created-new"><i
                class="Large material-icons left">assignment</i>Pengaduan</a>
    </div>
    <?php } else if ($_SESSION['level'] == 'petugas') { ?>
    <div>
        <p>
            <h3 class="kata center">Lapor !</h3>
        </p>
        <p class="mt-3 center">Merupakan Layanan Aspirasi dan Pengaduan Online Rakyat
            Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang.<br>
        </p>
        <h6 class="kata center">Petugas yang terhormat
        </h6>
        <p class="mt-3 center">
            Tolong tanggapi laporan masyarakat dengan baik dan benar !
        </p>
    </div>
    <div class="center">
        <a href="<?php echo SITE_URL; ?>/tanggapan.php" class="waves-effect waves-light btn-large btn-created-new"><i
                class="Large material-icons left">assignment</i>Verifikasi & Tanggapi</a>
    </div>
    <?php } else if ($_SESSION['level'] == 'admin') { ?>
    <div>
        <p>
            <h3 class="kata center">Lapor !</h3>
        </p>
        <p class="mt-3 center">Merupakan Layanan Aspirasi dan Pengaduan Online Rakyat
            Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang.<br>
            Tulis Laporan
            Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap !</p>
    </div>
    <?php } ?>
</div>
<?php
require_once 'layouts/footer.php';
?>