<?php if (!empty($user_parent)) { ?>
    <?php foreach ($user_parent as $lists) { 
		if($this->costume->get_cek_lengkap($lists->id) == 1){
			$user_data = $this->costume->get_profile_user($lists->id);
			foreach ($user_data as $lists_data){
			?>	
				<tr class="even pointer list-baris-article">
					<td>
						<?php echo $lists_data->full_name; ?>
					</td>
					<td>
						<?php echo $lists->username; ?>
					</td>
					<td>
						<?php echo $lists->email; ?>
					</td>
					<td>
						<?php echo $lists->phone; ?>
					</td>
					<td>
						<?php echo $lists->company; ?>
					</td>
					<td>
						<?php echo $lists_data->country; ?>
					</td>
					<td>
						<a href="<?php echo url_web('team/user_member/delete/' . $lists->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i> Delete</a>
					</td>
				</tr>
			<?php	
			}
		}else{
			?>	
				<tr class="even pointer list-baris-article">
					<td>
						<?php echo '<span class="label label-danger">Not Complete</span>'; ?>
					</td>
					<td>
						<?php echo $lists->username; ?>
					</td>
					<td>
						<?php echo $lists->email; ?>
					</td>
					<td>
						<?php echo $lists->phone; ?>
					</td>
					<td colspan="2">
						<?php echo '<span class="label label-danger">Not Complete</span>'; ?>
					</td>
					<td>
						<a href="<?php echo url_web('team/user_member/delete/' . $lists->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i> Delete</a>
					</td>
				</tr>
			<?php	
		}
	}
}else{
	
	echo '<tr class="even pointer list-baris-article"><td colspan="6">No Data<td></tr>';
}
?>
