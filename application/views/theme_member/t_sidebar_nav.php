<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col noprint">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url(); ?>" class="site_title"><i class="fa fa-bookmark-o"></i> <span><?php echo $website_judul;?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
			       <img src="<?php echo base_url('upload/system/img.jpg'); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $profile_user->first_name; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
		  <div class="clearfix"></div>
			<br>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			
            <div class="menu_section">
			<h3>Menu Author</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo url_web('member/home'); ?>"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="<?php echo url_web('member/skripsi'); ?>"><i class="fa fa-file"></i> Skripsi</a></li>
				<li><a href="<?php echo url_web('member/praktek'); ?>"><i class="fa fa-file"></i> Kerja Praktek</a></li>
				<li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
           
          </div>
          <!-- /sidebar menu -->


          <!-- /menu footer buttons -->
        </div>
      </div>
