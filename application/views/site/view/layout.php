<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('site/view/head', $this->data); ?>
	
	

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php $this->load->view('site/header/menu'); ?>
	
	
	
	<?php $this->load->view('site/view/noidung', $this->data) ?>
	<!-- footer -->
 	<footer id="lienhe" class="footer"  role="contentinfo">
 		<?php $this->load->view('site/footer'); ?>
 	</footer>
 		<?php $this->load->view('site/js'); ?>
 <!-- end footer -->


</body>
</html>