<!DOCTYPE html>
<html>
<head>
	
	<?php $this->load->view('site/tintuc/head'); ?>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php $this->load->view('site/header/menu'); ?>
	<?php $this->load->view('site/header/form_search');?>
	<br>
	
	<?php $this->load->view('site/tintuc/noidung', $this->data) ?>
	<!-- footer -->
 	<footer id="lienhe" class="footer"  role="contentinfo">
 		<?php $this->load->view('site/footer'); ?>
 	</footer>
 		<?php $this->load->view('site/js'); ?>
 <!-- end footer -->


</body>
</html>