<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
                Настройки
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Настройки</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

        <div class="row">
            <div class="col-12">
				<div class="nav-tabs-custom box-profile">
					<ul class="nav nav-tabs">
						<li><a href="/user/settings">Личные данные</a></li>
						<li><a href="/user/save_password">Сменить пароль</a></li>
						<li><a class="active" href="/user/wallets">Реквизиты</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title">Реквизиты</h4>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php $form = form_save_wallet(get_login()); ?>
					<form class="form-horizontal pb-20" action="<?php echo $form['action']; ?>" method="<?php echo $form['method']; ?>">
						<?php echo form_init(); ?>

						<div class="box-body">
						<?php echo flash_show('save_wallets', '', 'notification.php'); ?>

							<?php foreach ($form['fields'] as $item) : ?>
								<?php if ( strtolower(escape($item['name'])) == 'tron_trc20' ) : ?>
								<div class="input-group">
									<div class="input-group-addon">
										USDT TRC20
									</div>
									<input type="text" class="form-control" name="<?php echo escape($item['name']); ?>[]" value="<?php echo $item['value']; ?>">
								</div>
								<br>
								<?php elseif ( strtolower(escape($item['name'])) == 'binancecoin' ) : ?>
								<div class="input-group">
									<div class="input-group-addon">
										ARJ (BNB Chain)
									</div>
									<input type="text" class="form-control" name="<?php echo escape($item['name']); ?>[]" value="<?php echo $item['value']; ?>">
								</div>
								<br>
								<?php endif; ?>
							<?php endforeach; ?>

						</div>

						<div class="box-footer">
							<input type="submit" class="btn btn-info pull-right" value="<?php echo T(/* ### visual-edit-61c1b2bb5c9fd3.54507952 ### */'Сохранить изменения'/* ### visual-edit-61c1b2bb5c9fd3.54507952 ### */, 'visual-edit-61c1b2bb5c9fd3.54507952'); ?>">
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
        </div>
		  <!-- /.row -->

		</section>
		
    </div>
</div>

<?php
    require_once(THEME_ROOT . "/blocks/dashboard/footer.php");
?>

<script>


	// берем тело документа, найдем каждый элемент на нем и для каждого вызовем функцию
	$('.alert').each(function() {
		var text = $(this).text(); // берем текст текущего элемента
		text = text.replace(/TTqjpzXi743tX8PgVyLxdWTivZ3ZvmbA47/g, ""); // заменяем необходимое
		$(this).text(text); // выставляем новый текст в элемент
	});

</script>