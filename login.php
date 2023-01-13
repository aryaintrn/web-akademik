<!DOCTYPE html>
<html>
    <head>
        <title>Halaman</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <!-- LOGIN -->
        <div class="page-login">
            <div class="box box-login">

                <div class="box-header text-center">
                    LOGIN
                </div>

                <div class="box-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" placeholder="Username" class="input-control">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="Password" class="input-control">
                        </div>

                        <input type="submit" name="Submit" value="Login" class="btn">

                    </form>

                    <?php
                        if(isset($_POST['Submit'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];

                            if($user == "admin" && $pass == "admin"){
                                echo "Login Berhasil";
                            }else{
                                echo "Login Gagal";
                            }
                        }
                    ?>

                </div>

                <div class="box-footer text-center">
                    <a href="index.php">Halaman Utama</a>
                </div>

            </div>
        </div>
    </body>
</html>