    <?php foreach ($data_parent as $lists_parent) { 
	?>
        <tr class="even pointer list-baris-article">
			<td>
				<?php 
				echo '<b>'.$lists_parent->nidn. '</b>';
				?>
			</td>
			<td>
				<?php 
				echo '<b>'.$lists_parent->nama. '</b>';
				?>
			</td>
			
			<td>
				<a href="<?php echo url_web('admin/data_dosen/edit/' . $lists_parent->id); ?>" style="border-right: 1px solid #999;padding: 0 10px;"><i class="fa fa-edit"></i></a>
				<a href="<?php echo url_web('admin/data_dosen/delete/' . $lists_parent->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i></a>
			</td>
        </tr>
<?php } ?>
