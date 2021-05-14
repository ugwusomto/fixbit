<header class="site-header mo-left header-full header">
		<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container-fluid">
					<!-- website logo -->
					<div class="logo-header mostion">
						<a href="index.html"><img src="<?=IMAGE_PATH?>logo-black.png" alt=""></a>
					</div>
					
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- extra nav -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul>
								<li class="search-btn">
									<a id="quik-search-btn" href="javascript:;"><i class="ti-search m-r10"></i><span>Search</span></a>
								</li>
                <li>
									<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn secondry radius-no">Login</button>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- Quik search -->
					<div class="dlab-quik-search">
						<form action="#">
							<input name="search" value="" type="text" class="form-control" placeholder="Search...">
							<span id="quik-search"><i class="ti-search"></i></span>
						</form>
						<span class="search-remove" id="quik-search-remove"><i class="ti-close"></i></span>
					</div>
					
					<!-- main nav -->
					<div class="header-nav navbar-collapse collapse justify-content-left" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.html"><img src="<?=IMAGE_PATH?>logo.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">	
							<li>
								<a href="javascript:void(0);">Category<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="shop-product.html">Politics</a></li>
									<li><a href="shop-product-details.html">Entertainment</a></li>
									<li><a href="shop-cart.html">Education</a></li>
									<li><a href="shop-checkout.html">Technology</a></li>
								</ul>
							</li>
							<li><a href="contact-me.html">About</a></li>
							<li><a href="contact-me.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </header>