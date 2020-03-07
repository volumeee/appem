<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="<?php echo SITE_URL; ?>/pengaduan.php?action=new" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($rakyat as $user) { ?>
                    <input name="nik" id="nik" type="text" readonly value="<?php echo $user['nik'] ?>">
                <?php } ?>
                <label for="nik">NIK</label>
            </div>
            <div class="input-field col s6">
                <?php foreach ($rakyat as $user) { ?>
                    <input name="username" id="username" type="text" readonly value="<?php echo $user['username'] ?>">
                <?php } ?>
                <label for="username">Nama Lengkap</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="judul" id="judul" type="text" data-length="10">
                <label for="judul">Judul Laporan</label>
            </div>
            <div class="input-field col s6">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="isi_laporan" type="text" id="isi_laporan" class="materialize-textarea" data-length="120"></textarea>
                <label for="isi_laporan">Isi Laporan</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input name="foto" id="foto" type="file" accept=".jpg, .jpeg, .png">
                </div>
                <div class="file-path-wrapper">
                    <input name="foto" id="foto" class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>
        </div>
        <button class="btn waves-effect waves-light place" type="submit" name="new">Submit
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>