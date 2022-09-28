<?php require_once(THEME_ROOT . '/blocks/site/head.php'); ?>

<main class="nk-pages nk-pages-centered bg-theme">
    <div class="ath-container">
        <div class="ath-header text-center">
            <h4>
				<a href="/" class="ath-logo text-white">
					ARJ Fund
				</a>
			</h4>
        </div>
        <div class="ath-body">
            <h5 class="ath-heading title">
				<?php echo T(/* ### visual-edit-5f9835c3bc63e3.20994577 ### */ 'Вход'/* ### visual-edit-5f9835c3bc63e3.20994577 ### */, 'visual-edit-5f9835c3bc63e3.20994577'); ?>
			</h5>

			<?php $form = form_login(); ?>
            <form method="<?php echo $form['method']; ?>" action="<?php echo $form['action']; ?>">
				<?php echo form_init(); ?>
				<?php echo flash_show('login'); ?>
				<?php echo flash_show('register'); ?>

				<?php foreach ($form['fields'] as $field) : ?>				
				<div class="field-item">
                    <div class="field-wrap">
						<input name="<?php echo $field['name']; ?>" type="<?php echo $field['type']; ?>" value="<?php echo $field['value']; ?>" class="input-bordered" placeholder="<?php echo $field['title']; ?>" <?php echo $field['attr']; ?>>
                    </div>
                </div>
				<?php endforeach; ?>

				<?php if ($settings_define_recaptcha_on_login) { ?>
					<div id="captcha_login" style="width: 304px; margin: auto;"></div>
				<?php } ?>

                <div class="d-flex justify-content-between align-items-center pdb-r">
					<button class="btn btn-primary btn-block btn-md">
						<?php echo T(/* ### visual-edit-5f9835c3bc63e3.20994577 ### */ 'Вход'/* ### visual-edit-5f9835c3bc63e3.20994577 ### */, 'visual-edit-5f9835c3bc63e3.20994577'); ?>
					</button>
                    <div class="forget-link fz-6">
                        <a href="/forgot/">
							<?php echo T(/* ### visual-edit-5f9835c3bc67e8.20285651 ### */ 'Забыли пароль?'/* ### visual-edit-5f9835c3bc67e8.20285651 ### */, 'visual-edit-5f9835c3bc67e8.20285651'); ?>
						</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="ath-note text-center tc-light">
			Нет аккаунта?
			<a href="/signup/">
				<strong>
					<?php echo T(/* ### visual-edit-5f9835c3bc6730.85600091 ### */ 'Регистрация'/* ### visual-edit-5f9835c3bc6730.85600091 ### */, 'visual-edit-5f9835c3bc6730.85600091'); ?>
				</strong>
			</a>
        </div>
    </div>
</main>