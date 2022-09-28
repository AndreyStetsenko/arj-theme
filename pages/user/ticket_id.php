<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<?php
$appeal = support_get_appeal_by_id( (int)get('id') );

if ($appeal['login'] !== session('login')) {
    redirect('/user/');
}
?>

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
                            <h4 class="box-title">Отправить сообщение поддержке</h4>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="/handlers/user/send_answer_ticker.php">
                            <?php echo form_init(); ?>
                            <br>
                            <?php echo flash_show('send_answer_ticker'); ?>

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Сообщение</label>
                                    <textarea name="text" class="form-control" cols="30" rows="10" placeholder="Введите текст сообщения..."></textarea>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="/user/tickets/" class="btn btn-default">Назад</a>
                                <input name="support_add_message" type="submit" class="btn btn-info pull-right" value="<?php echo T(/* ### visual-edit-5f9835c4812d37.66970392 ### */'Отправить'/* ### visual-edit-5f9835c4812d37.66970392 ### */, 'visual-edit-5f9835c4812d37.66970392'); ?>">
                                <input type="hidden" value="<?php echo (int)$appeal['id']; ?>" name="id">
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-3"></div>

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">						
                            <h4 class="box-title">Сообщения</h4>

                            <div class="ml-auto">
                                <a href="/user/tickets" class="btn btn-primary top-link-active">
                                    <i class="fa fa-arrow-circle-o-down"></i> 
                                    <?php echo T(/* ### visual-edit-5f9835c48aa472.64970898 ### */'Мои тикеты'/* ### visual-edit-5f9835c48aa472.64970898 ### */, 'visual-edit-5f9835c48aa472.64970898'); ?>
                                </a>
                                <a href="/user/new_ticket" class="btn btn-success top-link">
                                    <i class="fa fa-arrow-circle-o-up"></i> 
                                    <?php echo T(/* ### visual-edit-5f9835c48aa5c3.24548234 ### */'Создать тикет'/* ### visual-edit-5f9835c48aa5c3.24548234 ### */, 'visual-edit-5f9835c48aa5c3.24548234'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="box-body p-15">						
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>От кого</th>
                                            <th>Дата</th>
                                            <th>Сообщение</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach (support_get_messages_list( $appeal['id']) as $row ) { ?>
                                        <tr>
                                            <?php if ($login === $row['login']) { ?>
                                                <td>
                                                    <a href="#">Вы</a>
                                                </td>
                                            <?php } else { ?>
                                                <td>
                                                    <a href="#">Поддержка</a>
                                                </td>
                                            <?php } ?>
                                            <td>
                                                <?php echo format_date($row['date']); ?>
                                            </td>
                                            <td>
                                                <?php echo escape($row['text']); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</section>
		<!-- /.content -->
    </div>
</div>

<?php require_once(THEME_ROOT . "/blocks/dashboard/footer.php"); ?>


