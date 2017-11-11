<!-- BEGIN .top-menu -->
	<div class="top-menu">
	
		<!-- BEGIN .wrapper -->
		<div class="wrapper">
			<nav class="top-menu-soc right">
				<ul>
					<li><a href="#" target="_blank" class="hover-color-login"><i class=""></i>Đăng ký</a></li>
					<li><a href="#login-box" target="_blank" class="hover-color-login" class="login-window button"><i></i>Đăng nhập</a></li>
					<div class="login" id="login-box">Đăng nhập
 
						<a class="close" href="#"><img class="img-close" title="Close Window" alt="Close" src="close.png" /></a>
						<form class="login-content" action="#" method="post"><label class="username">
							<span>Tên hoặc email</span>
							<input id="username" type="text" autocomplete="on" name="username" placeholder="Username" value="" />
							</label>
							<label class="password">
							<span>Mật khẩu</span>
							<input id="password" type="password" name="password" placeholder="Password" value="" />
							</label>
							<button class="button submit-button" type="button">Đăng nhập</button>

				 			<a class="forgot" href="#">Quên mật khẩu?</a>
			 			</form>
			 		</div>
					<li><a href="#" target="_blank" class="hover-color-login"><i class=""></i>Đăng xuất</a></li>
					
				</ul>
			</nav>
													
			<nav class="top-menu-list">
				<ul class="load-responsive" rel="Top Menu">
					<li><a href="index.php"><i class="fa fa-home"></i></a></li>
					<li><a href="#"><i class="fa fa-phone"></i> 04.21092016</a></li>
					<li><a href="#"><i class="fa fa-envelope"></i> chuotchat1996@gmail.com</a></li>
				</ul>
			</nav>

		<!-- END .wrapper -->
		</div>

	<!-- END .top-menu -->
	</div>
	
	<!-- BEGIN .wrapper -->
	<div class="wrapper">

		<!-- BEGIN .header-main -->
		<div class="header-main">

			<div class="header-main-logo">
				<!-- <h1><a href="index.html">Sendigo</a></h1> -->
				<a href="index-2.html"><img src="public/images/coollogo_com-246231119.png" /></a>
			</div>

			

			<div class="header-main-search">
				
				<div class="search-block">
					<form action="">
						<input name="q" type="text" placeholder="Search" value="" />
						
					</form>
				</div>
			</div>

		<!-- END .header-main -->
		</div>
		

		<nav class="main-menu">
			<a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i>Show Menu</a>
			<div class="main-menu-placeholder">
				<div class="main-menu-wrapper">
					
					<ul class="top-main-menu load-responsive" rel="Main Menu">
						<li><a href="index.php">Home</a></li>
						<?php 
							$theloai = DanhSachTheLoai();
							while ($row_theloai = mysql_fetch_array($theloai)) {
							$idTL = $row_theloai["id"];
							
						 ?>
						<li><a href="index.php?p=loaitin&idTL=<?php echo $row_theloai['id'] ?>"><span><?php echo $row_theloai['Ten'] ?></span></a>
							<ul class="sub-menu">
								<?php 
									$loaitin = Danhsachloaitin($idTL);
									while ($row_loaitin =  mysql_fetch_array($loaitin)) {
								?>
								<li><a href="index.php?p=loaitin&idTL=<?php echo $row_loaitin['id'] ?>"><?php echo $row_loaitin['Ten'] ?></a></li>
								<?php 
									}
								 ?>
							</ul>
						</li>
						<?php 
							}
						 ?>
					</ul>

					
				</div>
			</div>
		</nav>
		
	<!-- END .wrapper -->
	</div>
	
<!-- END .header -->

<script>
	$(document).ready(function() {
    $('a.login-window').click(function() {
        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var loginBox = $(this).attr('href');
 
        //cho hiện hộp đăng nhập trong 300ms
        $(loginBox).fadeIn(300);
 
        // thêm phần tử id="over" vào sau body
        $('body').append('<div id="over">');
        $('#over').fadeIn(300);
 
        return false;
 });
 
 // khi click đóng hộp thoại
 $(document).on('click', "a.close, #over", function() {
       $('#over, .login').fadeOut(300 , function() {
           $('#over').remove();
       });
      return false;
 });
});
</script>