<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
            Вывод средств
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Вывод средств</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

            <div class="row">

            <?php $is_payment = is_open("payment");
                    if ($is_payment["error"]) :
                        echo flash_show();
                    else : ?>

                <div class="col-md-4 col-12">
				    <div class="box">
				        <div class="box-header">
					        <h4 class="box-title">Вывести средства</h4>
				        </div>

				        <div class="box-body">

                        <?php $is_payment = is_open("payment");
                            if ($is_payment["error"]) {
                                echo flash_show();
                            } else { ?>
                            <?php echo flash_show('payment', '', 'notification.php'); ?>
                                <form method="post" action="/handlers/user/payment.php">
                                    <?php echo form_init(); ?>

                                    <!-- <div class="form-group">
                                        <label>Выберите систему</label>
                                        <select class="form-control select2 w-p100" name="paysystem" required>
                                            <option>- Выберите систему -</option>
                                            <option value="usdt">USDT TRC20</option>
                                            <option value="arj">BNB</option>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <label>Выберите систему для вывода</label>
                                        <select name="system" class="form-control" style="width: 100%;" required>
                                            <option>- <?php echo T(/* ### visual-edit-5f9835c4588bf0.21820239 ### */'Выберите Систему'/* ### visual-edit-5f9835c4588bf0.21820239 ### */, 'visual-edit-5f9835c4588bf0.21820239'); ?> -</option>

                                            <?php foreach (get_payment_system('payment') as $item) { ?>
                                                <?php if (user_wallet($login, $item['value'])) { ?>
                                                    <?php if ( escape($item['value']) == 'TRON_TRC20' ) : ?>
                                                    <option
                                                            value="<?php echo escape($item['value']); ?>"
                                                            <?php if (escape(post('system')) == $item['value']) { echo 'selected'; } ?>>

                                                        USDT TRC20
                                                        (<?php echo user_wallet($login, $item['value']); ?>)
                                                    </option>
                                                    <?php elseif ( escape($item['value']) == 'BinanceCoin' ) : ?>
                                                    <option
                                                            value="<?php echo escape($item['value']); ?>"
                                                            <?php if (escape(post('system')) == $item['value']) { echo 'selected'; } ?>>

                                                        ARJ (BNB Chain)
                                                        (<?php echo user_wallet($login, $item['value']); ?>)
                                                    </option>
                                                    <?php endif; ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="d-flex justify-content-between">
                                            Сумма для вывода (ARJ)
                                            <span><small>max </small><?= format_currency(user_balance($login), get_currency()) >= 100000 ? '100000.00' : format_currency(user_balance($login), get_currency()); ?> ARJ</span>
                                        </label>
                                        <input type="text" name="amount"
                                                value="<?php echo escape(post('amount')); ?>"
                                                placeholder="<?php echo T(/* ### visual-edit-5f9835c4588de5.57035858 ### */"Введите сумму"/* ### visual-edit-5f9835c4588de5.57035858 ### */, 'visual-edit-5f9835c4588de5.57035858'); ?>"
                                                class="form-control"
                                                required>
                                    </div>

                                    <div class="col-lg-12 col-sm-6">
                                        <input
                                                type="submit"
                                                value="<?php echo T(/* ### visual-edit-5f9835c4588ef8.87610831 ### */'Вывести'/* ### visual-edit-5f9835c4588ef8.87610831 ### */, 'visual-edit-5f9835c4588ef8.87610831'); ?>"
                                                class="btn btn-primary mt-2"
                                                style="width: 100%;">
                                    </div>
                                </form>
                            <?php } ?>

				        </div>
				    </div>
			    </div>

                <?php endif; ?>

                <div class="col-md-8 col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">						
                            <h4 class="box-title">История выплат</h4>
                        </div>
                        <div class="box-body p-15">						
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th><?php echo T('Сумма').' (ARJ)'; ?></th>
                                            <th><?php echo T(/* ### visual-edit-5f9835c45890e0.64286047 ### */'Дата'/* ### visual-edit-5f9835c45890e0.64286047 ### */, 'visual-edit-5f9835c45890e0.64286047'); ?></th>
                                            <th><?php echo T(/* ### visual-edit-5f9835c4589200.48733899 ### */'Система'/* ### visual-edit-5f9835c4589200.48733899 ### */, 'visual-edit-5f9835c4589200.48733899'); ?></th>
                                            <th><?php echo T(/* ### visual-edit-5f9835c4589309.66864203 ### */'Кошелек'/* ### visual-edit-5f9835c4589309.66864203 ### */, 'visual-edit-5f9835c4589309.66864203'); ?></th>
                                            <th><?php echo T(/* ### visual-edit-5f9835c4589400.58685668 ### */'Статус'/* ### visual-edit-5f9835c4589400.58685668 ### */, 'visual-edit-5f9835c4589400.58685668'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $list = login_list_payment($login);
                                        if ($list) {
                                            foreach ($list as $item) { ?>
                                                <tr style="text-align: center;">
                                                    <td><?php echo format_currency($item['summa'], $val); ?></td>
                                                    <td><?php echo format_date($item['date']); ?></td>
                                                    <td>
                                                        <svg width="57" height="20" role="img"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bm_icon_payment_colored_<?php echo strtolower(escape($item['system'])); ?>"></use> </svg>
                                                    </td>
                                                    <td><?php echo escape($item['wallet']); ?></td>
                                                    <td><?php echo $item['status'] ? T('Успешно') : T('Ожидает'); ?></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr>
                                                <td colspan="5" class="danger" align="center"><?php echo T(/* ### visual-edit-5f9835c4589517.90556237 ### */'Записей не обнаружено'/* ### visual-edit-5f9835c4589517.90556237 ### */, 'visual-edit-5f9835c4589517.90556237'); ?></td>
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

<style>
    .list-payments-out .group-btn {
        display: none;
    }

    .list-payments-out .group-btn:first-child {
        display: flex;
    }

    .payment-error {
        padding-bottom: 10px;
		text-align: center;xx
	}
</style>

<?php require_once(THEME_ROOT . "/blocks/dashboard/footer.php"); ?>

<script>

	// берем тело документа, найдем каждый элемент на нем и для каждого вызовем функцию
	$('.alert').each(function() {
		var text = $(this).text(); // берем текст текущего элемента
		text = text.replace(/TRON_TRC20/g, "USDT TRC20"); // заменяем необходимое
		$(this).text(text); // выставляем новый текст в элемент
	});

</script>