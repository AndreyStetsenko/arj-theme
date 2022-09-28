<?php require_once(THEME_ROOT . '/blocks/site/head.php'); ?>

<main class="nk-pages nk-pages-centered bg-theme">
    <div class="ath-container">
		<h4 class="text-center">
			<a href="/" class="ath-logo text-white pb-4 d-block">
				ARJ Fund
			</a>
		</h4>
        <div class="ath-body">
            <h5 class="ath-heading title">
                <?php echo T(/* ### visual-edit-5f9835c3e304f5.27606177 ### */ 'Регистрация'/* ### visual-edit-5f9835c3e304f5.27606177 ### */, 'visual-edit-5f9835c3e304f5.27606177'); ?>
            </h5>
            <?php $form = form_register(); ?>
            <form method="<?php echo $form['method']; ?>" action="<?php echo $form['action']; ?>">
				<?php echo form_init(); ?>
				<?php echo flash_show('register'); ?>

				<?php foreach ($form['fields'] as $field) { ?>
                  	<?php if ($field['name'] === 'rules') { ?>
					<div class="field-item">
						<input class="input-checkbox" id="agree-term-2" type="<?php echo $field['type']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo $field['value']; ?>"<?php echo $field['attr']; ?>>
						<label for="agree-term-2">Я согласен с правилами</label>
					</div>
					<?php } else { ?>
						<div class="field-item">
							<div class="field-wrap">
								<input name="<?php echo $field['name']; ?>" type="<?php echo $field['type']; ?>" value="<?php echo $field['value']; ?>" class="input-bordered" placeholder="<?php echo $field['title']; ?>" <?php echo $field['attr']; ?>>
							</div>
						</div>
                  	<?php } ?>
              	<?php } ?>

				<?php if ( htmlspecialchars($_COOKIE["rid"]) ) : ?>
				<div class="field-item">
					Вас пригласил: <b><?= htmlspecialchars($_COOKIE["rid"]) ?></b>
				</div>
				<?php endif; ?>

				<?php if ($settings_define_recaptcha_on_signup) { ?>
					<div id="captcha_signup" style="width: 304px; margin: auto;"></div>
				<?php } ?>

                <button class="btn btn-primary btn-block btn-md">
					<?php echo T(/* ### visual-edit-5f9835c3e30c60.80554609 ### */ 'Зарегистрироваться'/* ### visual-edit-5f9835c3e30c60.80554609 ### */, 'visual-edit-5f9835c3e30c60.80554609'); ?>
				</button>
            </form>
        </div>
        <div class="ath-note text-center tc-light">
			Уже есть аккаунт?
			<a href="/login/">
				<strong>
					<?php echo T(/* ### visual-edit-5f9835c3e30d33.77542124 ### */ 'Вход'/* ### visual-edit-5f9835c3e30d33.77542124 ### */, 'visual-edit-5f9835c3e30d33.77542124'); ?>
				</strong>
			</a>
        </div>
    </div>
</main>