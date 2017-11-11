<?php 
	require "model/dbCon.php";
	require "model/homepage.php";

	if (isset($_GET["p"])) // isset: có tồn tại, nếu thanh địa chỉ có tồn tại biến p
	$p = $_GET["p"]; // đúng sẽ khởi tạo biến p và bằng giá trị p láy dc ở thanh địa chỉ
	else
	$p = "";
?>

<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
	<!-- BEGIN head -->

<head>
		<title>Trương Lan</title>

		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="public/css/reset.css" />
		<link type="text/css" rel="stylesheet" href="public/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="public/css/weather-icons.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="public/css/dat-menu.css" />
		<link type="text/css" rel="stylesheet" href="public/css/main-stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="public/css/ot-lightbox.css" />
		<link type="text/css" rel="stylesheet" href="public/css/shortcodes.css" />
		<link type="text/css" rel="stylesheet" href="public/css/responsive.css" />

		<style>
			
			body {
				font-size: 16px;
				font-family: 'Noto Sans', sans-serif;
				color: #5e5e5e;
			}

			h1, h2, h3, h4, h5, h6 {
				font-family: 'Arvo', serif;
				color: #3f3f3f;
			}
		</style>

	
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<!-- <body> -->
	<body class="ot-menu-will-follow">

		<!-- BEGIN .boxed -->
		<div class="boxed">
			<!-- BEGIN .header -->
			<header class="header">
				<?php 
					require "view/header.php";
				 ?>
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
				
					<?php 

			            switch ($p) {
			                 case "loaitin" :
			                     require "page/loaitin.php";
			                     break;
			                 case "chitiettin" :
			                     require "page/chitiettin.php";
			                     break;
			                 case "timkiem" :
			                     require "page/timkiem.php";
			                     break;
			                 default:
			                     require "page/trangchu.php";
		             } ?>

		             
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
			<footer class="footer">
				<?php 
					require "view/footer.php";
				 ?>
			</footer>
			
		<!-- END .boxed -->
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="public/jscript/jquery-latest.min.js"></script>
		<script type="text/javascript" src="public/jscript/bootstrap.min.js"></script>
		<script type="text/javascript" src="public/jscript/modernizr.custom.50878.js"></script>
		<script type="text/javascript" src="public/jscript/iscroll.js"></script>
		<script type="text/javascript" src="public/jscript/dat-menu.js"></script>
		<script type="text/javascript" src="public/jscript/theme-scripts.js"></script>
		<script type="text/javascript" src="public/jscript/ot-lightbox.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!-- Demo Only -->
		
	<!-- END body -->
	</body>
<!-- END html -->


</html>