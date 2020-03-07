<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lapor ! Layanan masyarakat</title>

    <!-- untuk tugas laporan -->
    <style type="text/css" media="print">
    .no-print {
        display: none;
    }

    .main {
        width: 100%;
    }
    </style>
</head>

<body>
    <div>
        <nav class="navbar teal no-print">
            <span class="navbar-brand">Lapor !</span>
            <a class="btn btn-danger mr-2 red" href="logout.php">Logout</a>
        </nav>
    </div>

    <div class="d-flex no-print" id="wrapper">

        <!-- Sidebar -->
        <?php if ($_SESSION['level'] == 'admin') { ?>
        <div class="bg-light border-right no-print" id="sidebar-wrapper">
            <?php } ?>
            <div class="list-group list-group-flush">
                <?php if ($_SESSION['level'] == 'admin') { ?>
                <a href="<?php echo SITE_URL; ?>/petugas_laporan.php"
                    class="list-group-item list-group-item-action bg-light"><i class="fa fa-user-secret mr-2"></i>Data
                    Petugas</a>
                <a href="<?php echo SITE_URL; ?>/registration.php"
                    class="list-group-item list-group-item-action bg-light"><i class="fa fa-user mr-2"></i>Data
                    Pengguna</a>
                <a href="<?php echo SITE_URL; ?>/tanggapan.php"
                    class="list-group-item list-group-item-action bg-light"><i class="fa fa-inbox mr-2"></i>
                    Verifikasi & Tanggapi</a>
                <?php } ?>
            </div>
        </div>
        <div class="container main">