<?php

include 'connection.php';
include 'functions.php';

must_authenticated();

session_destroy();

require_once 'views/view_login.php';