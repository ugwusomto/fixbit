<?php  
 require_once "config/config.php";
 require_once "config/Db.php";
require_once "functions/Post.php";
require_once "functions/Category.php";
require_once "functions/Utils.php";


$instance = Database::getDbInstance();
Post::setDb($instance);
Category::setDb($instance);
$allCategories = Category::getAllCategory();
$posts = Post::getAllPosts();






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

				<?php foreach ($allCategories as $key => $value) { ?>
          
					<div class="item">
						<div class="category-box">
							<div class="category-media">							
								<img src="https://source.unsplash.com/user/erondu/1600x900" alt="Travel">	
							</div>
							<div class="category-info">
								<a href="blog.php?category_id=<?=$value->id?>" class="category-title"><?=$value->name?></a>
							</div>
						</div>
					</div>

				<?php } ?>

				</div>
			</div>
		</div>

		<div class="section-full bg-white content-inner-3">
			<div class="container">
				<div class="section-head text-center">
					<span>Latest Posts</span>
				</div>
				<div class="row">
				<?php foreach ($posts as $key => $value) { ?>
					<div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="blog-card blog-grid">
							<div class="dlab-post-media">
								<img src="<?=$value->image?>" alt=""/>
							</div>
							<div class="blog-card-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-category"> <a href="blog.php?category_id=<?=$value->category_id?>"><?=Category::getCategoryById($value->category_id)['name'];?></a></li>
										<li class="post-date">at <span><?=date('d M,Y',strtotime($value->created_at))?><</span></li>
									</ul>
								</div>
								<h4 class="title"><a href="read-post.php?post_id=<?=$value->id?>"><?=ucwords($value->title)?></a></h4>
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
			  <?php } ?>
				</div>
			</div>
		</div>
        <!-- Post Grid Style End -->



    </div>
    <!-- Content END-->
	<!-- Footer -->
  <?php require_once "includes/home-footer.php"; ?>

    <!-- Footer END-->
 
</div>
  <?php require_once "includes/home-js.php"; ?>
</body>
</html>
