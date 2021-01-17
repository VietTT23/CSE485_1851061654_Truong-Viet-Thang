<?php 
	include('include/config.php'); 
	$query1 = "SELECT * FROM home";
	$query2 = "SELECT * FROM brofile";
	$query3 = "SELECT * FROM resume";
	$query4 = "SELECT * FROM skills";
	$query5 = "SELECT * FROM more_skills";
	$query6 = "SELECT * FROM admin_account";
	$query71 = "SELECT * FROM education_and_experience WHERE category='pe'";
	$query72 = "SELECT * FROM education_and_experience WHERE category='e'";
	$query8 = "SELECT * FROM interests";
	$runquery1 = mysqli_query($conn,$query1);
	$runquery2 = mysqli_query($conn,$query2);
	$runquery3 = mysqli_query($conn,$query3);
	$runquery4 = mysqli_query($conn,$query4);
	$runquery5 = mysqli_query($conn,$query5);
	$runquery6 = mysqli_query($conn,$query6);
	$runquery71 = mysqli_query($conn,$query71);
	$runquery72 = mysqli_query($conn,$query72);
	$runquery8 = mysqli_query($conn,$query8);
	// if(!$conn){
    // 	header("location:index-2.html");
	// }
	$data1 = mysqli_fetch_array($runquery1);
	$data2 = mysqli_fetch_array($runquery2);
	$data3 = mysqli_fetch_array($runquery3);
	//$data4 = mysqli_fetch_array($runquery4);
	//$data5 = mysqli_fetch_array($runquery5);
	$data6 = mysqli_fetch_array($runquery6);
	//$data8 = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <title>CV | Trương Việt Thắng</title>
    <!-- Meta Set -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Links To Include -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Sources of JS To Include -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="200">

    <!-- Start Navbar-Header -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light ml-auto">
        <div class="container">
            <a class="navbar-brand" href="index.php" data-wow-duration="2s"><span><?=$data1['navname']?></span></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNavbar"
                aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mobileNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Giới Thiệu<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Thông Tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resume">Lý Lịch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Kỹ Năng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar-Header -->

    <!-- Start Banner -->
    <section class="banner text-center">
        <div class="banner-bg">
            <div class="container">
                <div class="info">
                    <span><?=$data1['title']?></span>
                    <h2 class="wow bounceInRight" data-wow-duration="2s"><?=$data2['name']?></h2>
                    <p class="lead"><?=$data1['iam']?></p>

                    <a href="<?=$data1['facebook']?>">
                        <img src="images/social-media/fb.png">
                    </a>
                
                    <a href="<?=$data1['twitter']?>">
                        <img src="images/social-media/twit.png">
                    </a>
                
                    <a href="<?=$data1['instargram']?>">
                        <img src="images/social-media/ins.png">
                    </a>
                
                    <a href="<?=$data1['github']?>">
                        <img src="images/social-media/git.png">
                    </a>
                
                    <p></p>
                    <a href="#about"><button class="btn btn-white">Đọc thêm</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End Banner -->

    <!-- Start About Me Section -->

    <section class="about text-center" id="about" >
        <div class="container">
            <h1 class="hvr-underline-from-left">Thông Tin</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="about-info text-left wow bounceInLeft" data-wow-duration="2s" data-wow-offset="200">
                        <h2>MỤC TIÊU</h2>
                        <p class="lead"><?=$data2['objective']?></p>
                        <h2>TÔI CÓ THỂ LÀM GÌ?</h2>
                        <p class="lead"><?=$data2['icando']?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service">
                                <div class="s-icon">
                                    <i class="fa fa-desktop fa-2x"></i>
                                </div>
                                <h4>Thiết kế Web</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <div class="s-icon">
                                    <i class="fa fa-code fa-2x"></i>
                                </div>
                                <h4>Phát triển Web</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service">
                                <div class="s-icon">
                                    <i class="fa fa-diamond fa-2x"></i>
                                </div>
                                <h4>Thiết kế Logo</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="person-bio wow bounceInRight" data-wow-duration="2s" data-wow-offset="200">
                        <img class="img-thumbnail hvr-glow" src="images/<?=$data2['avartar']?>" alt="Person-img">
                        <ul class="list-unstyled text-left">
                            <li><strong>Tên: </strong><?=$data2['name']?></li>
                            <li><strong>Email: </strong><?=$data2['email']?></li>
                            <li><strong>SDT: </strong><?=$data2['phone']?></li>
                            <li><strong>Ngày sinh: </strong> <?=$data2['dob']?></li>
                            <li><strong>Quốc tịch: </strong><?=$data2['nationality']?></li>
                            <li><strong>Địa chỉ: </strong><?=$data2['address']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About ME Section -->

    <!-- Start Interests Section -->

    <section class="features text-center">
        <div class="feat_bg">
            <div class="container">
                <h1>Sở thích</h1>
                <div class="row">
                <?php while($data8 = mysqli_fetch_array($runquery8)){?>
                    <div class="col-lg-3 col-sm-6">
                    
                        <div class="feat wow fadeInDown" data-wow-duration="1.5s" data-wow-offset="300">
                            <h4><?=$data8['title']?></h4>
                            <p class="lead">
                            <?=$data8['description']?>
                            </p>
                        </div>
                    
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <!-- End Interests Section -->

    <!-- Start Resume Section -->

    <section class="resume text-center" id="resume">
        <div class="container">
            <h1>Lý lịch</h1>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Học vấn</h3>
                    <?php while($data72 = mysqli_fetch_array($runquery72)){?>
                    <div class="resume-item">
                        <h4><?=$data72['degree']?></h4>
                        <h5><?=$data72['year']?></h5>
                        <p><em><?=$data72['name']?></em></p>
                        <p><?=$data72['description']?></p>
                    </div>
                    <?php }?>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Kinh nghiệm</h3>
                    <?php while($data71 = mysqli_fetch_array($runquery71)){?>
                    <div class="resume-item">
                        <h4><?=$data71['degree']?></h4>
                        <h5><?=$data71['year']?></h5>
                        <p><em><?=$data71['name']?></em></p>
                        <p><?=$data71['description']?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <!-- End Resume Section -->

    <!-- Start Download Section -->

    <section class="resumedl text-center" id="download">
        <div class="container">
            <h1>Tải xuống</h1>
            <p class="lead wow flipInY" data-wow-duration="1.5s" data-wow-offset="300">
                Bạn có thể tại xuống chi tiết thông tin của tôi tại đây!
            </p>
            <a href="TRUONG-VIET-THANG-CV.pdf" download="My CV">
                <button class="btn btn-danger btn-lg hvr-wobble-vertical" type="button"><i
                        class="fa fa-download  wow bounce" data-wow-delay="2s"></i> Tải xuống</button>
            </a>
        </div>
    </section>
    <!-- End Download Section -->

    <!-- Start Skills Section -->

    <section class="skills text-center" id="skills">
        <div class="container">
            <h1>Kỹ Năng</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-skills wow slideInUp" data-wow-duration="1.5s" data-wow-offset="300">
                        <?php while($data4 = mysqli_fetch_array($runquery4)){?>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?=$data4['score']?>"
                                aria-valuemin="0" aria-valuemax="100" style="width: <?=$data4['score']?>%">
                                <?=$data4['skill']?>
                            </div>
                            <span><?=$data4['score']?>%</span>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <h3 class="text-center">Kỹ năng khác</h3>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="more-skills wow slideInLeft" data-wow-duration="2" data-wow-delay=".5s"
                        data-wow-offset="150"">
 							<div class=" chart" data-percent="90">90%</div>
                    <span>Tự nghiên cứu</span>
                </div>

            </div>
            <?php while($data5 = mysqli_fetch_array($runquery5)){?>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="more-skills wow slideInLeft" data-wow-duration="2" data-wow-delay=".3s"
                    data-wow-offset="150">
                    <div class="chart" data-percent="<?=$data5['score']?>"><?=$data5['score']?>%</div>
                    <span><?=$data5['skill']?></span>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</section>

    <!-- End Skills Section -->

    <!-- Start Contact Section -->

    <section class="contact text-center" id="contact">
        <div class="contact-bg">
            <div class="container">
                <h1>Liên Hệ</h1>
                <p>Bạn có thể liên hệ với tôi bất cứ lúc nào</p>
                <form role="form" action="include/contact.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-offset="240">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text" placeholder="Tên"
                                        name="name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text" placeholder="Email"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="text" placeholder="Điện thoại"
                                        name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wow bounceInRight" data-wow-duration="1.5s" data-wow-offset="180">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Lời nhắn..." name="message"
                                        required>
				 							</textarea>
                                </div>
                                <button class="btn btn-danger btn-lg btn-block hvr-pulse-grow" type="submit"
                                    name="contact">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="contact-info text-center">
                    <div class="container">
                        <p><span><i class="fa fa-envelope"></i> &nbsp;<?=$data2['email']?></span>
                            <span><i class="fa fa-phone"></i> &nbsp;<?=$data2['phone']?></span>
                            <span><i class="fa fa-map-marker"></i> &nbsp;<?=$data2['address']?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact Section -->
    
    <!-- Start Footer Section -->

    <section class="footer text-center">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2020 Truong Viet Thang
            </p>
        </div>
    </section>

    <!-- End Footer Section -->

    <!-- Start Scroll To Top -->
    <div class="scroll_top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End Scroll To Top -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <!--<script src="js/jquery.nicescroll.min.js"></script>-->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/main.js"></script>
</body>

</html>