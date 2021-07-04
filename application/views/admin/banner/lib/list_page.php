    <?php foreach ($data_parent as $lists_parent) { 
	?>
        <tr class="even pointer list-baris-article">
			<td>
				<?php 
				echo '<div class="thumbnail">
							  <img id="imageDetailFieture" style="width:80px" src="'.base_url($lists_parent->gambar).'" alt=""></div>';
				?>
			</td>
			<td>
				<?php 
				echo '<b>'.$lists_parent->judul. '</b>';
				?>
			</td>
			<td>
				<?php 
				echo '<b>'.$lists_parent->sub_judul. '</b>';
				?>
			</td>
			<td>
				<?php 
				echo '<b>'.$lists_parent->link. '</b>';
				?>
			</td>
			
			<td>
				<a href="<?php echo url_web('admin/data_banner/edit/' . $lists_parent->id); ?>" style="border-right: 1px solid #999;padding: 0 10px;"><i class="fa fa-edit"></i></a>
				<a href="<?php echo url_web('admin/data_banner/delete/' . $lists_parent->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i></a>
			</td>
        </tr>
<?php } ?>
