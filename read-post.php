<?php  
  require_once "config/config.php";
	require_once "config/Db.php";
 require_once "functions/Post.php";
 require_once "functions/Category.php";
 require_once "functions/Utils.php";
 require_once "functions/Admin.php";
 require_once "functions/Comment.php";


 
 if(empty($_GET['post_id']) || !is_numeric($_GET['post_id'])){
	 header('Location: 404.php');
	 exit();
 }
 
 $post_id = $_GET['post_id'];
 
 $instance = Database::getDbInstance();
 Post::setDb($instance);
 Admin::setDb($instance);
 Category::setDb($instance);
 Comment::setDb($instance);

 $allCategories = Category::getAllCategory();
 $allComments = Comment::getAllComments();



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
									<img src="<?=IMAGE_PATH?>user.png" alt="Profile Pic" width="130" height="130">
								</a>
							</div>
							<div class="author-profile-content">
							<?php 
							 $author = Admin::getAdminById($post->user_id);
							//  Utils::see($author);
							?>
								<h6 class="title">I Am <?=$author->username?></h6>
								<p>You can reach me through my email address <a href="mailto:<?=$author->email?>"><?=$author->email?></a>.</p>

							</div>
						</div>
						<?php if(!empty($allComments)){ ?>
						<div class="clear m-b30" id="comment-list">
							<div class="comments-area" id="comments">
								<div class="section-head text-center">
									<span>Comments</span>
								</div>
								<!-- comment list END -->
								<ol class="comment-list">

                 <?php foreach ($allComments as $key => $value) { ?>
									<li class="comment">
										<div class="comment-body">
											<div class="comment-author vcard"> 
												<img  class="avatar photo" src="<?=IMAGE_PATH?>user.png" alt=""> 
												<cite class="fn"><?=ucwords($value->username)?></cite> 
												<span class="says">says:</span> 
												 <div class="comment-meta"> <a href="javascript:void(0);"><?=date('d M, Y  h:i a',strtotime($value->created_at))?></a> </div>
											</div>
											<div class="comment-content">
												<p><?=ucwords($value->comment)?>.</p>
											</div>
										</div>
										<!-- list END -->
									</li>
									<?php  } ?>

								</ol>
								<!-- comment list END -->
							</div>
						</div>
						<?php } ?>

						<!-- Form -->
						<?php if(!empty($_SESSION['customer_id'])){ ?>
						<div class="comments-area" id="respond">
							<div class="comment-respond" id="respond">
								<div class="section-head text-center">
									<span>LEAVE A COMMENT</span>
								</div>

								<form action="<?=APP_PATH?>functions/api-request.php"  class="comment-form" id="commentform" method="post">

									<input type="hidden" name="post_id" value="<?=$post->id?>">

									<p class="comment-form-comment">
										<label for="comment">Comment</label>
										<textarea  required name="comment" rows="8" placeholder="Add a Comment" id="comment"></textarea>
									</p>
									<p class="form-submit">
										<input type="submit" value="Post Comment" class="btn radius-no secondry" id="submit">
									</p>
								</form>
							</div>
						</div>
						<?php }else{ ?>
             <p>Login in <a href="<?=APP_PATH?>login.php">Here</a> to comment</p>
						<?php } ?>

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
