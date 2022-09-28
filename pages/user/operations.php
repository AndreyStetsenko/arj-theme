<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
                Операции
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Операции</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

		  <div class="row">	

			<div class="col-12">
				<div class="box">
					<div class="box-header with-border d-flex justify-content-between align-items-center">						
						<h4 class="box-title">История операций</h4>
					</div>
					<div class="box-body p-15">						
						<div class="table-responsive">
							<table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
								<thead>
                                    <tr style="text-align: center;">
                                        <th><?php echo T(/* ### visual-edit-5f9835c44f7762.03103527 ### */'Операция'/* ### visual-edit-5f9835c44f7762.03103527 ### */, 'visual-edit-5f9835c44f7762.03103527'); ?></th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c44f7812.94990327 ### */'Дата'/* ### visual-edit-5f9835c44f7812.94990327 ### */, 'visual-edit-5f9835c44f7812.94990327'); ?></th>
                                        <th><?php echo T('Сумма').' (ARJ)'; ?></th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c44f78b0.85877783 ### */'Система'/* ### visual-edit-5f9835c44f78b0.85877783 ### */, 'visual-edit-5f9835c44f78b0.85877783'); ?></th>
                                        <th><?php echo T(/* ### visual-edit-5f9835c44f7962.79640106 ### */'Статус'/* ### visual-edit-5f9835c44f7962.79640106 ### */, 'visual-edit-5f9835c44f7962.79640106'); ?></th>
                                    </tr>
								</thead>
								<tbody>
                                <?php
                                    $list = login_list_operations($login);

                                    if ($list) :
                                        foreach ($list as $item) : ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo T(/* ### visual-edit-5f9835c44f7a01.32476224 ### */escape($item['operation'])/* ### visual-edit-5f9835c44f7a01.32476224 ### */, 'visual-edit-5f9835c44f7a01.32476224'); ?></td>
                                                <td><?php echo format_date($item['date']); ?></td>
                                                <td><?php echo format_currency($item['summa'], $val); ?></td>
                                                <td><?php echo escape($item['system']); ?></td>
                                                <td><?php echo $item['status'] ? T('Успешно') : T('Ожидает'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="danger" align="center"><?php echo T(/* ### visual-edit-5f9835c44f7ab7.30993290 ### */'Записей не обнаружено'/* ### visual-edit-5f9835c44f7ab7.30993290 ### */, 'visual-edit-5f9835c44f7ab7.30993290'); ?></td>
                                        </tr>
                                    <?php endif; ?>
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

<script>
	$('td').each(function() {
		var text = $(this).text(); // берем текст текущего элемента
		text = text.replace(/TRON_TRC20/g, "USDT TRC20"); // заменяем необходимое
		$(this).text(text); // выставляем новый текст в элемент
	});

	$('td').each(function() {
		var text = $(this).text(); // берем текст текущего элемента
		text = text.replace(/BinanceCoin/g, "ARJ"); // заменяем необходимое
		$(this).text(text); // выставляем новый текст в элемент
	});
</script>