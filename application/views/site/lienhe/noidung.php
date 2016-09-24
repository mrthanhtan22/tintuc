<div class="boby">
	
	


<div role="main" class="main">

<section class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="<?php echo base_url('lienhe') ?>">Home</a></li>

</ul>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h1>Liên hệ</h1>
</div>
</div>
</div>
</section>

<div class="container">

<div class="row">
<div class="col-md-9">
<div class="blog-posts single-post">

<article class="post post-large blog-single-post">



<div class="post-content">




<?php foreach ($lienhe as $row): ?>
		<div class="content_img">
		<p><?php echo $row->content ?></p>
	</div>
<?php endforeach ?>




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


</div>

</div>

</div>



</div>