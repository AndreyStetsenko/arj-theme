<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="main" style="text-align:center;" >
                <h3><?php echo T(/* ### visual-edit-5f9835c3ee1467.49875698 ### */'Связаться с нами'/* ### visual-edit-5f9835c3ee1467.49875698 ### */, 'visual-edit-5f9835c3ee1467.49875698'); ?></h3>
                <p>
                    <?php echo T(/* ### visual-edit-5f9835c3ee15c3.68719823 ### */'Есть вопросы по условиям сотрудничества, предложения или пожелания?'/* ### visual-edit-5f9835c3ee15c3.68719823 ### */, 'visual-edit-5f9835c3ee15c3.68719823'); ?>
                    <?php echo T(/* ### visual-edit-5f9835c3ee1687.98666627 ### */'Пожалуйста, заполните форму, указав данные для обратной связи. Мы гарантируем, что все обращения будут рассмотрены.'/* ### visual-edit-5f9835c3ee1687.98666627 ### */, 'visual-edit-5f9835c3ee1687.98666627'); ?>
                </p>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo T(/* ### visual-edit-5f9835c3ee1726.51346707 ### */'Напишите нам'/* ### visual-edit-5f9835c3ee1726.51346707 ### */, 'visual-edit-5f9835c3ee1726.51346707'); ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/handlers/support.php">
                                <?php echo flash_show('support'); ?>
                                <?php echo form_init(); ?>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input
                                            type="text" name="login"
                                            class="form-control"
                                            placeholder="<?php echo T(/* ### visual-edit-5f9835c3ee17f7.44972652 ### */'Логин'/* ### visual-edit-5f9835c3ee17f7.44972652 ### */, 'visual-edit-5f9835c3ee17f7.44972652'); ?>"
                                            value="<?php echo escape(post('login')); ?>"
                                            required autofocus>
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input
                                            type="email" name="email"
                                            class="form-control"
                                            placeholder="<?php echo T(/* ### visual-edit-5f9835c3ee18d7.55378712 ### */'E-mail'/* ### visual-edit-5f9835c3ee18d7.55378712 ### */, 'visual-edit-5f9835c3ee18d7.55378712'); ?>"
                                            value="<?php echo escape(post('email')); ?>"
                                            required>
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </span>
                                    <textarea
                                            name="message"
                                            class="form-control"
                                            cols="50" rows="5"
                                            placeholder="<?php echo T(/* ### visual-edit-5f9835c3ee19c5.51029730 ### */'Сообщение ...'/* ### visual-edit-5f9835c3ee19c5.51029730 ### */, 'visual-edit-5f9835c3ee19c5.51029730'); ?>"
                                            required><?php echo escape(post('message')); ?></textarea>
                                </div>

                                <br>
                                <div id="captcha_support" style="width: 304px; margin: auto;"></div>
                                <br>

                                <input type="submit" value="<?php echo T(/* ### visual-edit-5f9835c3ee1a80.10947929 ### */'Отправить'/* ### visual-edit-5f9835c3ee1a80.10947929 ### */, 'visual-edit-5f9835c3ee1a80.10947929'); ?>" class="btn btn-default btn-md" style="width: 100%;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo T(/* ### visual-edit-5f9835c3ee1b54.55387147 ### */'Обратитесь к нам'/* ### visual-edit-5f9835c3ee1b54.55387147 ### */, 'visual-edit-5f9835c3ee1b54.55387147'); ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p style="font-size:13px;font-weight:400;">
                                <?php echo T(/* ### visual-edit-5f9835c3ee1c14.19514612 ### */'Прежде чем вы свяжитесь с нашей службой поддержки, Пожалуйста, убедитесь, что вы ознакомились с информацией, доступной на нашем сайте, особенно в разделе FAQ.'/* ### visual-edit-5f9835c3ee1c14.19514612 ### */, 'visual-edit-5f9835c3ee1c14.19514612'); ?>
                            </p>
                            <br>

                            <ul class="more-contact list-unstyled">

                                <?php foreach (get_social_links() as $key => $item) { ?>
                                    <li>
                                        <svg width="20" height="20" role="img">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bm_icon_social_<?php echo strtolower(escape($key)); ?>"></use>
                                        </svg>

                                        &nbsp;

                                        <a href="<?php echo escape($item); ?>">
                                            <?php echo escape($item); ?>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-offset-1"></div>
        </div>
    </div>
<?php
    require_once(THEME_ROOT."/blocks/footer.php");
?>