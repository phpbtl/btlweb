
<!-- BEGIN .wrapper -->
<div class="wrapper">


<?php 
	$idTL = $_GET["idTL"];
	settype($idTL, "int"); 
 ?>
<div class="content-block has-sidebar">
	
	<!-- BEGIN .content-block-single -->
	<div class="content-block-single">
		
		<!-- BEGIN .content-panel -->
		<div class="content-panel">
			<?php 
				$ttx = TenLoaiTinDangXem($idTL);
				$row_ttx = mysql_fetch_array($ttx);
			 ?>
			<div class="content-panel-title">
				<h4 style="font-family: Arial;">Trang Chủ <?php echo "&nbsp;&nbsp; >" ?><?php echo "&nbsp;&nbsp;".$row_ttx['TenTheLoai']."&nbsp;&nbsp; >" ?><span style="color: red;"><?php echo "&nbsp;&nbsp;".$row_ttx['TenLoaiTin'] ?></span></h4>
			</div>
			<?php
				$sotin1trang = 6; 

				if(isset($_GET["trang"])){
					$trang = $_GET["trang"];
					settype($trang, "int");
				}
				else{
					$trang = 1;
				}
				$form = ($trang - 1) * $sotin1trang;
				$tin = TinTheoLoaiTinPhanTrang($idTL,$form, $sotin1trang);
				while ($row_tin = mysql_fetch_array($tin)) {
				
			 ?>
			<div class="content-panel-body article-list">
				
				
				<div class="item" data-color-top-slider="#867eef">
					<div class="item-header">
						<a href="post.html">
							<span class="read-more-wrapper"><span class="read-more">Xem chi tiết<i></i></span></span>
							<img src="public/image/tintuc/<?php echo $row_tin['Hinh'] ?>" alt="" />
						</a>
					</div>
					<div class="item-content">
						<strong class="category-link"><a href="index.php?p=chitiettin&idLT=<?php echo $row_tin['id'] ?>"><?php echo $row_tin['TieuDe'] ?></a></strong>
						<span class="item-meta">
							<a href="post.html#comments"><i class="fa fa-comment-o"></i>82 comments</a>
							<a href="blog.html"><i class="fa fa-clock-o"></i>March 30, 2015</a>
						</span>
						<p><?php echo $row_tin['TomTat'] ?></p>
						<a href="index.php?p=chitiettin&idLT=<?php echo $row_tin['id'] ?>" class="read-more-button">Xem chi tiết<i class="fa fa-mail-forward"></i></a>
					</div>
				</div>
				
				
			</div>
			<?php 
				}
			?>
            <div class="content-panel-body pagination">
                <?php
                // thanh phân trang
                $t = TinTheoLoaiTin($idTL); // in tất cả loại tin chưa dc  phân trang
                $tongsotin = mysql_num_rows($t);
                $tongsotrang = ceil($tongsotin/$sotin1trang);
                $truoc =  $trang - 1;
                $sau =  $trang + 1;
                if ($trang !=1) {
                    ?>

                    <a class="prev page-numbers" href="index.php?p=loaitin&idTL=<?php echo $idTL ?>&trang=<?php echo $truoc ?>"><i class="fa fa-angle-left"></i>Trước</a>
                    <?php
                }
                if($trang == $tongsotrang){
                    for ($i=$trang-1; $i< $tongsotrang + 1;$i++){
                        ?>
                        <a <?php if ($i == $trang) echo "style = 'background-color: #843534;'" ?> class="page-numbers" href="index.php?p=loaitin&idTL=<?php echo $idTL ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>

                        <?php
                    }
                }
                else if ($trang >1) {
                    for ($i = $trang - 1; $i <= $trang + 1; $i++) {
                        ?>
                        <a <?php if ($i == $trang) echo "style = 'background-color: #843534;'" ?> class="page-numbers" href="index.php?p=loaitin&idTL=<?php echo $idTL ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>

                        <?php
                    }
                }
                else if($trang ==1) {

                        for ($i = 1; $i <=3; $i++) {
                         ?>
                            <a <?php if ($i == $trang) echo "style = 'background-color: #843534;'" ?> class="page-numbers" href="index.php?p=loaitin&idTL=<?php echo $idTL ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
                          <?php
                        }
                }

                if ($trang < $tongsotrang) {
                ?>

                <a class="next page-numbers" href="index.php?p=loaitin&idTL=<?php echo $idTL ?>&trang=<?php echo $sau ?>">Sau<i class="fa fa-angle-right"></i></a>
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
						<a href="index.php?p=chitiettin&idLT=<?php echo $row_tinxemnhieu['id']?>"><img src="public/image/tintuc/<?php echo $row_tinxemnhieu['Hinh'] ?>" alt="" /></a>
					</div>
					<div class="item-content">
						<h4><a href="index.php?p=chitiettin&idLT=<?php echo $row_tinxemnhieu['id']?>"><?php echo $row_tinxemnhieu['TieuDe'] ?></a></h4>
						<span class="item-meta">
							<a href="chitiettin.html#comments"><i class="fa fa-eye"></i><?php echo $row_tinxemnhieu['SoLuotXem'] ?></a>
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