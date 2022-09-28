<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>
<?php $list = login_list_depozit($login); ?>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
            Стейкинг
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/user/"><i class="fa fa-dashboard"></i> Главная</a></li>
        		<li class="breadcrumb-item active">Стейкинг</li>
		  	</ol>
		</div> 
		
		<!-- Main content -->
		<section class="content">

            <div class="row">
				
				<div class="col-12">
					<div class="row">

		  			<?php foreach (get_plans() as $item) : ?>
						<?php $statusPlan = ''; ?>
						<?php if ($list) : ?>
							<?php foreach ($list as $elem) {
								// var_dump($elem);
								if ((json_decode($elem['plan'])->id == $item['id']) && (json_decode($elem['plan'])->return == 1)) {
									$statusPlan = 'active';
								}
							} ?>
						<?php endif; ?>

						<div class="col-md-6 col-lg-3 col-12">
							<div class="box box-inverse box-danger pull-up bg-hexagons-dark p-relative">
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

			<?php if (is_open('deposit')['error']) :
                        echo flash_show();
                    else : ?>

                <div class="col-md-4 col-12">
				    <div class="box">
				        <div class="box-header">
					        <h4 class="box-title">Инвестировать</h4>
				        </div>

				        <div class="box-body">

							<?php echo flash_show('deposit'); ?>
							<form method="post" action="/handlers/user/deposit.php">
								<?php echo form_init(); ?>

								<?php if ($settings_define_show_get_plans) : ?>
								<div class="form-group">
									<label>Выберите План</label>
									<select class="form-control select2 w-p100" name="plan" required>
										<option>- <?php echo T(/* ### visual-edit-5f9835c4073b76.73859276 ### */'Выберите План'/* ### visual-edit-5f9835c4073b76.73859276 ### */, 'visual-edit-5f9835c4073b76.73859276'); ?> -</option>
										<?php foreach (get_plans() as $item) { ?>
										<option
											value="<?php echo (int) $item["id"]; ?>"
											<?php if (escape(post('plan')) == $item['id']) {
												echo 'selected';
											} ?>>

											<?php echo translate_dinamic(escape($item["description"])); ?>
										</option>
										<?php } ?>
									</select>
								</div>
								<?php endif; ?>

								<?php foreach (get_payment_system('invest') as $item) { ?>
									<?php if ( escape($item['value']) == 'TRON_TRC20' ) : ?>
										<input type="text" name="system" value="<?php echo escape($item['value']); ?>" hidden>
									<?php endif; ?>
								<?php } ?>

								<div class="form-group">
									<label>Сумма для стейкинга ARJ</label>
									<input type="text" name="amount"
											value="<?php echo escape(post('amount')); ?>"
											placeholder="<?php echo T(/* ### visual-edit-5f9835c4588de5.57035858 ### */"Введите сумму"/* ### visual-edit-5f9835c4588de5.57035858 ### */, 'visual-edit-5f9835c4588de5.57035858'); ?>"
											class="form-control"
											required>
								</div>

								<div class="col-lg-12 col-sm-6">
									<input
										type="submit"
										value="Инвестировать"
										class="btn btn-primary mt-2"
										style="width: 100%;">
								</div>

								<input type="hidden" name="reinvest" value="1">
							</form>

				        </div>
				    </div>
			    </div>

                <?php endif; ?>

                <div class="col-md-8 col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between align-items-center">						
                            <h4 class="box-title">История стейкинга</h4>
                        </div>
                        <div class="box-body p-15">						
                            <div class="table-responsive">
                                <table id="tickets" class="table mt-0 table-hover no-wrap table-borderless" data-page-size="10">
                                    <thead>
                                        <tr>
											<th><?= T(/* ### visual-edit-5f9835c4074205.39968989 ### */'Дата'/* ### visual-edit-5f9835c4074205.39968989 ### */, 'visual-edit-5f9835c4074205.39968989'); ?></th>
											<th><?= T('Сумма') . ' (ARJ)'; ?></th>
											<th><?= T(/* ### visual-edit-5f9835c4074338.81271217 ### */'Начислено/Всего'/* ### visual-edit-5f9835c4074338.81271217 ### */, 'visual-edit-5f9835c4074338.81271217'); ?></th>
											<th><?= T('Прибыль') . ' (ARJ)'; ?></th>
											<th><?= T(/* ### visual-edit-5f9835c4074521.84939112 ### */'Статус'/* ### visual-edit-5f9835c4074521.84939112 ### */, 'visual-edit-5f9835c4074521.84939112'); ?></th>
											<?php if ($depozit_close) : ?>
												<th><?= T(/* ### visual-edit-5f9835c4074785.08720449 ### */'Возврат'/* ### visual-edit-5f9835c4074785.08720449 ### */, 'visual-edit-5f9835c4074785.08720449'); ?></th>
											<?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
										if ($list) {
											foreach ($list as $item) { ?>
											<tr>
												<td><?php echo format_date($item['date_start']); ?></td>
												<td><?php echo format_currency($item['summa'], $val); ?></td>
												<td><?php echo (int) count_dep($item['id']) . '/' . (int) count_dep_all($item['id']); ?></td>
												<td><?php echo format_currency(summa_dep($item['id']), $val); ?></td>
												<td><?php echo $item['status'] ? T('Закрыт') : T('Работает'); ?></td>
												<?php if ($depozit_close) { ?>
													<td>
														<?php if (!$item['status']) { ?>
														<form method="post" action="/handlers/user/deposit_close.php">
															<?php echo form_init(); ?>
															<input type="hidden" name="depozit_close" value="1">
															<input type="hidden" name="id" value="<?php echo (int) $item['id']; ?>">
															<input type="submit" value="<?php echo T(/* ### visual-edit-5f9835c4074890.01200294 ### */"Закрыть"/* ### visual-edit-5f9835c4074890.01200294 ### */, 'visual-edit-5f9835c4074890.01200294'); ?>">
														</form>
														<?php } else {
															echo T('Вывод не возможен');
														} ?>
													</td>
												<?php } ?>
											</tr>
											<?php }
										} else { ?>
										<tr>
											<td colspan="<?php echo $depozit_close ? '6' : '5' ?>" class="danger" align="center"><?php echo T(/* ### visual-edit-5f9835c40749b0.87900762 ### */'Записей не обнаружено'/* ### visual-edit-5f9835c40749b0.87900762 ### */, 'visual-edit-5f9835c40749b0.87900762'); ?></td>
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
