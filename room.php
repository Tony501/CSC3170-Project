<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler - 热门酒店</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Traveler</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">主页</a></li>
								<li><a href="city.html">城市</a></li>
								<li class="active"><a href="hotel.php">酒店</a></li>
								<li><a href="flight.php">航班</a></li>
								<li><a href="restaurant.php">热门餐厅</a></li>
								<li><a href="about.html">关于</a></li>
								<li><a href="#colorlib-footer">联系方式</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2></h2>
				   					<h1>热门酒店</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
        </aside>
        
        <?php
	// header('Content-type: text/plain;charset=utf-8');
	// echo("ok");
	
	$hostname = "bdm308395165.my3w.com";

	$username = "bdm308395165";

	$password = "CSC3170csc";

	$dbname = "bdm308395165_db";

	$conn = mysqli_connect($hostname,$username,$password);

	if (!$conn){
		die('Could not connect: '.mysql_error());
	}else{
		
	}
	mysqli_select_db($conn,$dbname);
	mysqli_query($conn,'SET NAMES UTF8');
	$array = array(
		"北京" => 100000,
		"上海" => 200000,
		"广州" => 510000,
		"西安" => 710000,
		"杭州" => 310000,
		"南京" => 210000,
		"成都" => 610000,
		"重庆" => 400000,
		"哈尔滨" => 150000,
		"三亚" => 572000,
	);
	$hotelName = $_GET['hotelName'];
	if (!$hotelName){
		$result = mysqli_query($conn,"SELECT * FROM room");
	} else {
		$result = mysqli_query($conn,"SELECT * FROM room WHERE hotelName = '{$hotelName}' ");
	}
	$htmlDiv1 = <<<HTML
	<div class="colorlib-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="wrap-division">
                        <div class="col-md-12 col-md-offset-0 heading2 animate-box">
            <h2>酒店房间</h2>
        </div>
        
HTML;
	$htmlDiv2 = <<<HTML
	<div class="col-md-6 col-sm-6 animate-box">
									
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">查询酒店</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">出发日期</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="出发日期">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">退房日期</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="退房日期">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">人数</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="搜索酒店" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
HTML;
	echo $htmlDiv1;
    while($test = mysqli_fetch_array($result))
    {
		
        $location =  "background-image: url(".$test["roomPic"].")";
        $htmlBlock = <<<HTML
        <div class="col-md-12 animate-box">
            <div class="room-wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a class="room-img" style='{$location}'></a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="desc">
                            <h2>{$test["roomType"]}</h2>
                            <p class="price"><span>￥{$test["roomPrice"]}</span> <small>/晚</small></p>
                            <p>隐约雷鸣
														阴霾天空
														但盼风雨来
														能留你在此</p>
                            <p><a href="#" class="btn btn-primary">立即预定</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
HTML;

		echo $htmlBlock;
	}

	echo $htmlDiv2;
    mysqli_close($conn);
    ?>

		

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>CSC3170 Traveler Project</h4>
						<p>这明明只是一个数据库作业，为什么我们搞了一堆前端呢？</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>立即预定</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">城市</a></li>
								<li><a href="#">航班</a></li>
								<li><a href="#">酒店</a></li>
								<li><a href="#">热门餐厅</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>9.6版本最流氓的英雄</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">战争之影</a></li>
								<li><a href="#">影流之主</a></li>
								<li><a href="#">塞拉斯</a></li>
								<li><a href="#">寡妇制造者</a></li>
								<li><a href="#">以上答案来源：一不知名ADC选手</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>个人收藏</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">霜之哀伤展示位</a></li>
							<li><a href="#">火之高兴展示位</a></li>
							<li><a href="#">科勒的匕首展示位</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>联系方式</h4>
						<ul class="colorlib-footer-links">
							<li>香港中文大学（深圳）你猜我是上园还是下园 <br> 深圳市龙岗区龙城街道龙翔大道2001号</li>
							<li><a href="tel://1234567920">+ 23323323333</a></li>
							<li><a href="mailto:info@yoursite.com">sangedashuaibi@cuhk.com</a></li>
							<li><a href="#">traveler.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by YXJ&HC&HBH| 此网站仅用于CSC3170课程项目展示 </i></a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

