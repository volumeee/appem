<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container full-page white z-depth-2">
        <ul class="tabs teal">
            <li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
            <li class="tab col s3"><a class="white-text" href="#register">register</a></li>
        </ul>
        <div id="login" class="col s12">
            <form class="col s12" action="login.php" method="POST">
                <div class="form-container">
                    <h3 class="teal-text">Hello</h3>
                    <?php if (isset($error)) { ?>
                    <div class="alert">
                        <p>
                            ERROR ! <?php echo $error; ?>
                        </p>
                    </div>
                    <?php }  ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <br>
                    <center>
                        <button class="btn waves-effect waves-light teal" type="submit" name="login">Login</button>
                        <br>
                        <br>
                        <!-- <a href="">Forgotten password?</a> -->
                    </center>
                </div>
            </form>
        </div>
        <div id="register" class="col s12">
            <form class="col s12" action="registration.php?action=daftar" method="post">
                <div class="form-container">
                    <h3 class="teal-text">Welcome</h3>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="nik" id="nik" type="text" class="validate">
                            <label for="nik">NIK</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="nama" id="nama" type="text" class="validate">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="input-field col s6">
                            <label>
                                <input name="level" id="level" type="checkbox" class="filled-in validate" />
                                <span>Rakyat</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="telp" id="telp" type="text" class="validate">
                            <label for="telp">telp</label>
                        </div>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light teal" type="submit" name="daftar"
                            value="DAFTAR">Submit</button>
                    </center>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <!-- <script src="mySpxript.js"></script> -->
</body>

</html>