
	
	<div class="body">


	<div role="main" class="main">



	<div class="container">

	<div class="row">
	<div class="col-md-9">
	<div class="blog-posts">
		<?php foreach ($news_list as $row): ?>
			<?php $slug_news = str_slug($row->title) ?>
	<article class="post post-medium">

		<div class="row">

			<div class="col-md-5">
				<div class="post-image">
					<div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
						<div>
							<div class="img-thumbnail">
								<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>">
								<img  class="img-responsive" src="<?php echo base_url('upload/news/'.$row->image_link)?>" alt="<?php echo $row->title ?>">
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-7">

				<div class="post-content">

					<h2><a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>"><?php echo $row->title ?></a></h2>
					<p><?php echo $row->intro ?></p>

				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="post-meta">
					<span><i class="fa fa-calendar"></i> <?php echo get_date($row->created) ?> </span>
					
					<span><i class="fa fa-comments"></i> <a href="#"><?php echo $row->count_view ?> read</a></span>
					<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
				</div>
			</div>
		</div>

	</article>
	<?php endforeach; ?>

	<!--phan trang -->
	<ul class="pagination pagination-lg pull-right">
		
		<?php echo $this->pagination->create_links();?>
	</ul>
	<!-- end phan trang-->

	</div>
	</div>

	<div class="col-md-3">
	<aside class="sidebar">

	<div class="tabs mb-xlg">
	<ul class="nav nav-tabs">
	<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i>Bài viết mới: </a></li>
	
	</ul>
	<div class="tab-content">
	<div class="tab-pane active" id="popularPosts">
	<?php foreach ($news1 as $row): ?>
		
	
	<ul class="simple-post-list">
		<li>
		<div class="post-image">
			<div class="img-thumbnail">
			<a href="blog-post.html">
			<img class="img-responsive" src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->title ?>">
			</a>
			</div>
		</div>
			<div class="post-info">
				<a href="<?php echo base_url('tintuc/view/'.$row->id)?>"><?php echo $row->title ?></a>
				<div class="post-meta"><?php echo get_date($row->created) ?></div>
			</div>
		</li>
	</ul>
	<?php endforeach; ?>
	</div>
	
	</div>
	</div>

	

	<h4 class="heading-primary">About Us</h4>
	<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

	</aside>
	</div>
	</div>

	</div>

	</div>


	</div>
<!-- vendor -->
		<script src="<?php echo public_url('contact') ?>/vendor/jquery/jquery.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.appear/jquery.appear.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.easing/jquery.easing.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/common/common.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.validation/jquery.validation.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/isotope/jquery.isotope.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/owl.carousel/owl.carousel.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo public_url('contact') ?>/js/theme.js"></script>

		<!-- Current Page vendor and Views -->
		<script src="<?php echo public_url('contact') ?>/js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo public_url('contact') ?>/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo public_url('contact') ?>/js/theme.init.js"></script>

	

