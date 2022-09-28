<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="head-page hw-bg-page">
                    <div class="main">
                        <h3><?php echo T(/* ### visual-edit-5f9835c3dd3d26.27444430 ### */"Правила системы"/* ### visual-edit-5f9835c3dd3d26.27444430 ### */, 'visual-edit-5f9835c3dd3d26.27444430'); ?></h3>
                    </div>
                </div>
                <div class="main">
                    <div class="box box-last-child faq">
                        <br><br>
                        <?php echo T(/* ### visual-edit-5f9835c3dd4094.78042768 ### */'Пожалуйста, прочитайте следующие правила тщательно перед регистрацией:'/* ### visual-edit-5f9835c3dd4094.78042768 ### */, 'visual-edit-5f9835c3dd4094.78042768'); ?>
                        <br><br>
                        <strong><?php echo escape($name_project); ?></strong>
                        <?php echo T(/* ### visual-edit-5f9835c3dd4147.19645413 ### */'- финансовая система, основанная на принципе распределения денежного потока.'/* ### visual-edit-5f9835c3dd4147.19645413 ### */, 'visual-edit-5f9835c3dd4147.19645413'); ?>
                        <?php echo T(/* ### visual-edit-5f9835c3dd41e4.71358596 ### */'Средства участников вложивших позже, распределяются между участниками, вложившими раньше. '/* ### visual-edit-5f9835c3dd41e4.71358596 ### */, 'visual-edit-5f9835c3dd41e4.71358596'); ?>

                        <?php foreach (get_content_rules() as $title => $item) { ?>
                            <br><br>
                            <h4><?php echo escape(T($title)); ?></h4>
                            <br>
                            <ul class="list-unstyled">
                                <?php foreach ($item as $rule) { ?>
                                    <li>
                                        <?php echo T(/* ### visual-edit-5f9835c3dd4286.60497340 ### */html($rule)/* ### visual-edit-5f9835c3dd4286.60497340 ### */, 'visual-edit-5f9835c3dd4286.60497340'); ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once(THEME_ROOT."/blocks/footer.php");
?>