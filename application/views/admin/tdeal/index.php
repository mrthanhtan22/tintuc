<?php $this->load->view('admin/tdeal/head'); ?>
<!--comment-->
	<div class='wrapper'>

<div class="widget">
	<?php $this->load->view('admin/message', $this->data); ?>

	<div class="title">
		<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
		<h6>Danh sách vé khuyến mãi</h6>
	 	<div class="num f12">Tổng số: <b><?php echo $total?></b></div>
	</div>
	
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">

			<thead>
				<tr>
					<td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã số</td>
					<td>Nơi đi</td>
					<td>Nơi đến</td>
					<td>Giá</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="7">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('tdeal/delete_all')?>">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					
					</td>
				</tr>
			</tfoot>
 			
			<tbody>
				
		<?php foreach ($list as $row): ?>
	     <tr class='row_<?php echo $row->id ?>'>	
			<td><input type="checkbox" name="id[]" value="<?php echo $row->id ?>" /></td>
			
			<td class="textC"><?php echo $row->id ?></td>
			<td class="textC"><?php echo $row->from ?></td>
			<td class="textC"><?php echo $row->to ?></td>
			<td class="textC"><?php echo $row->price ?></td>

	
			
			

			
			
				
			<td class="option textC">

				

				 <a href="<?php echo admin_url('tdeal/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS">
					<img src="<?php echo public_url('admin') ?>/images/icons/color/edit.png" />
				</a>
				
				<a href="<?php echo admin_url('tdeal/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action" >
				    <img src="<?php echo public_url('admin') ?>/images/icons/color/delete.png" />
				</a>
			</td>
		
		</tr>
		<?php endforeach; ?>
	
			</tbody>
		
	</table>
	
</div>

</div>
<!--end comment-->