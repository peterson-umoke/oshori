<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($title) ? $title . " | Oshori": ""; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo css_uri("bootstrap.min"); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo css_uri("AdminLTE.min"); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo plugins_uri("iCheck/square/blue.css"); ?>">

  <!-- jQuery 3.1.1 -->
  <script src="<?php echo js_uri('jquery-3.1.1.min'); ?>"></script>
  <!-- jQuery Migrate 3.0.0 -->
  <script src="<?php echo js_uri('jquery-migrate-3.0.0.min'); ?>"></script>
  <!-- modernizr plguin -->
  <script src="<?php echo js_uri('modernizr-2.8.3.min'); ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?php echo isset($body_class) ? $body_class : ""; ?>">