<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo !empty($title) ? $title : ''; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url('public/superadmin') ?>/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('public/superadmin'); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('public/superadmin'); ?>/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <!-- 
        <a href="../../index2.html"><b>Si</b>BAKUL</a>
      -->
        <img src="<?php echo base_url('uploads/theme/logo login.png'); ?>" height="50px" />
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?php echo lang('forgot_password_heading'); ?></p>
        <p class="text-danger" style="font-size:11pt;"></p>

        <h1><?php echo lang('reset_password_heading'); ?></h1>

        <div id="infoMessage"><?php //echo $message; ?></div>

        <?php echo form_open('auth/reset_password/' . $code); ?>

        <p>
            <label
                for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label>
            <br/>
            <?php echo form_input($new_password); ?>
        </p>

        <p>
            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?> <br/>
            <?php echo form_input($new_password_confirm); ?>
        </p>

        <?php echo form_input($user_id); ?>
        <?php echo form_hidden($csrf); ?>

        <p><?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-primary"'); ?></p>

        <?php echo form_close(); ?>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
