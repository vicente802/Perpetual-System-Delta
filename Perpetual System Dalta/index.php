<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'bootstrap/top_include.php' ?>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'header/header.php' ?>
    <div class="container-fluid fixed-center">
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card text-center">
            <div class="card-body">
                <h4 class="card-title">Login</h4>
                    <br>
                    <form class="form-group" action="" method="POST">
                        <center>
                        <div class="row">
                        <div class="col col-sm-14">
                            <i class="fa fa-user" style="font-size:20px; padding:10px;"> <input type="text" class="form_email" placeholder="Username Or Email"></i>
                        </div>
                        <div class="col col-sm-14">
                        <i class="fa fa-key" style="font-size:20px; padding:10px;"> <input type="password" class="form_email" placeholder="Password"></i>
                        </div>
                        <br>
                        <br>
                        <input type="submit" name="login_now" class="btn btn-primary" value="Login">
                        <br>
                        <p style="font-size:10px; margin-top:5px;">Don't have an account?<a href=""> Register Now!</a></p>
                        </center>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
    <?php include 'bootstrap/bottom_include.php' ?>
</body>
</html>