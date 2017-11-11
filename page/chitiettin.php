<?php
if(isset($_GET["idTin"])){
    $idTin = $_GET["idTin"];
    settype($idTin, "int");
}
else{
    $idTin = 1;
}
SoLanXemTin($idTin);
?>


<?php
$tin = Chitiettin($idTin);
$row_tin = mysql_fetch_array($tin);
?>

<div class="article-full-image">
					<img height="200px;" width="1050px;" src="public/image/tintuc/<?php echo $row_tin['Hinh']?>" alt="" />

					<div class="wrapper">
						<div class="content-panel-body article-header">
							<h2><?php echo $row_tin['TieuDe'] ?></h2>
							<div class="article-meta">
								<a href="blog.html" class="meta-item"><i class="fa fa-eye">View: </i><?php echo $row_tin['SoLuotXem']; ?></a>
								<a href="blog.html" class="meta-item"><?php echo $row_tin['updated_at']; ?></a>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="content-block has-sidebar">

						<!-- BEGIN .content-block-single -->
						<div class="content-block-single">
							
							<!-- BEGIN .content-panel -->
							<div class="content-panel">
								
								<div class="content-panel-body shortcode-content">
									
									<p><i><?php echo $row_tin['TomTat'] ?></i></p>

									<p><?php echo $row_tin['NoiDung'] ?></p>

									

								</div>
							<!-- END .content-panel -->
							</div>
							
							<!-- BEGIN .content-panel -->
							<div class="content-panel">
								<div class="content-panel-title">
									<?php 
										$cm = TongComment($idTin);
										$row_cm = mysql_fetch_array($cm);
									 ?>
									<h2><?php echo $row_cm['TongSoComment'] ?> Comment</h2>
								</div>
								<div class="content-panel-body comment-list">
									
									<ol id="comments">
										<?php 
											$comment = getComment($idTin);
											while ($row_comment = mysql_fetch_array($comment)) { 
										?>
										<li class="comment">
											<div class="comment-block">
												<a href="#" class="image-avatar">
													<img src="public/images/no-avatar-100x100.jpg" data-ot-retina="public/images/no-avatar-200x200.jpg" alt="" title="" />
												</a>
												<div class="comment-text">
													<span class="time-stamp right"><?php echo $row_comment['created_at'] ?></span>
													<strong class="user-nick"><a href="#"> </a></strong>
													<div class="shortcode-content">
														<p><?php echo $row_comment['NoiDung'] ?></p>
													</div>
													<a class="reply-button read-more-button" href="#"><i class="fa fa-mail-forward right"></i>Reply this comment</a>
												</div>
											</div>
										</li>
										<?php 
											}
										 ?>
									</ol>

								</div>
							<!-- END .content-panel -->
							</div>
							
							<!-- BEGIN .content-panel -->
							<div class="content-panel" id="writecomment">
								<div class="content-panel-title">
									<a href="#comments" class="right">See comments</a>
									<h2>Write a Comment</h2>
								</div>
								<div class="content-panel-body">

									<div id="respond" class="comment-respond">

										<form action="#" class="comment-form">
											<div class="comment-info">
												<strong>Your data will be safe!</strong>
												<span>Your e-mail address will not be published. Also other data will not be shared with third person.</span>
											</div>
											<div class="alert-message alert-green">
												<strong>Success! This a success message</strong>
											</div>
											<!-- <div class="alert-message alert-red">
												<strong>Error! This an error message</strong>
											</div>
											<div class="alert-message">
												<strong>Warning! This a warning message</strong>
											</div> -->
											<div class="contact-form-content">
												<p class="contact-form-user">
													<label class="label-input">
														<span>Nickname<i class="required">*</i></span>
														<input type="text" placeholder="Nickname" name="nickname" value="" />
													</label>
												</p>
												<p class="contact-form-email">
													<label class="label-input">
														<span>E-mail<i class="required">*</i></span>
														<input type="email" placeholder="E-mail" name="email" value="" />
													</label>
												</p>
												<p class="contact-form-website">
													<label class="label-input">
														<span>Web address</span>
														<input type="text" placeholder="ex. www.orange-tehemes.com" name="www" value="" />
													</label>
												</p>
												<p class="contact-form-comment">
													<label class="label-input">
														<span>Comment text<i class="required">*</i></span>
														<textarea name="comment" placeholder="Comment text"></textarea>
													</label>
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class="submit button" value="Post a Comment" />
												</p>
											</div>
										</form>

									</div>

								</div>
							<!-- END .content-panel -->
							</div>

						<!-- END .content-block-single -->
						</div>


						<!-- BEGIN .sidebar -->
						<aside class="sidebar">

							<div class="widget">
								<h3>Các tin liên quan</h3>
								<div class="widget-article-list">
									<?php 
										$tincungloai = TinCungLoaiTin($idTin, $row_tin['idLoaiTin']);
										while ($row_tincungloai = mysql_fetch_array($tincungloai)) {
												
									 ?>
									<div class="item">
										<style>
											.item .item-header img{
												width: 70px;
												height: 70px;
												margin-right: 20px;
											}
										</style>
										<div class="item-header">
											<a href="index.php?p=chitiettin&idTin=<?php echo $row_tincungloai['id'] ?>"><img src="public/image/tintuc/<?php echo $row_tincungloai['Hinh'] ?>" alt="" /></a>
										</div>
										<div class="item-content">
											<h4><a href="index.php?p=chitiettin&idTin=<?php echo $row_tincungloai['id'] ?>"><?php echo $row_tincungloai['TieuDe'] ?></a></h4>
											<span class="item-meta">
												<a href="post.html#comments"><i class="fa fa-comment-o"></i>82 comments</a>
												<a href="blog.html"><i class="fa fa-clock-o"></i>March 30, 2015</a>
											</span>
										</div>
										
									</div>
									<?php 
										}
									 ?>
									

								</div>
							</div>
							<div class="widget">
								<div class="do-space">
									<a href="#" target="_blank"><img src="public/image/quangcao1.jpg" alt="" /></a>
								</div>
								<div class="do-space">
									<a href="#" target="_blank"><img src="public/image/quangcao2.jpg" alt="" /></a>
								</div>
							</div>

							

							<div class="widget">
								<h3>Subscribe to our newsletter</h3>
								<div class="widget-subscribe">
									<div>
										<p>Ne congue electram dignissim eos, ius verterem gubergren temporibus te, cu inciderint definitiones usu.</p>
									</div>
									<hr>
									<div class="alert-message alert-green">
										<strong>Success! This a success message</strong>
									</div>
									<!-- <div class="alert-message alert-red">
										<strong>Error! This an error message</strong>
									</div>
									<div class="alert-message">
										<strong>Warning! This a warning message</strong>
									</div> -->
									<form action="#">
										<label class="label-input">
											<span>Your name</span>
											<input type="text" value="" />
										</label>
										<label class="label-input">
											<span>E-mail address</span>
											<input type="email" value="" />
										</label>
										<input type="submit" class="button" value="Subscribe" />
									</form>
								</div>
							</div>

							

							<!-- <div class="widget">
								<h3>Live feed from instagram</h3>
								<div class="widget-instagram-photos">

									<div class="item">
										<div class="item-header">
											<a href="#"><img src="https://distilleryimage1-a.akamaihd.net/427393eef7af11e2b65722000a9e00be_7.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<span class="insta-like-count"><i class="fa fa-heart"></i>160 likes</span>
											<h4><a href="#">Hugh Jackman's time as Wolverine appears to be an end</a></h4>
											<span class="item-meta">
												<a href="#"><i class="fa fa-clock-o"></i>3 days ago</a>
											</span>
										</div>
									</div>

									<div class="item">
										<div class="item-header">
											<a href="#"><img src="https://igcdn-photos-c-a.akamaihd.net/hphotos-ak-xfp1/t51.2885-15/10576140_778241095547266_331905980_n.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<span class="insta-like-count"><i class="fa fa-heart"></i>160 likes</span>
											<h4><a href="#">Hugh Jackman's time as Wolverine appears to be an end</a></h4>
											<span class="item-meta">
												<a href="#"><i class="fa fa-clock-o"></i>6 days ago</a>
											</span>
										</div>
									</div>

									<a href="#" target="_blank" class="button-read-more">View instagram profile</a>

								</div>
							</div> -->

						<!-- END .sidebar -->
						</aside>

					</div>
					

				<!-- END .wrapper -->
				</div>