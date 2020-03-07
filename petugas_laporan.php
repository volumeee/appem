<?php

//menyisipkan file
include 'connection.php';
include 'functions.php';

//authentikasi user
must_authenticated();


switch (isset($_GET['action']) ? $_GET['action'] : null) {
    case 'new':
        if (isset($_POST['new'])) {
            $nama = $_POST['nama_petugas'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $telp = $_POST['telp'];
            $level = $_POST['level'];

            $stmt = $db->prepare("INSERT INTO `petugas` (`nama_petugas`,`username`, `password`, `telp`,`level`) VALUES (?,?,?,?,?)");
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bind_param('sssss', $nama, $username, $hash_password, $telp, $level);
            if ($stmt->execute()) {
                header('location:' . SITE_URL . '/petugas_laporan.php?status=success-created');
                exit;
            }
        }
        require 'views/n_data_petugas.php';
        break;
    case 'edit':
        if (isset($_POST['edit'])) {
            $nama = $_POST['nama_petugas'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $telp = $_POST['telp'];

            $stmt = $db->prepare("UPDATE `petugas` SET `nama_petugas` = ?, `username` = ?, `password`=?, `telp`=? WHERE `id_petugas` = ?");
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $id = $_GET['id'];
            $stmt->bind_param('sssss', $nama, $username, $hash_password, $telp, $id);
            if ($stmt->execute()) {
                header('location:' . SITE_URL . '/petugas_laporan.php?status=success-edited');
            }
        }
        $id = $_GET['id'];
        $result = $db->query("SELECT * FROM `petugas` WHERE `id_petugas`='$id'");
        $petugas = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/e_data_petugas.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        $stmt = $db->prepare("DELETE FROM `petugas` WHERE `id_petugas`=?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        header('location:' . SITE_URL . '/petugas_laporan.php?status=success-deleted');
        exit;
        break;
    default:
        switch (isset($_GET['status']) ? $_GET['status'] : null) {
            case 'success-created':
                $success = 'Petugas Berhasil ditambahkan';
                break;
            case 'success-edited';
                $success = 'Petugas Berhasil Diupdate';
                break;
            case 'success-deleted':
                $success = 'Petugas Telah Dihapus';
                break;
            default:
        }
        $result = $db->query("SELECT * FROM `petugas`");
        $petugas = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/v_data_petugas.php';
}
