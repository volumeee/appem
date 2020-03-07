<?php

function must_authenticated()
{
    if (
        !isset($_SESSION['is_login']) &&
        !isset($_SESSION['username']) &&
        !isset($_SESSION['nik'])
    ) {
        header('location:login.php');
        exit(0);
    }
}

// function message()
// {
//     if (isset($_GET['message'])) {
//         if ($_GET['message'] == "gagal") {
//             echo "Username atau Password Salah!";
//         }
//     }
// }