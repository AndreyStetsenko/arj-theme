<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>
<?php $user = get_row_by_id("users", session("id")); ?>

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
						<li><a class="active" href="/user/settings">Личные данные</a></li>
						<li><a href="/user/save_password">Сменить пароль</a></li>
						<li><a href="/user/wallets">Реквизиты</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
						<h4 class="box-title">Личные данные</h4>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php $form = form_save_profile(get_login()); ?>
					<form class="form-horizontal pb-20" action="<?php echo $form['action']; ?>" method="<?php echo $form['method']; ?>">
                        <br>
                        <?php echo flash_show('save_profile'); ?>
                        <?php echo form_init();?>

                        <?php
                            $icon = [
                                'login' => 'user',
                                'email' => 'envelope',
                                'name' => 'user',
                                'lastname' => 'user',
                                'patronymic' => 'user',
                                'phone' => 'earphone',
                                'country' => 'flag',
                                'city' => 'home',
                                'vk' => 'pencil',
                                'skype' => 'pencil',
                                'date' => 'calendar',
                                'refback' => 'usd',
                            ];
                        ?>

						<div class="box-body">

                            <?php foreach ($form['fields'] as $item) { ?>
                                <?php if ( escape($item['title']) == "VK" ) : ?>
                                    <div class="form-group">
                                        <label for="<?php echo escape($item['name']); ?>">
                                            Telegram
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-<?php echo $icon[$item['name']]; ?>"></span>
                                            </span>
                                            <input type="<?php echo escape($item['type']); ?>" value="<?php echo escape($item['value']); ?>" name="<?php echo escape($item['name']); ?>" <?php echo escape($item['attr']); ?> id="<?php echo escape($item['name']); ?>" class="form-control">
                                        </div>
                                    </div>
                                <?php elseif ( escape($item['title']) == "Skype" ) : ?>
                                <?php else : ?>
                                    <div class="form-group">
                                        <label for="<?php echo escape($item['name']); ?>">
                                            <?php echo escape($item['title']); ?>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-<?php echo $icon[$item['name']]; ?>"></span>
                                            </span>
                                            <input type="<?php echo escape($item['type']); ?>" value="<?php echo escape($item['value']); ?>" name="<?php echo escape($item['name']); ?>" <?php echo escape($item['attr']); ?> id="<?php echo escape($item['name']); ?>" class="form-control">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php } ?>

						</div>

						<div class="box-footer">
							<input type="submit" name="save_profile" class="btn btn-info pull-right" value="<?php echo T(/* ### visual-edit-61c1b2bb5c9fd3.54507952 ### */'Сохранить изменения'/* ### visual-edit-61c1b2bb5c9fd3.54507952 ### */, 'visual-edit-61c1b2bb5c9fd3.54507952'); ?>">
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>

            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="box d-none">
					<div class="box-header with-border">
						<h4 class="box-title">Аватар</h4>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal pb-20" action="/handlers/user/avatar.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <br>
                        <?php echo flash_show('avatar'); ?>
                        <?php echo form_init(); ?>

						<div class="box-body">

                            <div class="form-group">
                                <label for="avatar">
                                    Avatar
                                </label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="file" name="img" id="avatar" class="form-control">
                                </div>
                            </div>

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

<?php require_once(THEME_ROOT."/blocks/dashboard/footer.php"); ?>
