<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="form-login" action="../php/login.php" method="post">
                <?php
                      if(isset($_GET['msg'])){
             
                      if($_GET['msg']=='logout'){
                ?>
                <div class="alert alert-success text-center" role="alert">Đăng nhập thành công !</div>
                <?php
                      }  
                      if($_GET['msg']=='iuser'){
               ?>
                <div class="alert alert-danger text-center" role="alert">Email hoặc mât khẩu không đúng !</div>
                <?php
                      } } 
                ?> 
                    <div class="text-center"><img class="mb-4" src="../../images/ok.jpg" alt width="72" height="72"></div>
                    
                    <h3 class="text-center">Đăng nhập</h3>
                    <div class="form-group">
                        <label for="username" >Email</label>
                        <input type="text" name="email" class="form-control form-control-lg" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" >Mật khẩu</label>
                        <input type="password"  name="password" class="form-control form-control-lg" required>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="rm" value="remember-me"> Nhớ mật khẩu
                        </label>
                    </div>
                    <input type="submit" name="login-btn" class="btn btn-lg btn-primary btn-block" value="Login">
                    <a href="../../index.php"><i class="bi bi-arrow-left-circle"></i>Quay về trang chủ</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>