<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <title><?php echo get_content_title(); ?></title>
    <?php get_default_assets(); ?>
  <meta name="description" content="<?php echo get_content_description(); ?>">
  <meta name="keywords" content="<?php echo get_content_keywords(); ?>">

  <script type="text/javascript" src="<?php echo route('static/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo route('static/js/bootstrap.min.js'); ?>"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo route('static/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo route('static/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo route('static/css/bootstrap-theme.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo route('static/css/style.css'); ?>">

  <script src="https://use.fontawesome.com/5a6d40711b.js"></script>

  <script src="//icon-box.live/sprite/latest/"></script>
</head>
<?php get_admin_panel(); ?>
<?php captcha_set_on_page($page); ?>
