<?php


//menyisipkan file
include 'connection.php';
include 'functions.php';

//autentifikasi user
must_authenticated();


switch (isset($_GET['action']) ? $_GET['action'] : null) {
    case 'new':
        if (isset($_POST['new'])) {
            $isi_tanggapan = $_POST['isi_tanggapan'];
            $status = $_POST['status'];
            $id_pengaduan = $_POST['id_pengaduan'];
            $id_petugas = $_POST['id_petugas'];

            $stmt = $db->prepare("INSERT INTO `tanggapan` SET `id_pengaduan` = ?, `id_petugas`= ?, `isi_tanggapan` = ? ,`tgl_tanggapan`=? ");
            $now = date('Y-m-d');
            $stmt->bind_param('ssss', $id_pengaduan, $id_petugas, $isi_tanggapan, $now);
            if ($stmt->execute()) {
                $stmt = $db->prepare("UPDATE `pengaduan` SET `status` =? WHERE `pengaduan`.`id_pengaduan` =? ");
                $stmt->bind_param('ss', $status, $id_pengaduan);
                if ($stmt->execute()) {
                    header('location:' . SITE_URL . '/tanggapan.php?status=success-created');
                }
            } else {
                echo $db->error;
                exit;
            }
        }
        $petugas = $_SESSION['username'];
        $result = $db->query("SELECT * FROM `petugas` WHERE `username`='$petugas'");
        $tanggapans = $result->fetch_all(MYSQLI_ASSOC);
        $sql = "SELECT * FROM `pengaduan` WHERE `pengaduan`.`id_pengaduan`=?  ";
        $stmt = $db->prepare($sql);
        $idadu = $_GET['idadu'];
        $stmt->bind_param('s', $idadu);
        $stmt->execute();
        $result = $stmt->get_result();
        $tanggapan = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/b_adu_petugas.php';
        break;
    case 'hapus':
        $idadu = $_GET['idadu'];
        $stmt = $db->prepare("DELETE FROM `pengaduan` WHERE `id_pengaduan`=?");
        $stmt->bind_param('s', $idadu);
        if ($stmt->execute()) {
            $id = $_GET['id'];
            $stmt = $db->prepare("DELETE FROM `tanggapan` WHERE `id_tanggapan`=?");
            $stmt->bind_param('s', $id);
            if ($stmt->execute()) {
                header('location:' . SITE_URL . '/tanggapan.php?sukses=success-deleted');
                exit;
            }
        }
        break;
    default:
        switch (isset($_GET['status']) ? $_GET['status'] : null) {
            case 'success-created':
                $success = 'Pengaduan telah dikirim';
                break;
            default:
        }
        switch (isset($_GET['sukses']) ? $_GET['sukses'] : null) {
            case 'success-deleted':
                $berhasil = 'Pengaduan telah dihapus';
                break;
            default:
        }
        $result = $db->query("SELECT * FROM `pengaduan` WHERE `status`='Terkirim sedang diproses'");
        $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
        $result = $db->query("SELECT * FROM `tanggapan` INNER JOIN `pengaduan` ON `pengaduan`.`id_pengaduan`=`tanggapan`.`id_pengaduan` WHERE `pengaduan`.`status`='Data Tidak Valid Ditolak' OR `pengaduan`.`status`='Data Valid Diterima' ");
        $tangga = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/v_adu_petugas.php';
}