	<br>
	<br>
	<h2><strong>VÉ MÁY BAY KHUYẾN MÃI</strong></h2>
<b class="pull-right"><a href="">Xem tất cả</a></b><br>
<div class="col-md-12 bxslider1">
	<?php foreach ($tdeal_list as $row): ?>
		<div class="row bg bxslide">
			<div class="col-sm-4 pull-left">
				<p><span class="fa fa-paper-plane-o" style="font-size:25px;color:#f4511e;"></span></p>
				<p class="diemdi"><strong><?php echo $row->from ?></strong></p>
				<p><i>Đểm đi</i></p>
				
			</div>
			<div class="col-sm-2 text-center">
				<p class="muiten"><img src="<?php echo public_url()?>/images/muiten.gif"></p>
			</div>
			<div class="col-sm-4">
				<p><span class="fa fa-paper-plane-o" style="font-size:25px;color:#f4511e;"></span></p>
				<p class="diemden"><strong><?php echo $row->to ?></strong></p>
				<p><i>Điểm đến</i></p>
			</div>
			<div class="col-sm-2 pull-right">
				<img src="<?php echo public_url()?>/images/vietjet.gif">
				<p class="pice"><strong><?php echo $row->price ?>VND</strong></p>
			</div>
		</div>
	<?php endforeach; ?>

	</div>

