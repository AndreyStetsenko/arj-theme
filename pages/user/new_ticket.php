<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
                Раздел поддержки
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Поддержка</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">

                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Новая заявка</h4>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="/handlers/user/new_ticket.php">
                            <?php echo form_init(); ?>
                            <br>
                            <?php echo flash_show('new_ticket'); ?>

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="text" class="control-label">Тема</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="subject"
                                        value="<?php echo escape(post('subject')); ?>"
                                        placeholder="Введите тему обращения">
                                </div>

                                <div class="form-group">
                                    <label for="text" class="control-label">Сообщение</label>
                                    <textarea name="text" id="text" class="form-control" cols="30" rows="10" placeholder="Введите текст сообщения..."></textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="/user/tickets/" class="btn btn-default">Назад</a>
                                <input name="support_add_appeal" type="submit" class="btn btn-info pull-right" value="<?php echo T(/* ### visual-edit-5f9835c4812d37.66970392 ### */'Отправить'/* ### visual-edit-5f9835c4812d37.66970392 ### */, 'visual-edit-5f9835c4812d37.66970392'); ?>">
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-3"></div>

		</section>
		<!-- /.content -->
    </div>
</div>

<?php require_once(THEME_ROOT . "/blocks/dashboard/footer.php"); ?>


