<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
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
              <h2><?php echo $profile_user->username; ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
		  <div class="clearfix"></div>
			<br>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			
            <div class="menu_section">
              <h3>Menu Admin</h3>
              <ul class="nav side-menu">
                <li>
					<a href="<?php echo url_web('admin/home'); ?>"><i class="fa fa-rss-square"></i> Home</a>
                </li>
				<li><a><i class="fa fa-file-image-o"></i> Dosen <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo url_web('admin/data_dosen'); ?>">Data Dosen</a></li>
                    <li><a href="<?php echo url_web('admin/data_dosen/add'); ?>">Tambah Dosen</a></li>
                  </ul>
                </li>
				<li><a><i class="fa fa-file-image-o"></i> Member <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo url_web('admin/data_member'); ?>">Data Member</a></li>
                    <li><a href="<?php echo url_web('admin/data_member/add'); ?>">Tambah Member</a></li>
                  </ul>
                </li>
				<li><a><i class="fa fa-file-image-o"></i> Kosentrasi Karya <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo url_web('admin/data_kosentrasi'); ?>">Data Kosentrasi karya</a></li>
                    <li><a href="<?php echo url_web('admin/data_kosentrasi/add'); ?>">Tambah Data Kosentrasi karya</a></li>
                  </ul>
                </li>
				
				<li>
					<a href="<?php echo url_web('admin/skripsi'); ?>"><i class="fa fa-rss-square"></i> Data Skripsi</a>
                </li>
				<li>
					<a href="<?php echo url_web('admin/praktek'); ?>"><i class="fa fa-rss-square"></i> Data Kerja Praktek</a>
                </li>
				
				
				
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo url_web('admin/user'); ?>"><i class="fa fa-sitemap"></i> User Management</a></li>
                <li><a href="<?php echo url_web('admin/data_banner'); ?>"><i class="fa fa-file-image-o"></i> Banner</a></li>
				<li><a href="<?php echo url_web('admin/setting'); ?>"><i class="fa fa-windows"></i> Setting</a></li>
				<li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> keluar</a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->


          <!-- /menu footer buttons -->
        </div>
      </div>
