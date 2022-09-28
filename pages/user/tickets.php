<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<?php
$list = support_get_appeal_list($login);
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
			<div class="col-md-6 col-lg-3 col-12">
				<div class="box box-inverse box-info pull-up bg-hexagons-dark">
					<div class="box-body text-center">
						<div class="d-flex justify-content-between align-items-center">	
							<h3 class="text-white mb-10">Всего заявок</h3>						
							<h2 class="font-light text-white"><?= count($list) ?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-12">
				<div class="box box-inverse box-success pull-up bg-hexagons-dark">
					<div class="box-body text-center">
						<div class="d-flex justify-content-between align-items-center">
							<h3 class="text-white mb-10">Отвеченых</h3>
							<h2 class="font-light text-white">
                                <?php
                                    $cnt = count( array_filter( $list, function( $element ) {
                                        return $element['status'] == 'answered';
                                    }));

                                    echo $cnt;
                                ?>
                            </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-12">
				<div class="box box-inverse box-danger pull-up bg-hexagons-dark">
					<div class="box-body text-center">
						<div class="d-flex justify-content-between align-items-center">
							<h3 class="text-white mb-10">Открытых</h3>
							<h2 class="font-light text-white">
                                <?php
                                    $cnt = count( array_filter( $list, function( $element ) {
                                        return $element['status'] == 'open';
                                    }));

                                    echo $cnt;
                                ?>
                            </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 col-12">
				<div class="box box-inverse box-warning pull-up bg-hexagons-white">
					<div class="box-body text-center">
						<div class="d-flex justify-content-between align-items-center">
							<h3 class="text-white mb-10">Ожидание</h3>
							<h2 class="font-light text-white">
                                <?php
                                    $cnt = count( array_filter( $list, function( $element ) {
                                        return $element['status'] == 'processed';
                                    }));

                                    echo $cnt;
                                ?>
                            </h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="box">
					<div class="box-header with-border d-flex justify-content-between align-items-center">						
						<h4 class="box-title">Мои обращения</h4>

                        <div class="ml-auto">
                            <!-- <a href="/user/tickets" class="btn btn-primary top-link-active">
                                <i class="fa fa-arrow-circle-o-down"></i> 
                                <?php echo T(/* ### visual-edit-5f9835c48aa472.64970898 ### */'Мои тикеты'/* ### visual-edit-5f9835c48aa472.64970898 ### */, 'visual-edit-5f9835c48aa472.64970898'); ?>
                            </a> -->
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
                                        <th>ID</th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c48aa993.51181120 ### */'Заголовок'/* ### visual-edit-5f9835c48aa993.51181120 ### */, 'visual-edit-5f9835c48aa993.51181120'); ?></th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c48aa868.19164762 ### */'Дата обращения'/* ### visual-edit-5f9835c48aa868.19164762 ### */, 'visual-edit-5f9835c48aa868.19164762'); ?></th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c48aaab7.97134071 ### */'Статус'/* ### visual-edit-5f9835c48aaab7.97134071 ### */, 'visual-edit-5f9835c48aaab7.97134071'); ?></th>
                                        <th></th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                    if($list) {
                                        foreach ($list as $row) { ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= escape($row['subject']); ?></td>
                                                <td><?= format_date($row['date']); ?></td>
                                                <td><?= support_status($row['status']); ?></td>
                                                <td>
                                                    <a href="/user/ticket_id/?id=<?php echo $row['id'] ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="5" class="danger" align="center">
                                                <?php echo T(/* ### visual-edit-5f9835c48aad21.09151172 ### */'Записей не обнаружено'/* ### visual-edit-5f9835c48aad21.09151172 ### */, 'visual-edit-5f9835c48aad21.09151172'); ?>
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
		  <!-- /.row -->

		</section>
		<!-- /.content -->
    </div>
</div>

<?php require_once(THEME_ROOT."/blocks/dashboard/footer.php"); ?>


