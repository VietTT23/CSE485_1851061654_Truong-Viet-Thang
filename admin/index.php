<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/index.php');
}
include('../include/config.php');
$query="SELECT * FROM home, brofile, admin_account";
$queryrun=mysqli_query($conn,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Thang Harry Coder">
    <meta name="generator" content="Thang Harry Coder">
    <title>Admin page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
    .oo {
        height: 200px;
    }

    .ooo {
        height: 100px;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Em chào <?=$_SESSION['username']?> ạ!</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="php/logout.php">Đăng xuất</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Chung</span>

                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/">
                                <span data-feather="email"></span>
                                Tin nhắn
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?edithome=true">
                                <span data-feather="home"></span>
                                Chỉnh sửa phần Giới thiệu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editabout=true">
                                <span data-feather="info"></span>
                                Chỉnh sửa phần Thông tin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editresume=true">
                                <span data-feather="briefcase"></span>
                                Chỉnh sửa phần Lý lịch
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editskills=true">
                                <span data-feather="archive"></span>
                                Chỉnh sửa phần Kỹ năng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?editinterests=true">
                                <span data-feather="archive"></span>
                                Chỉnh sửa phần Sở thích
                            </a>
                        </li>

                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Tài khoản</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="?editaccount=true">
                                <span data-feather="user"></span>
                                Chỉnh sửa Tài khoản
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?php
                    if(isset($_GET['edithome'])){ 
                        include('php/home.php');
                    }
                    else if(isset($_GET['editabout'])){
                        include('php/about.php');      
                    }
                    else if(isset($_GET['editresume'])){
                        include('php/resume.php');
                    }
                    else if(isset($_GET['editskills'])){
                        include('php/skills.php');
                    }
                    else if(isset($_GET['editinterests'])){
                        include('php/interests.php');
                    }
                    else if(isset($_GET['editaccount'])){ 
                ?>
                <h2>Edit Account</h2>
                <?php
                    if(isset($_GET['msg'])){
             
                        if($_GET['msg']=='updated'){
                ?>
                <div class="alert alert-success text-center" role="alert">
                    Cập nhật thành công !
                </div>
                <?php
                        }  
                    } 
                ?>
                <form method="post" action="php/update_account.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="username">Tên hiển thị</label>
                            <input type="text" name="username" value="<?=$data['username']?>" class="form-control"
                                id="username" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pass">Mật khẩu</label>
                            <input type="text" name="pass" value="<?=$data['pass']?>" class="form-control"
                                id="pass" >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">Email đăng nhập</label>
                            <input type="text" name="email" value="<?=$data['email']?>" class="form-control"
                                id="email" >
                        </div>
                    </div>
                    <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
                </form>
                <?php 
                    }
                    else{
                        include('php/welcome.php');
                    } 
                ?>

            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>