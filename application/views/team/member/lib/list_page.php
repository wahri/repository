<?php if (!empty($data_parent)) { ?>
    <?php foreach ($data_parent as $lists_parent) { 
			?>	
				<tr class="even pointer list-baris-article">
					<td>
						<?php echo $lists_parent->first_name; ?>
					</td>
					<td>
						<?php echo $lists_parent->username; ?>
					</td>
					<td>
						<?php echo $lists_parent->email; ?>
					</td>
					<td>
						<?php echo $lists_parent->phone; ?>
					</td>
					<td>
						<a href="<?php echo url_web('team/data_member/edit/' . $lists_parent->id); ?>" style="border-right: 1px solid #999;padding: 0 10px;"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url_web('team/data_member/delete/' . $lists_parent->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
			<?php	
		}
	
}else{
	echo '<tr class="even pointer list-baris-article"><td colspan="5">No Data<td></tr>';
}
?>
