<?php
require_once 'layouts/header.php';
?>
<div class="content">
    <form class="col s12" action="<?php echo SITE_URL; ?>/registration.php?action=edit&id=<?php echo $_GET['nik']; ?>"
        method="POST">
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($rakyat as $a) { ?>
                <input name="nama" id="nama" type="text" value="<?php echo $a['nama'] ?>">
                <?php } ?>
                <label for="nama">Nama</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($rakyat as $a) { ?>
                <input name="username" id="username" type="text" value="<?php echo $a['username'] ?>">
                <?php } ?>
                <label for="username">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($rakyat as $a) { ?>
                <input name="password" id="password" type="text" value="">
                <?php } ?>
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <?php foreach ($rakyat as $a) { ?>
                <input name="telp" id="telp" type="text" value="<?php echo $a['telp'] ?>">
                <?php } ?>
                <label for="telp">Telp</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light place" type="submit" name="edit">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
<?php
require_once 'layouts/footer.php';
?>