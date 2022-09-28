<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
                Баннеры
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Баннеры</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="box">
					<div class="box-header with-border d-flex justify-content-between align-items-center">						
						<h4 class="box-title">Промо-материалы</h4>
					</div>
					<div class="panel-body p-15" style="text-align:center; ">
                        <?= get_banners_list('', '', "width:600px;"); ?>
                    </div>
				</div>
            </div>
            <div class="col-md-2"></div>
        </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
    </div>
</div>

<?php require_once(THEME_ROOT . "/blocks/dashboard/footer.php"); ?>