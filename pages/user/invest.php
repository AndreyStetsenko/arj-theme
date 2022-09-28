<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>
<?php $depList = login_list_depozit($login); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
            Покупка токена ARJ
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Покупка токена ARJ</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

            <div class="row">
				
				<div class="col-12">
					<div class="row">

		  			<?php foreach (get_plans() as $item) : ?>
						<?php $statusPlan = ''; ?>
						<?php if ($depList) : ?>
							<?php foreach ($depList as $elem) {
								if (json_decode($elem['plan'])->id == $item['id']) {
									$statusPlan = 'active';
								}
							} ?>
						<?php endif; ?>
						<div class="col-md-6 col-lg-3 col-12">
							<div class="box box-inverse box-danger pull-up bg-hexagons-dark">
								<?php if ( $statusPlan ) : ?><div class="plan-status-box"><?= $statusPlan ?></div><?php endif; ?>
								<div class="box-body text-center">
									<div class="d-flex justify-content-between align-items-center">
										<h3 class="text-white mb-10 pr-10 text-left"><?= $item['description'] ?></h3>
										<h2 class="font-light font-size-24 px-5 py-1" 
											style="background:rgba(255,255,255, 0.10);color:#fff!important;border-radius:8px;font-weight:600">
										<?php if ($item['count']) :
											echo (float) ($item['percent'] * $item['count'] - !$item['return'] * 100);
										else :
											echo (float) $item['percent'];
										endif; ?>%
										</h2>
									</div>
									<div class="d-flex flex-column mt-4">

										<div class="d-flex justify-content-between align-items-center">
											<span>Срок действия</span>

											<span>
												<?php if ($item['count']) :
													echo val_seconds($item['seconds'] * $item['count']);
												else :
													echo val_seconds($item['seconds']);
												endif; ?>
											</span>
										</div>

										<div class="d-flex justify-content-between align-items-center mt-2">
											<span>Ежедневное начисление</span>

											<span>
												<?= (float) $item['percent']; ?>%
											</span>
										</div>

										<div class="d-flex justify-content-between align-items-center mt-2">
											<span>Минимальная сумма</span>

											<span>
												<?php
												foreach ($item['min'] as $c => $v) :
													echo fc($v, $c) . ' ARJ' . '<br>';
												endforeach;
												?>
											</span>
										</div>

										<div class="d-flex justify-content-between align-items-center mt-2">
											<span>Максимальная сумма</span>

											<span>
												<?php
												foreach ($item['max'] as $c => $v) :
													echo fc($v, $c) . ' ARJ' . '<br>';
												endforeach; 
												?>
											</span>
										</div>

									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

					</div>
				</div>

			<?php $is_invest = is_open("invest");
				if ($is_invest["error"]) :
					echo flash_show();
				else : ?>

                <div class="col-md-4 col-12">
				    <div class="box">
				        <div class="box-header">
					        <h4 class="box-title">Покупка токена ARJ</h4>
				        </div>

				        <div class="box-body">

						<?php echo flash_show('invest_qr', '', 'invest_qr.php'); ?>
						<?php echo flash_show('invest', '', 'notification.php'); ?>
							<form method="post" action="/pay/index.php" id="formInvestPay">
								<?php echo form_init(); ?>


								<div class="form-group">
									<label>Выберите систему</label>
									<select class="form-control select2 w-p100" name="system" required>
										<option>- Выберите систему -</option>
										<?php foreach (get_payment_system('invest') as $item) : ?>
											<?php if ( escape($item['value']) == 'TRON_TRC20' ) : ?>
												<option value="<?= escape($item['value']); ?>">USDT TRC20</option>
											<?php elseif ( escape($item['value']) == 'BinanceCoin' ) : ?>
												<option value="<?= escape($item['value']); ?>">ARJ</option>
											<?php endif; ?>
										<?php endforeach; ?>
									</select>
								</div>

								<!-- <?php foreach (get_payment_system('invest') as $item) : ?>
										<input type="text" name="system" value="<?= escape($item['value']); ?>">
								<?php endforeach; ?> -->

								<input type="text" name="system" value="TRON_TRC20" hidden>

								<div class="form-group">
									<label class="d-flex justify-content-between">
										<span>Сумма покупки токена</span>
										<span>USDT TRC20</span>
									</label>
									<input type="text" name="summa"
											value="<?php echo escape(post('summa')); ?>"
											placeholder="<?php echo T(/* ### visual-edit-5f9835c4588de5.57035858 ### */"Введите сумму"/* ### visual-edit-5f9835c4588de5.57035858 ### */, 'visual-edit-5f9835c4588de5.57035858'); ?>"
											class="form-control"
											required>
								</div>

								<div class="col-lg-12 col-sm-6">
									<input
										type="submit"
										value="Пополнить"
										class="btn btn-primary mt-2"
										style="width: 100%;"
										id="payment_button"
										data-toggle="modal" data-target="#modalInvest">
								</div>

								<input type="hidden" name="reinvest" value="1">

							</form>

							<!-- Modal Invest -->
							<div class="modal fade" id="modalInvest" tabindex="-1" aria-labelledby="modalInvestLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-invest">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalInvestLabel">Покупка токена ARJ</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="html_response"></div>
									</div>
								</div>
							</div>
							<!-- Modal Invest End -->

				        </div>
				    </div>
			    </div>

                <?php endif; ?>

                <div class="col-md-8 col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">						
                            <h4 class="box-title">История</h4>
                        </div>
                        <div class="box-body p-15">						
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
											<th><?php echo T(/* ### visual-edit-5f9835c432e397.01604344 ### */'Дата'/* ### visual-edit-5f9835c432e397.01604344 ### */, 'visual-edit-5f9835c432e397.01604344'); ?></th>
											<th><?php echo T('Сумма') . ' (ARJ)'; ?></th>
											<th><?php echo T(/* ### visual-edit-5f9835c432e490.55595189 ### */'Система'/* ### visual-edit-5f9835c432e490.55595189 ### */, 'visual-edit-5f9835c432e490.55595189'); ?></th>
											<th><?php echo T(/* ### visual-edit-5f9835c432e586.25386263 ### */'Статус'/* ### visual-edit-5f9835c432e586.25386263 ### */, 'visual-edit-5f9835c432e586.25386263'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
										$list = login_list_invest($login);
										if ($list) {
											foreach ($list as $item) { ?>
												<tr>
													<td><?php echo format_date($item['date']); ?></td>
													<td><?php echo format_currency($item['summa'], $val); ?></td>
													<td><?php echo escape($item['system']); ?></td>
													<td><?php echo $item['status'] ? T('Успешно') : T('Ожидает'); ?></td>
												</tr>
											<?php }
										} else { ?>
											<tr>
											<td colspan="4" class="danger" align="center"><?php echo T(/* ### visual-edit-5f9835c432e698.30145323 ### */'Записей не обнаружено'/* ### visual-edit-5f9835c432e698.30145323 ### */, 'visual-edit-5f9835c432e698.30145323'); ?></td>
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
X
<?php require_once(THEME_ROOT . "/blocks/dashboard/footer.php"); ?>

<script>
    var tron_trc20 = false;

	tron_trc20_modal();

    $('#payment_button').on('click', function () {
        if (tron_trc20) {

			const csrf = $('input[name="csrf"]').val();
			const summa = $('input[name="summa"]').val();
			const paysystem = $('select[name="paysystem"] option:selected').val();
			const system = $('select[name="system"] option:selected').val();
			
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '/pay/tron_trc20/index.php',
                // data: 'csrf=' + $('input[name="csrf"]').val() + '&from=%2Fuser%2Finvest%2F&summa=' + $('input[name="summa"]').val() + '&paysystem=' + $('input[name="paysystem"]').val() + '&system=TRON_TRC20&submit=',
				data: {
					csrf,
					from: '%2Fuser%2Finvest%2F',
					summa,
					paysystem,
					system: system
				},
                success: function (response) {
                    if (response.status) {
                        $('#html_response').html(response.html);
                    } else {
                        if (response.message) {
                            $('#html_response').html(response.message);
                        } else {
                            $('#html_response').html('Error!');
                        }
                    }
                }
            });
        }
    });

    function tron_trc20_modal() {
        var payment_button = $('#payment_button');

        if ($('input[name="system"]').val() == 'TRON_TRC20') {
			console.log('1');
            payment_button.prop('type', 'button');
            payment_button.attr('data-bs-toggle', 'modal');
            payment_button.attr('data-bs-target', '#payusdt');

            tron_trc20 = true;
        } else {
            payment_button.removeAttr('data-bs-toggle');
            payment_button.removeAttr('data-bs-target');
            payment_button.prop('type', 'submit');

            tron_trc20 = false;
        }
    }

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