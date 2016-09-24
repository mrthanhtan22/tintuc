<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<?php $this->load->view('site/head',$this->data); ?>
	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--header -->
	<?php $this->load->view('site/header/menu'); ?>
	<?php $this->load->view('site/header/form_search');?>
<!-- end header -->
<!--Ve may bay khuyen mai -->
	<div id="datve" class="container">
		<?php $this->load->view('site/vekhuyenmai', $this->data); ?>
	</div>
<!--end ve khuyen mai -->
<!-- tin khuyen mai va dich vu-->
	<div id="khuyenmai" class="container">
		<?php $this->load->view('site/tinkhuyenmai', $this->data); ?>
	</div>
<!-- end tin khuyen mai va dich vu-->
<!--ve may bay noi dia va quoc te-->
	<!--<div id="thongtin" class="container bg-grey">
		<?php $this->load->view('site/tintuc', $this->data); ?>
	</div>-->
<!-- end ve may-->
 <!--nhan mail-->
 	<div class="container-fluid text-center nhanmail">
 		<?php $this->load->view('site/nhanmail'); ?>
 	</div>
 <!-- end nhan mail-->
 <!-- footer -->
 	<footer id="lienhe" class="footer"  role="contentinfo">
 		<?php $this->load->view('site/footer'); ?>
 	</footer>
 		<?php $this->load->view('site/js'); ?>
 <!-- end footer -->
</body>
</html>