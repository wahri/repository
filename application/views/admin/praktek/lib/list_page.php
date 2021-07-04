<?php 
if (!empty($skripsi_parent)) { 
$status_paper = array (
	array ( 
			'id' 				=> 1, 
			'transitiongoal' 	=> 33.3,
			'valuenow' 			=> 1,
			'coment'			=> 'Menunggu Persetujuan admin',
		),
	array ( 
			'id' 				=> 2, 
			'transitiongoal' 	=> 66,6, 
			'valuenow' 			=> 63.31,
			'coment'			=> 'Menunggu perbaikan data',
		),
	array ( 
			'id' 				=> 3, 
			'transitiongoal' 	=> 100, 
			'valuenow' 			=> 83.31,
			'coment'			=> 'Selesai',
		),
);
?>

    <?php foreach ($skripsi_parent as $lists_paper) { 
		$id_status = array_search($lists_paper->status, array_column($status_paper, 'id'));
	
	?>
        <tr class="even pointer list-baris-article">
			<td>
				<?php 
				echo '<b>'.$lists_paper->judul. '</b>';
				?>
				<br>
				<small style="font-size:11px">Kosentrasi: <?php echo $lists_paper->jenis; ?></small>
			</td>
			
			<td>
				<?php echo $lists_paper->penulis; ?>
			</td>

			<td style="font-size:11px">
				<?php echo $this->costume->get_name_dosen($lists_paper->pembimbing)->nama; ?>
			</td>
			
			<td style="font-size:11px">
				<?php
					echo ' 
						<p>Process... '.$status_paper[$id_status]['coment'].'</p>
						<div class="progress progress_sm">
							<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$status_paper[$id_status]['transitiongoal'].'" aria-valuenow="'.$status_paper[$id_status]['valuenow'].'" style="width: '.$status_paper[$id_status]['transitiongoal'].'%;"></div>
						</div>';
				?>
			</td>
			
            <td>
				<a href="<?php echo url_web('admin/praktek/review/').$lists_paper->id; ?>" class="btn btn-xs btn-default">Detail</a>
			</td>
			
        </tr>
    <?php } ?>
<?php } ?>
