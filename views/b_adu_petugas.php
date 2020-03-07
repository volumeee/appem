<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="<?php echo SITE_URL; ?>/tanggapan.php?action=new" method="POST">
        <?php foreach ($tanggapan as $user) { ?>
        <?php } ?>
        <input type="hidden" name="id_pengaduan" id="id_pengaduan" value="<?php echo $user['id_pengaduan'] ?>">
        <?php foreach ($tanggapans as $user) { ?>
        <input type="hidden" name="id_petugas" id="id_petugas" value="<?php echo $user['id_petugas'] ?>">
        <?php } ?>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($tanggapan as $user) { ?>
                <input type="text" readonly value="<?php echo $user['nik'] ?>">
                <?php } ?>
                <label for="nik">NIK</label>
            </div>
            <div class="input-field col s6">
                <?php foreach ($tanggapan as $user) { ?>
                <input type="text" readonly value="<?php echo $user['username'] ?>">
                <?php } ?>
                <label for="username">Nama Lengkap Pelapor</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($tanggapan as $user) { ?>
                <input type="text" readonly value="<?php echo $user['judul'] ?>">
                <label for="judul">Judul Laporan</label>
                <?php } ?>
            </div>
            <div class="input-field col s6">
                <?php foreach ($tanggapan as $user) { ?>
                <input type="text" readonly value="<?php echo $user['tgl_pengaduan'] ?>">
                <label for="judul">Tanggal Laporan</label>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php foreach ($tanggapan as $user) { ?>
                <textarea type="text" readonly class="materialize-textarea"
                    style="height: 200px"><?php echo $user['isi_laporan'] ?></textarea>
                <label for="isi_laporan">Isi Laporan</label>
                <?php } ?>
            </div>
            <div class="col s2">
                <?php foreach ($tanggapan as $user) { ?>
                <label> Foto Laporan</label>
                <div class="card-img">
                    <img src=" ../foto/<?php echo $user['foto'] ?>" width="250px" height="190px">
                </div> <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <textarea name="isi_tanggapan" id="isi_tanggapan" type="text" class="materialize-textarea"
                    style="height: 200px"></textarea>
                <label for="isi_tanggapan">Balas Laporan</label>
            </div>
            <div class="input-field col s6">
                <label for="judul">Validasi & Verifikasi Data</label>
                <br>
                <br>
                <p>
                    <label>
                        <input type="checkbox" name="status" id="status" value="Data Valid Diterima" />
                        <span>Data Valid Diterima</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="status" id="status" value="Data Tidak Valid Ditolak" />
                        <span>Data Tidak Valid Ditolak</span>
                    </label>
                </p>
            </div>
        </div>

        <button class="btn waves-effect waves-light place" type="submit" name="new">Tanggapi
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>