<?php

//menyisipkan file
include 'connection.php';
include 'functions.php';

//authentikasi user
// must_authenticated();


switch (isset($_GET['action']) ? $_GET['action'] : null) {
    case 'daftar':
        if (isset($_POST['daftar'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $telp = $_POST['telp'];

            $stmt = $db->prepare("INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES (?,?,?,?,?)");
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bind_param('sssss', $nik, $nama, $username, $hash_password, $telp);
            if ($stmt->execute()) {
                header('location:login.php');
                exit(0);
            }
        }
        break;
    case 'new';
        if (isset($_POST['new'])) {
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $telp = $_POST['telp'];

            $stmt = $db->prepare("INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES (?,?,?,?,?)");
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bind_param('sssss', $nik, $nama, $username, $hash_password, $telp);
            if ($stmt->execute()) {
                header('location:' . SITE_URL . 'registration.php?status=success-created');
                exit;
            }
        }
        require 'views/n_data_pengguna.php';
        break;
    case 'edit';
        if (isset($_POST['edit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $telp = $_POST['telp'];

            $stmt = $db->prepare("UPDATE `masyarakat` SET `nama`=?,`username`=?,`password`=?,`telp`=? WHERE `nik`=?");
            $hash_password = password_hash($password, PASSWORD_BCRYPT);
            $id = $_GET['id'];
            $stmt->bind_param('sssss', $nama, $username, $password, $telp, $id);
            if ($stmt->execute()) {
                header('location:' . SITE_URL . '/registration.php?status=success-edited');
            }
        }
        $id = $_GET['nik'];
        $result = $db->query("SELECT * FROM `masyarakat` WHERE `nik`='$id'");
        $rakyat = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/e_data_pengguna.php';
        break;
    case 'delete';
        $id = $_GET['nik'];
        $stmt = $db->prepare("DELETE FROM `masyarakat` WHERE `nik`=?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        header('location:' . SITE_URL . '/registration.php?status=success-deleted');
        exit;
        break;
    default:
        switch (isset($_GET['status']) ? $_GET['status'] : null) {
            case 'success-created':
                $success = 'Pengguna Berhasil ditambahkan';
                break;
            case 'success-edited':
                $success = 'Pengguna telah diedit';
                break;
            case 'success-deleted':
                $success = 'Pengguna Telah Dihapus';
                break;
            default:
        }
        $result = $db->query("SELECT * FROM `masyarakat`");
        $pengguna = $result->fetch_all(MYSQLI_ASSOC);
        require 'views/v_data_pengguna.php';
}