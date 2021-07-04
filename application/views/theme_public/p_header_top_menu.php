<!-- Header meta -->
<div class="header_meta">
	<div class="container">
		<div class="toggle_top_navigation"><i class="fa fa-bars"></i></div>
		<!-- Top menu -->
		<nav id="top_navigation" class="clearfix">
			<ul class="top_navigation clearfix">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<?php
					foreach ($top_menu as $parent_menu) { 
						echo '<li><a href="'.site_url($parent_menu->url_menu).'">'.$parent_menu->nama_menu.'</a>';
						$child = $this->costume->get_child_menu($parent_menu->id);
						if(!empty($child)){
							echo '<ul class="sub-menu">';
							foreach ($child as $child) {
								echo '<li><a href="'.site_url($child->url_menu).'">'.$child->nama_menu.'</a></li>';
							}
							echo '</ul>';
						}
						echo '</li>';
					}
				?>
			</ul>
		</nav>
		<!-- Social links -->
		<ul class="header_social_links clearfix">
			<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
			<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
		</ul>
	</div>
</div>
