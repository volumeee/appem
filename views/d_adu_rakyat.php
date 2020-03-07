<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="" method="">
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($pengaduan as $a) { ?>
                <input name="nik" id="nik" type="text" readonly value="<?php echo $a['nik'] ?>">
                <?php } ?>
                <label for="nik">NIK</label>
            </div>
            <div class="input-field col s6">
                <input name="kuy" id="kuy" type="text" readonly value="<?php echo $_SESSION['username'] ?>">
                <label for="kuy">Nama Lengkap</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col offset-s1 pull-s1">
                <?php foreach ($pengaduan as $a) { ?>
                <input name="judul" id="judul" type="text" readonly value="<?php echo $a['judul'] ?>">
                <?php } ?>
                <label for="judul">Judul Laporan</label>
            </div>
            <div class="row">
                <div class="input-field col offset-s1">
                    <?php foreach ($pengaduan as $a) { ?>
                    <input name="tgl_pengaduan" id="tgl_pengaduan" type="text" readonly
                        value="<?php echo $a['tgl_pengaduan'] ?>">
                    <?php } ?>
                    <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                </div>
                <div class="input-field col offset-s1">
                    <?php foreach ($pengaduan as $a) { ?>
                    <input name="tgl_tanggapan" id="tgl_tanggapan" type="text" readonly
                        value="<?php echo $a['tgl_tanggapan'] ?>">
                    <?php } ?>
                    <label for="tgl_tanggapan">Tanggal Ditanggapi</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($pengaduan as $a) { ?>
                <textarea name="isi_laporan" type="text" id="isi_laporan" class="materialize-textarea" readonly value=""
                    style="height: 200px"><?php echo $a['isi_laporan'] ?></textarea>
                <?php } ?>
                <label for="isi_laporan">Isi Laporan</label>
            </div>
            <div class="input-field col s6">
                <?php foreach ($pengaduan as $a) { ?>
                <textarea class="materialize-textarea" readonly value=""
                    style="height: 200px"><?php echo $a['isi_tanggapan'] ?></textarea>
                <?php } ?>
                <label for="isi_tanggapan">Isi Tanggapan</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s10">
                <?php foreach ($pengaduan as $a) { ?>
                <textarea class="materialize-textarea" readonly value=""><?php echo $a['status'] ?></textarea>
                <?php } ?>
                <label for="isi_tanggapan">Status Laporan</label>
            </div>
            <div class="col s2">
                <?php foreach ($pengaduan as $a) { ?>
                <label> Foto Laporan</label>
                <div class="card-img">
                    <img src=" ../foto/<?php echo $a['foto'] ?>" width="70px" height="70px">
                </div> <?php } ?>
            </div>
        </div>
        <a href="pengaduan.php" class="btn waves-effect waves-light place" type="submit" name="new">Kembali
            <i class="material-icons left">arrow_back</i>
        </a>

    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>