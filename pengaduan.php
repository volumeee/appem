<?php


//menyisipkan file
include 'connection.php';
include 'functions.php';

//autentifikasi user
must_authenticated();


switch (isset($_GET['action']) ? $_GET['action'] : null) {
    case 'new':
        if (isset($_POST['new'])) {
            $nik = $_POST['nik'];
            $username = $_POST['username'];
            $isi_laporan = $_POST['isi_laporan'];
            $foto = $_FILES['foto']['name'];
            $file = $_FILES['foto']['tmp_name'];
            $status = 'Terkirim sedang diproses';
            $judul  = $_POST['judul'];
            move_uploaded_file($file, 'foto/' . $foto);

            $stmt = $db->prepare("INSERT INTO `pengaduan` (`nik`,`username`,`isi_laporan`,`foto`,`status`,`judul`,`tgl_pengaduan` ) VALUES (?,?,?,?,?,?,?)");
            $now = date('Y-m-d');
            $stmt->bind_param('sssssss', $nik, $username, $isi_laporan, $foto, $status, $judul, $now);
            if (!$stmt->execute()) {
                echo $db->error;
                exit;
            } else {
                header('location: ' . SITE_URL . '/pengaduan.php?status=success-created');
                exit;
            }
        }
        $npnik = $_SESSION['username'];
        $result = $db->query("SELECT * FROM `masyarakat` WHERE `username`='$npnik' AND `level`='rakyat'");
        $rakyat = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/n_adu_rakyat.php';
        break;
    case 'detail':
        $sql = "SELECT * FROM `pengaduan` INNER JOIN `tanggapan` ON `pengaduan`.`id_pengaduan`=`tanggapan`.`id_pengaduan` WHERE `tanggapan`.`id_pengaduan`=?  ";
        $stmt = $db->prepare($sql);
        $idadu = $_GET['idadu'];
        $stmt->bind_param('s', $idadu);
        $stmt->execute();
        $result = $stmt->get_result();
        $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/d_adu_rakyat.php';
        break;
    default:
        switch (isset($_GET['status']) ? $_GET['status'] : null) {
            case 'success-created':
                $success = 'Pengaduan telah dikirim';
                break;
            default:
        }
        $niku = $_SESSION['username'];
        $result = $db->query("SELECT * FROM `pengaduan` WHERE `username`='$niku' ");
        $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/v_adu_rakyat.php';
}