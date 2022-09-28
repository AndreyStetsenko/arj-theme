<!DOCTYPE html>
<html lang="ru" class="js">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <title><?php echo get_content_title(); ?></title>

  <?php // get_default_assets(); ?>

  <meta name="description" content="<?php echo get_content_description(); ?>">
  <meta name="keywords" content="<?php echo get_content_keywords(); ?>">

  <link rel="stylesheet" href="<?= route('static/arj/site/css/vendor.bundle.css?ver=200') ?>">
  <link rel="stylesheet" href="<?= route('static/arj/site/css/style-dark.css?ver=200') ?>">
  <!-- Extra CSS -->
  <link rel="stylesheet" href="<?= route('static/arj/site/css/theme.css?ver=200') ?>">
  
  <!-- ConveyThis code -->
  <script src="//cdn.conveythis.com/javascript/conveythis-initializer.js"></script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(e) {
            ConveyThis_Initializer.init({
                api_key: "pub_e34c65786b4dd786fc01ef3e0358c983"
            });
        });
    </script>
    <!-- End ConveyThis code -->
</head>
<?php // get_admin_panel(); ?>
<?php captcha_set_on_page($page); ?>
