<?php  
  require_once "config/config.php";
	require_once "config/Db.php";
 require_once "functions/Post.php";
 require_once "functions/Category.php";
 require_once "functions/Utils.php";
 
 if(empty($_GET['post_id']) || !is_numeric($_GET['post_id'])){
	 header('Location: 404.php');
	 exit();
 }
 
 $post_id = $_GET['post_id'];
 
 $instance = Database::getDbInstance();
 Post::setDb($instance);
 Category::setDb($instance);

 $post = (object) Post::getPostById($post_id);
//  $category = (object) Category::getCategoryById($cat_id);
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
		<!-- Post Standart -->
		<div class="section-full content-inner bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="blog-post blog-single sidebar">
							<div class="dlab-post-info">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-author"><span>by</span> <a href="author.html">Shailja Reddy</a></li>
										<li class="post-category">in <a href="javascript:void(0);"><?=Category::getCategoryById($post->category_id)['name']?></a></li>
										<li class="post-date">at <span><?=date('d M,Y',strtotime($post->created_at))?></span></li>
									</ul>
								</div>
								<h2 class="title"><?=ucwords($post->title)?></h2>
								<div class="dlab-post-media">
									<a href="javascript:;"><img src="<?=$post->image?>" alt=""></a>
								</div>
								<div class="dlab-post-text text">
								  <?=html_entity_decode($post->content,ENT_QUOTES)?>
								</div>

							</div>
						</div>
						<div class="author-profile-info widget">
							<div class="author-profile-pic">	
								<a href="javascript:void(0);">
									<img src="images/author.jpg" alt="Profile Pic" width="130" height="130">
								</a>
							</div>
							<div class="author-profile-content">
								<h6 class="title">I Am Shailja Reddy</h6>
								<p>Integer leo turpis, dignissim eget massa ectetur placerat felis. Praesent maximus cursus ut pre tium. Praesent vel massa libero. Aenean fermentum ultrices interdum varius.</p>
								<ul class="social-icon m-b0">
									<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-instagram"></i></a></li>
									<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-twitter"></i></a></li>
									<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="clear m-b30" id="comment-list">
							<div class="comments-area" id="comments">
								<div class="section-head text-center">
									<span>Comments</span>
								</div>
								<!-- comment list END -->
								<ol class="comment-list">
									<li class="comment">
										<div class="comment-body">
											<div class="comment-author vcard"> 
												<img  class="avatar photo" src="images/author-img/pic2.jpg" alt=""> 
												<cite class="fn">Stacy poe</cite> 
												<span class="says">says:</span> 
												 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
												<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
											</div>
											<div class="comment-content">
												<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
											</div>
										</div>
										<ol class="children">
											<li class="comment odd parent">
												<div class="comment-body">
													<div class="comment-author vcard"> 
														<img  class="avatar photo" src="images/author-img/pic3.jpg" alt=""> 
														<cite class="fn">Muhammad Clay</cite> 
														<span class="says">says:</span> 
														 <div class="comment-meta"> <a href="javascript:void(0);">October 6, 2015 at 7:15 am</a> </div>
														<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link">Reply</a> </div>
													</div>
													<div class="comment-content">
														<p>Aliquam viverra, ligula at mattis pharetra, risus nibh dignissim le in luctus odio nulla in nunc. Fusce a purus sed mauris faucibus suscipit.</p>
													</div>
												</div>
											</li>
										</ol>
										<!-- list END -->
									</li>

								</ol>
								<!-- comment list END -->
							</div>
						</div>
						<!-- Form -->
						<div class="comments-area" id="respond">
							<div class="comment-respond" id="respond">
								<div class="section-head text-center">
									<span>LEAVE A REPLY</span>
								</div>
								<h3 class="comment-reply-title" id="reply-title">
									<small> <a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small>
								</h3>
								<form class="comment-form" id="commentform" method="post">
									<p class="comment-form-author">
										<label for="author">Name <span class="required">*</span></label>
										<input type="text" value="" placeholder="Name" id="author">
									</p>
									<p class="comment-form-email">
										<label for="email">Email <span class="required">*</span></label>
										<input type="text" value="" placeholder="Email" id="email">
									</p>
									<p class="comment-form-comment">
										<label for="comment">Comment</label>
										<textarea rows="8" placeholder="Add a Comment" id="comment"></textarea>
									</p>
									<p class="form-submit">
										<input type="submit" value="Post Comment" class="btn radius-no secondry" id="submit">
									</p>
								</form>
							</div>
						</div>
						<!-- Form END -->
					</div>

				</div>
			</div>
		</div>
		<!-- Post Standart End -->

    </div>
    <!-- Content END-->
	<!-- Footer -->
  <?php require_once "includes/home-footer.php"; ?>

</div>

<?php require_once "includes/home-js.php"; ?>

</body>
</html>
