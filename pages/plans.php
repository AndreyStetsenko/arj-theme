<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

<br><br>
<div class="container">
    <div class="row">
        <div>
            <h3 class="block-head-plans">
                <?php echo T(/* ### visual-edit-5f9835c3c823a6.43693435 ### */'Инвестиционные предложения'/* ### visual-edit-5f9835c3c823a6.43693435 ### */, 'visual-edit-5f9835c3c823a6.43693435'); ?>
            </h3>
        </div>
      <style>
        .list-group-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
      </style>
        <?php foreach (get_plans() as $item) { ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo T(/* ### visual-edit-5f9835c3c824c3.06551554 ### */$item['description']/* ### visual-edit-5f9835c3c824c3.06551554 ### */, 'visual-edit-5f9835c3c824c3.06551554'); ?>
                    </h3>
                </div>

                <div class="panel-body">
                    <div style="width: 200px;height: 200px;background: #666666;border-radius: 50%;margin: 0 auto;color: white;font-size: 56px;text-align: center;line-height: 200px;">
                        <?php if ($item['count']) {
                            echo (float)($item['percent']*$item['count'] - !$item['return']*100);
                        } else {
                            echo (float)$item['percent'];
                        } ?>%
                    </div>
                    <br>
                    <ul class="list-group" style="margin-bottom: 0;">
                        <li class="list-group-item">
                            <?php echo T(/* ### visual-edit-5f9835c3c82583.17801169 ### */'Срок действия'/* ### visual-edit-5f9835c3c82583.17801169 ### */, 'visual-edit-5f9835c3c82583.17801169'); ?>
                            <span class="badge">
                                <?php if ($item['count']) {
                                    echo val_seconds($item['seconds']*$item['count']);
                                } else {
                                    echo val_seconds($item['seconds']);
                                } ?>
                            </span>
                        </li>
                        <li class="list-group-item">
                            Ежедневное начисление
                            <span class="badge">
                                <?php echo (float)$item['percent']; ?>%
                            </span>
                        </li>
                      <li class="list-group-item">
                          <?php echo T(/* ### visual-edit-5f9835c3c826c5.19450276 ### */'Минимальная сумма'/* ### visual-edit-5f9835c3c826c5.19450276 ### */, 'visual-edit-5f9835c3c826c5.19450276'); ?>
                        <span class="badge">
                            <?php foreach ($item['min'] as $c => $v) {
                                echo fc($v, $c) . ' ' . $c . '<br>';
                            } ?>
                        </span>
                      </li>
                      <li class="list-group-item">
                          <?php echo T(/* ### visual-edit-5f9835c3c82765.96998823 ### */'Максимальная сумма'/* ### visual-edit-5f9835c3c82765.96998823 ### */, 'visual-edit-5f9835c3c82765.96998823'); ?>
                        <span class="badge">
                            <?php foreach ($item['max'] as $c => $v) {
                                echo fc($v, $c) . ' ' . $c . '<br>';
                            } ?>
                        </span>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
    require_once(THEME_ROOT."/blocks/footer.php");
?>
