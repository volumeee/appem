<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="<?php echo SITE_URL; ?>/petugas_laporan.php?action=new" method="POST"
        enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <input name="nama_petugas" id="nama_petugas" type="text"">
                <label for=" nama_petugas">Nama Lengkap</label>
            </div>
            <div class="input-field col s6">
                <input name="telp" id="telp" type="text">
                <label for="telp">No Telepon</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="username" id="username" type="text">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s6">
                <input name="password" id="password" type="text">
                <label for="password">Password</label>
            </div>
        </div>

        <div class="">
            <label class="level">Level Petugas</label>
            <p>
                <label>
                    <input type="checkbox" name="level" id="level" value="admin" />
                    <span>Admin</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="level" id="level" value="petugas" />
                    <span>Petugas</span>
                </label>
            </p>
        </div>
        <button class="btn waves-effect waves-light place" type="submit" name="new">Submit
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>