<!-- Braking news -->
	<div class="breaking_news">
		<div class="container">
			<div class="breaking_news_title">Breaking news</div>
			<div class="breaking_news_arrow"></div>
			<div class="breaking_news_container">
			<?php
					foreach ($breaking_news as $breaking_news) { 
						echo '<div><a href="'.site_url($breaking_news->url_berita).'">'.$breaking_news->judul_berita.'</a></div>';
					}
			?>
			</div>
			<div class="header_search">
				<form>
					<input type="text" id="cari" placeholder="Type and press enter..." value="" name="s">
				</form>
			</div>
		</div>
	</div>
</header>
