<?php if (!empty($data_parent)) { ?>
    <?php foreach ($data_parent as $lists_parent) { 
			?>	
				<tr class="even pointer list-baris-article">
					<td>
						<?php echo $lists_parent->nama; ?>
					</td>
					<td>
						<?php echo $lists_parent->keterangan; ?>
					</td>
					<td>
						<a href="<?php echo url_web('admin/data_kosentrasi/edit/' . $lists_parent->id); ?>" style="border-right: 1px solid #999;padding: 0 10px;"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url_web('admin/data_kosentrasi/delete/' . $lists_parent->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
			<?php	
		}
	
}else{
	echo '<tr class="even pointer list-baris-article"><td colspan="5">No Data<td></tr>';
}
?>
