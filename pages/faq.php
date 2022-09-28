<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>
<br><br>
<div class="container">
    <div class="row">
<div class="main">
    <h3><?php echo T(/* ### visual-edit-5f9835c38d0372.06779104 ### */'Часто задаваемые вопросы'/* ### visual-edit-5f9835c38d0372.06779104 ### */, 'visual-edit-5f9835c38d0372.06779104'); ?></h3>
</div>

<div class="panel-group" id="accordion">

    <?php $i = 1;
    $fist_item = true;
    foreach (get_content_faq() as $index => $value) { ?>
        <div class="panel panel-default">
            <div class="panel-heading" style="cursor:pointer;">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" style="text-decoration:none; display:block;" href="#collapse<?php echo (int)$i; ?>">
                        <?php echo T(/* ### visual-edit-5f9835c38d0480.22151222 ### */html($index)/* ### visual-edit-5f9835c38d0480.22151222 ### */, 'visual-edit-5f9835c38d0480.22151222'); ?>
                    </a>
                </h4>
            </div>
            <div id="collapse<?php echo (int)$i; ?>" class="panel-collapse collapse <?php if ($fist_item) { echo 'in'; $fist_item = false; } ?>">
                <div class="panel-body">
                    <?php foreach ($value as $question => $answer) { ?>
                        <b>
                            <i class="fa fa-caret-right"></i>
                            <?php echo T(/* ### visual-edit-5f9835c38d0521.96803684 ### */html($question)/* ### visual-edit-5f9835c38d0521.96803684 ### */, 'visual-edit-5f9835c38d0521.96803684'); ?>
                        </b>
                        <p>
                            <?php echo T(/* ### visual-edit-5f9835c38d05c7.45754861 ### */html($answer)/* ### visual-edit-5f9835c38d05c7.45754861 ### */, 'visual-edit-5f9835c38d05c7.45754861'); ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php $i++;
    } ?>

</div>
    </div>
</div>
<?php
require_once(THEME_ROOT . "/blocks/footer.php");
?>
