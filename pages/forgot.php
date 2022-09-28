<?php require_once(THEME_ROOT . '/blocks/site/head.php'); ?>

<main class="nk-pages nk-pages-centered bg-theme">
    <div class="ath-container">
        <div class="ath-header text-center">
            <h4>
				<a href="/" class="ath-logo text-white">
                    <img src="<?= route('static/images/logo.svg') ?>" alt="ARJ Fund">
				</a>
			</h4>
        </div>
        <div class="ath-body">
            <h5 class="ath-heading title">
                <?php echo T(/* ### visual-edit-5f9835c3939188.02247592 ### */'Восстановление пароля'/* ### visual-edit-5f9835c3939188.02247592 ### */, 'visual-edit-5f9835c3939188.02247592'); ?>
            </h5>
            <?php echo flash_show('forgot'); ?>
            <form method="post" action="/handlers/forgot.php">
                <?php echo form_init(); ?>
                <div class="field-item">
                    <div class="field-wrap">
                        <input
                                    name="email"
                                    type="text"
                                    value="<?php echo  escape(post('email')); ?>"
                                    class="input-bordered"
                                    placeholder="<?php echo T(/* ### visual-edit-5f9835c3939297.86586053 ### */'Введите Ваш E-mail'/* ### visual-edit-5f9835c3939297.86586053 ### */, 'visual-edit-5f9835c3939297.86586053'); ?>"
                                    required autofocus>
                    </div>
                    <div class="field-wrap mt-4">
                        <div id="captcha_forgot" style="width: 304px; margin: auto;"></div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-md"><?php echo T(/* ### visual-edit-5f9835c3939592.44845756 ### */'Продолжить'/* ### visual-edit-5f9835c3939592.44845756 ### */, 'visual-edit-5f9835c3939592.44845756'); ?></button>
            </form>
        </div>
        <div class="ath-note text-center tc-light"> Вспомнили пароль? <a href="/login/"> <strong>Войти</strong></a>
        </div>
    </div>
</main>