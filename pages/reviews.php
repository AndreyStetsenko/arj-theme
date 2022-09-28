<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

    <br><br>

    <div class="container">
        <div class="row">

            <div class="main" style="text-align:center;">
                <h3><?php echo T(/* ### visual-edit-5f9835c3d0a3a8.67777749 ### */"Отзывы"/* ### visual-edit-5f9835c3d0a3a8.67777749 ### */, 'visual-edit-5f9835c3d0a3a8.67777749'); ?></h3>
            </div>

            <?php if(!auth_is_login()) { ?>
                <div style="text-align:center;">
                    <p style="color:#f00;">
                        <?php echo T(/* ### visual-edit-5f9835c3d0a624.14765288 ### */'Для добавления отзыва необходимо авторизоваться!'/* ### visual-edit-5f9835c3d0a624.14765288 ### */, 'visual-edit-5f9835c3d0a624.14765288'); ?>
                    </p>
                </div>
            <?php } else { ?>
                <div class="col-sm-12 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo T(/* ### visual-edit-5f9835c3d0a700.58414059 ### */'Оставить отзыв'/* ### visual-edit-5f9835c3d0a700.58414059 ### */, 'visual-edit-5f9835c3d0a700.58414059'); ?></h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action="/handlers/reviews.php" accept-charset="utf-8" enctype="multipart/form-data">
                                <?php echo flash_show('reviews'); ?>
                                <?php echo form_init(); ?>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <textarea
                                            name="text"
                                            class="form-control"
                                            placeholder="<?php echo T(/* ### visual-edit-5f9835c3d0a7d0.30867989 ### */'Введите отзыв ...'/* ### visual-edit-5f9835c3d0a7d0.30867989 ### */, 'visual-edit-5f9835c3d0a7d0.30867989'); ?>"
                                            cols="50"
                                            rows="10"
                                            required
                                            autofocus></textarea>
                                </div>
                                <br>

                                <?php if($settings_show_img_reviews) { ?>
                                    <div class="input-group">
                                        <input type="file" name="img" class="form-control">
                                        <span>
                                            <p class="bg-warning">
                                                <?php echo T(/* ### visual-edit-5f9835c3d0a894.18775001 ### */'доступные форматы изображений'/* ### visual-edit-5f9835c3d0a894.18775001 ### */, 'visual-edit-5f9835c3d0a894.18775001'); ?> jpg, jpeg, png<br>
                                                <?php echo T(/* ### visual-edit-5f9835c3d0a942.46354339 ### */'максимальный размер файла'/* ### visual-edit-5f9835c3d0a942.46354339 ### */, 'visual-edit-5f9835c3d0a942.46354339'); ?>, 2 Мб.
                                            </p>
                                        </span>
                                    </div>
                                    <br>
                                <?php } ?>
                                <input type="submit" value="<?php echo T(/* ### visual-edit-5f9835c3d0a9e0.15192946 ### */'Отправить'/* ### visual-edit-5f9835c3d0a9e0.15192946 ### */, 'visual-edit-5f9835c3d0a9e0.15192946'); ?>" class="btn btn-default btn-md" style="width: 100%;">
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="container">
                <div class="row">
                    <?php foreach (pagination(get_reviews_confirm(), $settings_records_per_page) as $item) { ?>
                        <div class="col-sm-12 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <?php echo T(/* ### visual-edit-5f9835c3d0aab2.51306271 ### */'Логин:'/* ### visual-edit-5f9835c3d0aab2.51306271 ### */, 'visual-edit-5f9835c3d0aab2.51306271'); ?>
                                        <?php echo escape($item["login"]); ?>
                                    </h3>
                                </div>
                                <?php $img_check = $settings_show_img_reviews && $item['img']; ?>
                                <div class="panel-body" style="<?php if ($img_check) { echo 'min-height: 170px;'; } ?> position: relative;">
                                    <p <?php if ($img_check) { echo 'style="padding-left: 160px;"'; } ?>>
                                        <?php echo escape($item["reviews"]); ?>
                                    </p>
                                    <?php if ($img_check) { ?>
                                        <img style="position: absolute; left: 10px; top: 10px;" alt="150x150" width="150px" height="150px" src="<?php echo images_thumbnail_resize($item["img"], 150, 150); ?>">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="container">
                    <center>
                        <?php pagination_render(); ?>
                    </center>
                </div>
            </div>
        </div>
    </div>

<?php
require_once(THEME_ROOT."/blocks/footer.php");
?>