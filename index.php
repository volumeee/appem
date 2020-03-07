<?php


include 'connection.php';
include 'functions.php';

// user must authenticated
must_authenticated();

require 'views/view_home.php';

// echo password_hash('admin', PASSWORD_BCRYPT);