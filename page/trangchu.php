<!-- BEGIN .wrapper -->
<div class="wrapper">

	

	<!-- BEGIN .top-slider-body -->
	<div class="top-slider-body" data-top-slider-timeout="6000" data-top-slider-autostart="true">
		<div class="top-slider-controls">
			<button class="left" data-top-slider-dir="left"><i class="fa fa-caret-left"></i>Trước</button>
			<button class="right" data-top-slider-dir="right">Sau<i class="fa fa-caret-right"></i></button>
		</div>
		<div class="top-slider-content">

			<!-- BEGIN .top-slider-content-wrap -->
			<div class="top-slider-content-wrap active">
				<?php 
					$batinsau = TinMoiNhat_BaTindau();
					while ($row_batindau = mysql_fetch_array($batinsau)) {
				
			 	?>
				<!-- BEGIN .item -->
				<div class="item" data-color-top-slider="#867eef">
					<div class="item-header">
						<a href="index.php?p=chitiettin&idTin=<?php echo $row_batindau['id']?>">
							<span class="read-more-wrapper"><span class="read-more">Xem chi tiết<i></i></span></span>

							<img src="public/image/tintuc/<?php echo $row_batindau['Hinh'] ?>" alt="" />
						</a>
					</div>
					<div class="item-content">
						<strong class="category-link"><a href="index.php?p=chitiettin&idTin=<?php echo $$row_batindau['id']?>"><?php echo $row_batindau['TieuDe'] ?></a></strong>
						<p><?=substr($row_batindau['TomTat'],0,100)."......";?></p>
					</div>
				<!-- END .item -->
				</div>
				<?php 
				}
			 ?>
			<!-- END .top-slider-content-wrap -->
			</div>
			<!-- BEGIN .top-slider-content-wrap -->
			<div class="top-slider-content-wrap">
				<?php 
					$batinsau = TinMoiNhat_BaTinsau();
					while ($row_batinsau = mysql_fetch_array($batinsau)) {
				
			 	?>
				<!-- BEGIN .item -->
				<div class="item" data-color-top-slider="#867eef">
					<div class="item-header">
						<a href="index.php?p=loaitin&idTL=<?php echo $row_batinsau['id']?>">
							<span class="read-more-wrapper"><span class="read-more">Xem chi tiết<i></i></span></span>

							<img src="public/image/tintuc/<?php echo $row_batinsau['Hinh'] ?>" alt="" />
						</a>
					</div>
					<div class="item-content">
						<strong class="category-link"><a href="index.php?p=loaitin&idTL=<?php echo $row_batinsau['id']?>"><?php echo $row_batinsau['TieuDe'] ?></a></strong>
						<p><?=substr($row_batinsau['TomTat'],0,100)."......";?></p>
					</div>
				<!-- END .item -->
				</div>
				<?php 
				}
			 ?>
			<!-- END .top-slider-content-wrap -->
			</div>


		</div>
	<!-- END .top-slider-body -->
	</div>

	<div class="content-block has-sidebar">

		<!-- BEGIN .content-block-single -->
		<div class="content-block-single">
			
			
			<!-- BEGIN .content-panel -->
			<div class="content-panel">
				<div class="content-panel-title">
					<h2>Tin tức</h2>
				</div>
				<div class="content-panel-body article-list">
					<?php 
						$theloai = DanhSachTheLoai();
						
						while ($row_theloai = mysql_fetch_array($theloai)) {
						$idTL = $row_theloai['id'];
					 ?>
					<div>
						<h4>
							<b><span style="color: red; font-size: 20px; font-family: Arial;"><?php echo $row_theloai['Ten'].": " ?></span></b> 
							<?php 
								$loaitin = Danhsachloaitin($idTL);
								while ($row_loaitin = mysql_fetch_array($loaitin)) {
							 ?>
							<a href="index.php?p=loaitin&idTL=<?php echo $row_loaitin['id']?>"><span style=" color: green; font-size: 15px; font-family: Arial;"><?php echo $row_loaitin['Ten']." / " ?></span></a>
							<?php 
								}
							 ?>
						</h4>
					</div>
					<div class="item">
						<?php 
							$mottin = TinMotMoi($idTL);
							$row_mottin = mysql_fetch_array($mottin);
						 ?>
						 <style type="text/css">
						 	
						 </style>
						<div class="item-header">
							<a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin['id']?>">
								<span class="read-more-wrapper"><span class="read-more">Xem chi tiết<i></i></span></span>
								<img src="public/image/tintuc/<?php echo $row_mottin['Hinh'] ?>" alt="" />
							</a>
						</div>
						<div class="item-content" style="height: 220px;">
							<strong class="category-link"><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin['id'] ?>"><?php echo $row_mottin['TieuDe'] ?></a></strong>
							
							<span class="item-meta">
								
								<a href="chitiettin.html#comments"><i class="fa fa-comment-o"></i>3 Comment</a>
								<a href="loaitin.html"><i class="fa fa-clock-o"></i>March 30, 2015</a>
							</span>
							<p><?php echo $row_mottin['TomTat'] ?></p>
							<a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin['id']?>" class="read-more-button">Xem chi tiết<i class="fa fa-mail-forward"></i></a>
						</div>
						<?php 
							$batin = TinMoiBaTin($idTL);
							while ($row_batin = mysql_fetch_array($batin)) {
						 ?>
						
							<div class="item-detail">
								<img style="width: 100%; height: 150px;" src="public/image/tintuc/<?php echo $row_batin['Hinh'] ?>" alt="" />
								<span class="item-meta">
									<a href="chitiettin.html#comments"><i class="fa fa-comment-o"></i>82 comments</a>
									<a href="loaitin.html"><p><i class="fa fa-clock-o"></i>March 30, 2015</p></a>
								</span>
								<a href="index.php?p=chitiettin&idTin=<?php echo $row_batin['id'] ?>"><p style="font-size: 13px;"><?php echo $row_batin['TieuDe'] ?></p></a>
							</div>
						
						<?php 
							}
						 ?>
						
					</div>
					<?php 
						}
					 ?>
					
					
					
					
					

				</div>
				
			<!-- END .content-panel -->
			</div>

		<!-- END .content-block-single -->
		</div>

		<!-- BEGIN .sidebar -->
		<aside class="sidebar">

			<div class="widget">
				<h3>Tin được xem nhiều</h3>
				<div class="widget-article-list">
					<?php 
						$tinxemnhieu = TinXemNhieu();
						while ($row_tinxemnhieu = mysql_fetch_array($tinxemnhieu)) {
						
					 ?>
					 <style>
						.widget-article-list .item .item-header img{ width: 60px; height: 60px; }
					</style>
					<div class="item">
						<div class="item-header">
							<a href="index.php?p=chitiettin&idTin=<?php echo $row_tinxemnhieu['id']?>"><img src="public/image/tintuc/<?php echo $row_tinxemnhieu['Hinh'] ?>" alt="" /></a>
						</div>
						<div class="item-content">
							<h4><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinxemnhieu['id']?>"><?php echo $row_tinxemnhieu['TieuDe'] ?></a></h4>
							<span class="item-meta">
								<a href="chitiettin.html#comments"><i class="fa fa-eye">View:</i><?php echo $row_tinxemnhieu['SoLuotXem'] ?></a>
								<a href="loaitin.html"><i class="fa fa-clock-o"></i>March 30, 2015</a>
							</span>
						</div>
					</div>
					<?php 
						}
					 ?>
				</div>
			</div>
			

			<div class="widget">
				<h3>Game hay</h3>
				<div class="widget-photo-gallery">

					<div class="item">
						<style>
							.item .item-game{
								float: left;
								font-size: 15px;
							}
						</style>
						<div class="item-game">
							<a title="Bóng nảy" href="http://game.24h.com.vn/tinh-diem/bong-nay-c145g3711b16.html"><img width="120px;" height="100px;" src="http://game.24h.com.vn/upload/2017/2017-3/game/2017-08-29/bong-nay.png"></a>
							<a href=""><p style="margin-left: 25px;">Bóng nảy</p></a>
						</div>
						<div class="item-game">
							<a title="Thiết kế giày" href="http://game.24h.com.vn/game-thoi-trang/thiet-ke-giay-c146g3707b16.html"><img width="120px;" height="100px;" src="http://game.24h.com.vn/upload/2017/2017-3/game/2017-08-29/thiet-ke-giay.png"></a>
							<a href=""><p>Thiết kế giày</p></a>
						</div>
						<div class="item-game">
							<a title="Hoàng tử disney" href="http://game.24h.com.vn/game-thoi-trang/hoang-tu-disney-c146g3694b16.html"><img width="120px;" height="100px;" src="http://game.24h.com.vn/upload/2017/2017-3/game/2017-08-16/hoang-tu-disney.png"></a>
							<a href=""><p>Hoàng tử disney</p></a>
						</div>
						<div class="item-game">
							<a title="Pikachu" href="http://game.24h.com.vn/tinh-diem/pikachu-c145g1285b16.html"><img width="120px;" height="100px;" src="http://game.24h.com.vn/upload/2017/2017-1/game/2017-03-15/Game_Pikachu-min .jpg"></a>
							<a href=""><p style="margin-left: 25px;">Pikachu</p></a>
						</div>
					</div>
					<a href=""><img src="public/image/quangcao.png" width="100%" style="margin-top: 20px;"></a>

				</div>
			</div>

			
		<!-- END .sidebar -->
		</aside>

	</div>
	

<!-- END .wrapper -->
</div>