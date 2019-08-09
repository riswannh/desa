<?php
session_start();
    include('koneksi.php');
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        

        $sql = mysqli_query($connect, "SELECT * FROM user WHERE username='$user' AND pass='$pass'") or die(mysql_error());        

        if (mysqli_num_rows($sql)== 0 ) {
            echo "Login Gagal";
        }else {
            header('location: dash.php');
            $_SESSION['login'] = 1;
        }
    }
?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Untitled Document</title>
        <link href="Assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="login-card">
            <img src="assets/img/selidah.png" class="selidah">
            <!--mun handak kaya kerja sama tu thu loo-->
            <!--		 <img src="assets/img/smk2.png" class="smkbisa">-->
            <p class="text-center profile-name-card">Login </p>
            <form class="form-signin" method="POST">
                <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="inputEmail"
                    name="user">
                <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="pass">
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit">Sign in</button>
            </form>
        </div>
    </body>

</html>