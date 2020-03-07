<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="<?php echo SITE_URL; ?>/registration.php?action=new" method="POST"
        enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <input name="nik" id="nik" type="text"">
                <label for=" nik">NIK</label>
            </div>
            <div class="input-field col s6">
                <input name="telp" id="telp" type="text">
                <label for="telp">No Telepon</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nama" id="nama" type="text">
                <label for="nama">Nama Lengkap</label>
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
        <button class="btn waves-effect waves-light place" type="submit" name="new">Submit
            <i class="material-icons right">send</i>
        </button>

    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>