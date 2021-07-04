<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo !empty($title) ? $title : '';  ?> - <?php echo $website_judul;?></title>
		<meta name="description" content="<?php echo $website_deskripsi;?>">
		<meta name="keywords" content="<?php echo $website_deskripsi;?>">
		
		<!-- facebook META -->
		<meta property="fb:app_id" 		  content="<?php echo $website_fb_app_id;?>"/>
		<meta property="og:url"           content="<?php echo current_url(); ?>" />
		<meta property="og:type"          content="article" />
		<meta property="og:title"         content="<?php echo !empty($title) ? $title : '';  ?> - <?php echo $website_judul;?>" />
		<meta property="og:description"   content="<?php echo $og_description;?>" />
		<meta property="og:image"         content="<?php echo $image_og;?>" />
		<meta property="og:site_name" 	  content="<?php echo $website_judul;?>">
		<meta property="article:author"   content="<?php echo $website_fb_pages_url;?>" />
		<meta property="article:publisher" content="<?php echo $website_fb_pages_url;?>" />
		
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('single_theme/css/bootstrap.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('single_theme/css/font-awesome.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('single_theme/css/animate.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('single_theme/css/style.css');?>">
		<!-- =======================================================
			Theme Name: Bethany
			Theme URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
			Author: BootstrapMade.com
			Author URL: https://bootstrapmade.com
			======================================================= -->
		<style>
		.contact-info ul{
			padding-left: 0;
			margin: 0;
		}
		.contact-info ul>li a:before {
			content: "\f105";
			font-family: FontAwesome;
			font-weight: normal;
			font-style: normal;
			display: block;
			float: right;
			text-decoration: inherit;
			font-size: 14px;
		}
		.contact-info li {
			list-style-type: none;
			position: relative;
			display: block;
			padding: 0 0 5px 0;
			margin: 0 0 5px 0;
		}
		.contact-info li a{
			color: #333333;
		}
		.media-body h4 a{
			color: #060606;
		}
		address a{
			color: #1965d8;
		}
		</style>
	</head>
	<body>