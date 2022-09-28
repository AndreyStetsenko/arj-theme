<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

    <br><br>
    <div class="container">
        <?php foreach (pagination(get_news(), $settings_records_per_page) as $item) { ?>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $item['title']; ?>
                                <div style="float: right"><?php echo bm_date($item['date']); ?> </div>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php if ($settings_show_img_news && $item["img"]) { ?>
                                <img class="col-md-4" alt="300x200" style="width: 300px; height: 200px;" src="<?php echo images_thumbnail_resize($item["img"], 300, 200); ?>">
                            <?php } ?>
                            <p class="col-md-8" style="word-break: break-all">
                                <?php echo $item['description']; ?>
                                <a href="/article?id=<?php echo (int)$item['id']; ?>">Читать</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <center><?php pagination_render(); ?></center>
    </div>
<?php require_once(THEME_ROOT . "/blocks/footer.php"); ?>