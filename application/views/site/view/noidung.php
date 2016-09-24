<div class="boby">
	
	


<div role="main" class="main">

<section class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo base_url('tintuc') ?>">Home</a></li>
<li class="active">Blog</li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h1>Chi tiết tin</h1>
</div>
</div>
</div>
</section>

<div class="container">

<div class="row">
<div class="col-md-9">
<div class="blog-posts single-post">

<article class="post post-large blog-single-post">
<div class="post-image">
			<div class="img-thumbnail">
			<a>
			<img class="img-responsive" src="<?php echo base_url('upload/news/'.$info->image_link) ?>" alt="<?php echo $info->title ?>">
			</a>
			</div>
		</div>

<div class="post-date">
<span class="day"> <?php echo get_days($info->created) ?></span>
<span class="month"><?php echo get_date($info->created) ?></span>
</div>

<div class="post-content">

<h2><a><?php echo $info->title ?></a></h2>

<div class="post-meta">
	
	<span><i class="fa fa-comments"></i> <a href="#"><?php $info->count_view ?> Comments</a></span>
</div>
	<div class="content_img">
		<p><?php echo $info->content ?></p>
	</div>
	




<div class="post-block post-share">
	<h3 class="heading-primary"><i class="fa fa-share"></i>Share this post</h3>

	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_pinterest_pinit"></a>
		<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
	<!-- AddThis Button END -->

</div>




</div>
</article>

</div>
</div>

<div class="col-md-3">
<aside class="sidebar">



<hr>




<div class="tabs mb-xlg">
	<ul class="nav nav-tabs">
	<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i>Bài viết mới: </a></li>
	
	</ul>
	<div class="tab-content">
	<div class="tab-pane active" id="popularPosts">
	<?php foreach ($news_list as $row): ?>
		<?php $slug_news = str_slug($row->title) ?>
	
	<ul class="simple-post-list">
		<li>
		<div class="post-image">
			<div class="img-thumbnail">
			<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>">
			<img class="img-responsive" src="<?php echo base_url('upload/news/'.$row->image_link) ?>" alt="<?php echo $row->title ?>">
			</a>
			</div>
		</div>
			<div class="post-info">
				<a href="<?php echo base_url($slug_news . '-' . $row->id . '.html')?>"><?php echo $row->title ?></a>
				<div class="post-meta"><?php echo get_date($row->created) ?></div>
			</div>
		</li>
	</ul>
	<?php endforeach; ?>
	</div>
	
	</div>
	</div>


<hr>

<h4 class="heading-primary">About Us</h4>
<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

</aside>
</div>
</div>

</div>

</div>



</div>