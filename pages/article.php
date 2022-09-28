<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>
<?php
    $id = (int)get('id');
    $article = get_news_by_id($id);
    $next_id = get_news_next(get('id'));
    $before_id = get_news_before(get('id'));
?>
<br><br>
<div class="container">
    <a href="/news/"><?php echo T(/* ### visual-edit-5f9835c3848588.62301710 ### */'Все новости'/* ### visual-edit-5f9835c3848588.62301710 ### */, 'visual-edit-5f9835c3848588.62301710'); ?></a><br><br>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo $article['title']; ?>
                        <div style="float: right"><?php echo bm_date($article['date']); ?> </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <center>
                        <?php if ($settings_show_img_news && $article['img']) { ?>
                            <img alt="300x200" src="<?php echo images_thumbnail_resize($article['img'], 400, 200); ?>">
                        <?php } ?>
                    </center>
                    <br>
                    <?php echo $article['text']; ?>
                </div>
            </div>

            <div>
                <?php if ($before_id) { ?>
                <a href="/article?id=<?php echo (int)$before_id; ?>"><?php echo T(/* ### visual-edit-5f9835c38486b4.60763744 ### */'Предыдущую новость'/* ### visual-edit-5f9835c38486b4.60763744 ### */, 'visual-edit-5f9835c38486b4.60763744'); ?></a>
                <?php } ?>
                <?php if ($next_id) { ?>
                <div style="float: right"><a href="/article?id=<?php echo (int)$next_id; ?>"><?php echo T(/* ### visual-edit-5f9835c3848754.05465530 ### */'Следующая новость'/* ### visual-edit-5f9835c3848754.05465530 ### */, 'visual-edit-5f9835c3848754.05465530'); ?></a></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php require_once(THEME_ROOT . "/blocks/footer.php"); ?>
