<!-- Header menu -->
<div id="header_menu" class="header_menu header_is_sticky">
	<div class="container">
		<div class="toggle_main_navigation"><i class="fa fa-bars"></i></div>
		<nav id="main_navigation" class="clearfix">
			<ul class="main_navigation clearfix">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<?php
					foreach ($main_menu as $main_menu_li) { 
						$child = $this->costume->get_child_menu($main_menu_li->id);
						if(!empty($child)){
							echo '<li><a href="'.site_url($main_menu_li->url_menu).'"><span>'.$main_menu_li->nama_menu.'</span></a>';
							echo '<ul class="sub-menu">';
							foreach ($child as $child_li) {
								echo '<li><a href="'.site_url($child_li->url_menu).'">'.$child_li->nama_menu.'</a></li>';
							}
							echo '</ul>';
						}else{
							echo '<li><a href="'.site_url($main_menu_li->url_menu).'">'.$main_menu_li->nama_menu.'</a>';
						}
						echo '</li>';
					}
				?>
			</ul>
		</nav>
	</div>
</div>
