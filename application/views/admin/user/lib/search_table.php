		<?php 
		foreach ($user_parent as $users) { 
		?>	
				<tr>
					<td><?php echo $users->name; ?></td>
					<td><?php echo $users->username; ?></td>
					<td><?php echo $users->first_name; ?> <?php echo $users->last_name; ?></td>
					<td><?php echo $users->email; ?></td>
					<td>
						<?php 
							if($users->active == 1){
								$st=0;
								echo '<span class="label label-primary btn-status" style="cursor: pointer; cursor: hand;" data-toggle="tooltip" data-placement="left" title="Klik untuk me non aktifkan" data-href="'.url_web("admin/user/set_status").'" data-status="'.$st.'" data-value="'.$users->id.'">Aktive</span>';
							}else{
								$st=1;
								echo '<span class="label label-danger btn-status" style="cursor: pointer; cursor: hand;" data-toggle="tooltip" data-placement="left" title="Klik untuk mengaktifkan" data-href="'.url_web("admin/user/set_status").'" data-status="'.$st.'" data-value="'.$users->id.'">Non Aktive</span>';
							}
						?>
					</td>
					<td>
						<a href="<?php echo url_web('admin/user/edit/' . $users->id); ?>" style="border-right: 1px solid #999;padding: 0 10px;"><i class="fa fa-edit"></i></a>
						<a href="<?php echo url_web('admin/user/delete/' . $users->id); ?>" style="padding: 0 10px;" class="deleter"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
		<?php 
				
		}
		?>	
		