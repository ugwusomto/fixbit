<?php  
 require_once "config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FixBit Home</title>
   <?php  require_once "includes/home-css.php";  ?>
</head>
<body id="bg">
<div class="page-wraper">


	<!-- header -->
  <?php  require_once "includes/home-header.php";  ?>

    <!-- header END -->

	<!-- Content -->
	<div class="page-content bg-white">
		<!-- Post Grid Style -->
		<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center">
					<span>Category</span>
				</div>
				<div class="category-owl owl-carousel owl-btn-center-lr">
					<div class="item">
						<div class="category-box">
							<div class="category-media">							
								<img src="<?=IMAGE_PATH?>category/pic1.jpg" alt="Travel">	
							</div>
							<div class="category-info">
								<a href="blog.php" class="category-title">Travel</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="category-box">
							<div class="category-media">							
								<img src="<?=IMAGE_PATH?>category/pic2.jpg" alt="Travel">	
							</div>
							<div class="category-info">
								<a href="javascript:void(0);" class="category-title">Beauty</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="category-box">
							<div class="category-media">							
								<img src="<?=IMAGE_PATH?>category/pic3.jpg" alt="Travel">	
							</div>
							<div class="category-info">
								<a href="javascript:void(0);" class="category-title">Fashion</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="category-box">
							<div class="category-media">							
								<img src="<?=IMAGE_PATH?>category/pic4.jpg" alt="Travel">	
							</div>
							<div class="category-info">
								<a href="javascript:void(0);" class="category-title">Beauty</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-full bg-white content-inner-3">
			<div class="container">
				<div class="section-head text-center">
					<span>LifeStyle</span>
				</div>
				<div class="row">
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="blog-card blog-grid">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/blog-md/blog/pic1.jpg" alt=""/>
							</div>
							<div class="blog-card-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-audio.html">Natural Hair Guru Who Launch Products For Tresses</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
						<div class="blog-card blog-grid">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/blog-md/blog/pic2.jpg" alt=""/>
							</div>
							<div class="blog-card-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-pagination.html">Everything You Need to Know About Cultural</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="blog-card blog-grid">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/blog-md/blog/pic3.jpg" alt=""/>
							</div>
							<div class="blog-card-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-open-gutenberg.html">Las Catalinas, Car-Free Costa Rica Town Welcomes</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Post Grid Style End -->


		<!-- Most Popular -->
		<div class="section-full bg-white content-inner">
			<div class="container">
				<div class="section-head text-center">
					<h6 class="title-head text-uppercase"><span>Most popular</span></h6>
				</div>
				<div class="row sp40">
					<div class="col-lg-6 widget-post-bx wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic1.jpg" alt="">
								<h2 class="post-count">1</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-gallery-alternative.html">March Madness! A Pro’s Guide to the Healthiest Courtside</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic2.jpg" alt="">
								<h2 class="post-count">3</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-side-image.html">The Ultimate Guide to Prepping Your Legs for Spring</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic3.jpg" alt="">
								<h2 class="post-count">5</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-slide-show.html">New Senate Bill Aims to Tackle Unreg ulated Ingredients</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 widget-post-bx wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic4.jpg" alt="">
								<h2 class="post-count">2</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-header-image.html">Ariana Grande Knows the Power of a Good Hair Accessory</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic5.jpg" alt="">
								<h2 class="post-count">4</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-left-sidebar.html">The Top Take Aways from 2020’s In Goop Health Summit</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
							<div class="dlab-post-media">
								<img src="<?=IMAGE_PATH?>blog/popular-blog/pic6.jpg" alt="">
								<h2 class="post-count">6</h2>
							</div>
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
										<li class="post-date">at <span>12 August 2020</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="post-standart.html">The Best Model Street Style Beauty of Fashion Month</a></h4>
								<div class="dlab-feed-meta">
									<ul>
										<li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
										<li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
										<li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
										<li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
											<ul>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Post End -->

    </div>
    <!-- Content END-->
	<!-- Footer -->
  <?php require_once "includes/home-footer.php"; ?>

    <!-- Footer END-->
 
</div>
  <?php require_once "includes/home-js.php"; ?>
</body>
</html>
