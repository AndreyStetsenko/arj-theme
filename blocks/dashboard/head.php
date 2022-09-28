<!DOCTYPE html>
<html lang="ru" class="js">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<title><?php echo get_content_title(); ?></title>

	<?php // get_default_assets(); ?>

	<meta name="description" content="<?php echo get_content_description(); ?>">
	<meta name="keywords" content="<?php echo get_content_keywords(); ?>">

	<link rel="stylesheet" href="<?= route('static/arj/dashboard/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') ?>">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?= route('static/arj/dashboard/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') ?>">

	<!--amcharts -->
	<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" /> 
		
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?= route('static/arj/dashboard/assets/vendor_components/datatable/datatables.min.css"') ?>"/>

	<!-- theme style -->
	<link rel="stylesheet" href="<?= route('static/arj/dashboard/css/horizontal-menu.css') ?>">
	<link rel="stylesheet" href="<?= route('static/arj/dashboard/css/style.css') ?>">

	<!-- Admin skins -->
	<link rel="stylesheet" href="<?= route('static/arj/dashboard/css/skin_color.css') ?>">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="<?= route('static/arj/dashboard/css/custom.css') ?>">

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

<body class="layout-top-nav dark-skin theme-classic">
  <div class="wrapper">