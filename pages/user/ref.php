<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<?php
$DBConnectFL = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$refer = mysqli_query($DBConnectFL, 'SELECT refer FROM users WHERE login = "' . $login . '"');

$referal = '';
foreach ($refer as $key => $item) {
    $referal = $item['refer'];
}
?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
                Реферальная программа
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Реферальная программа</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

            <div class="row">

                <div class="col-md-4 col-12">
                    <div class="box">
                        <div class="box-body" style="overflow: auto;">
                            <h5>Реферальный процент</h5>
                            <table class="table mb-15">
                                <tbody>
                                    <tr>
                                        <th><b class="text-white">Уровень 1</b></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Процент от приглашенных пользователей по уровням</th>
                                        <td style="width: 120px">1 - 4% <br> 2 - 2% <br> 3 - 1%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Сумма стейкинга пользователя для достижения уровня</th>
                                        <td>0-250 ARJ</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><b class="text-white">Уровень 2</b></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Процент от приглашенных пользователей по уровням</th>
                                        <td style="width: 120px">1 - 6% <br> 2 - 3% <br> 3 - 2% <br> 4 - 1%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Сумма стейкинга пользователя для достижения уровня</th>
                                        <td>251-1000 ARJ</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th><b class="text-white">Уровень 3</b></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Процент от приглашенных пользователей по уровням</th>
                                        <td style="width: 120px">1 - 7% <br> 2 - 5% <br> 3 - 3% <br> 4 - 2% <br> 5 - 1%</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Сумма стейкинга пользователя для достижения уровня</th>
                                        <td>1001-10000 ARJ</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

				    <div class="box">
				        <div class="box-header">
					        <h4 class="box-title">Реферальная программа</h4>
				        </div>

				        <div class="box-body" style="overflow: auto;">

                            <table class="table mb-15">
                                <tbody>
                                    <tr>
                                        <th>Реферальная ссылка</th>
                                        <td><?= login_get_referal_link($login); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Рефералов</th>
                                        <td><?= login_refer_count($login); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Получено от рефералов</th>
                                        <td><?= format_currency(login_refer($login), $val) . ' ARJ'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
				        </div>
				    </div>
			    </div>

                <div class="col-md-8 col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">						
                            <h4 class="box-title">Мои рефералы</h4>
                        </div>
                        <div class="box-body p-15">						
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th><?php echo T(/* ### visual-edit-5f9835c46726c7.02528982 ### */'Логин'/* ### visual-edit-5f9835c46726c7.02528982 ### */, 'visual-edit-5f9835c46726c7.02528982'); ?></th>
                                            <th><?php echo T(/* ### visual-edit-5f9835c46728a5.48297470 ### */'Дата'/* ### visual-edit-5f9835c46728a5.48297470 ### */, 'visual-edit-5f9835c46728a5.48297470'); ?></th>
                                            <th><?php echo T('Пополнение').' (ARJ)'; ?></th>
                                            <th><?php echo T('Реферальные').' (ARJ)'; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo login_refer_list_table($login); ?>
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