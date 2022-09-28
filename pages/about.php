<?php require_once(THEME_ROOT . '/blocks/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/top.php'); ?>

    <div class="section-full-width section-light" style="background-color:#f7f7f7;height:auto; padding:0 20px 50px; " id="section-1" >
        <div class="container">
            <div class="section-boxed" style="color:#777777; text-align:center;">
                <img src="/theme/demo/assets/common/imgs/about-us-icon.svg" width="96" style="margin:20px auto 0;display:block;">
                <div style="clear:both;"></div>

                <h3><?php echo T(/* ### visual-edit-5f9835c36dbb62.35620499 ### */'Мы продолжаем стремиться к совершенству'/* ### visual-edit-5f9835c36dbb62.35620499 ### */, 'visual-edit-5f9835c36dbb62.35620499'); ?></h3>
                <p>
                    <?php echo T(/* ### visual-edit-5f9835c36dbdb9.30193008 ### */escape($name_project).' инвестиционный сервис, который дает возможность инвесторам зарабатывать, использую знания и опыт компании, а нам — получать дополнительную прибыль за управление средствами инвесторов'/* ### visual-edit-5f9835c36dbdb9.30193008 ### */, 'visual-edit-5f9835c36dbdb9.30193008'); ?>
                </p>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
    <div class="container">
        <div style="min-height:300px;border-top:1px solid rgba(0,0,0,0.05); text-align:center;">
            <div class="main">
                <div class="box box-last-child">
                    <h2 class="center">
                        <?php echo T(/* ### visual-edit-5f9835c36dc128.11174578 ### */'Быстро, надежно и выгодно'/* ### visual-edit-5f9835c36dc128.11174578 ### */, 'visual-edit-5f9835c36dc128.11174578'); ?>
                    </h2>
                    <hr style="margin-bottom:30px;">
                    <div class="col-md-12 ">
                        <div class="col30 left col-md-4">
                            <div class="icon"><img src="/theme/demo/assets/common/imgs/icon18.svg" width="40" style="margin:0px;"></div>
                            <h3 class="center" style="font-size:16px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dc2a1.51312330 ### */'Выгодные тарифы'/* ### visual-edit-5f9835c36dc2a1.51312330 ### */, 'visual-edit-5f9835c36dc2a1.51312330'); ?>
                            </h3>
                            <p class="center" style="font-size:13px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dc415.30710451 ### */'В зависимости от суммы инвестирования, вы можете заработать от '.(float)get_min_percent_by_plans().'% до '.(float)get_max_percent_by_plans().'% прибыли.'/* ### visual-edit-5f9835c36dc415.30710451 ### */, 'visual-edit-5f9835c36dc415.30710451'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dc681.59167170 ### */'Минимальная сумма к пополенению '.format_currency($d_min, $val).' '.html($valu).'.'/* ### visual-edit-5f9835c36dc681.59167170 ### */, 'visual-edit-5f9835c36dc681.59167170'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dc7d8.58916640 ### */'Количество депозитов не ограниченно.'/* ### visual-edit-5f9835c36dc7d8.58916640 ### */, 'visual-edit-5f9835c36dc7d8.58916640'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dc911.65061447 ### */'Проценты будут накапливаться автоматически на Ваш баланс.'/* ### visual-edit-5f9835c36dc911.65061447 ### */, 'visual-edit-5f9835c36dc911.65061447'); ?>
                            </p>
                        </div>
                        <div class="col30 left col-md-4">
                            <div class="icon"><img src="/theme/demo/assets/common/imgs/icon16.svg" width="40" style="margin:0px;"></div>
                            <h3 class="center" style="font-size:16px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dca56.27122350 ### */'Выгода от партнеров программы'/* ### visual-edit-5f9835c36dca56.27122350 ### */, 'visual-edit-5f9835c36dca56.27122350'); ?>
                            </h3>
                            <p class="center" style="font-size:13px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dcba2.79425218 ### */'Зарабатывайте не только инвестируя личные средства.'/* ### visual-edit-5f9835c36dcba2.79425218 ### */, 'visual-edit-5f9835c36dcba2.79425218'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dccf4.43651649 ### */'Также вы можете привелкать паретнеров и получать доход с их пополнений.'/* ### visual-edit-5f9835c36dccf4.43651649 ### */, 'visual-edit-5f9835c36dccf4.43651649'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dce34.89966452 ### */'Получайте с 3-х уровневой реферальной программы до '.(float)get_max_percent_by_refer_system().'% реферального вознаграждения.'/* ### visual-edit-5f9835c36dce34.89966452 ### */, 'visual-edit-5f9835c36dce34.89966452'); ?>
                            </p>
                        </div>
                        <div class="col30 right col-md-4">
                            <div class="icon"><img src="/theme/demo/assets/common/imgs/icon9.svg" width="40" style="margin:0px;"></div>
                            <h3 class="center" style="font-size:16px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dcf78.17050793 ### */'Мгновенный вывод средств'/* ### visual-edit-5f9835c36dcf78.17050793 ### */, 'visual-edit-5f9835c36dcf78.17050793'); ?>
                            </h3>
                            <p class="center" style="font-size:13px;">
                                <?php echo T(/* ### visual-edit-5f9835c36dd0e8.09300286 ### */'Мгновенные выплаты на все платежные системы - это то что любят наши инвесторы, мы не берем никаких комиссий или других скрытых платежей.'/* ### visual-edit-5f9835c36dd0e8.09300286 ### */, 'visual-edit-5f9835c36dd0e8.09300286'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dd230.76132248 ### */'Просто зайдите в раздел Выплаты вашего кабинета и запросите сумму доступную для выплаты.'/* ### visual-edit-5f9835c36dd230.76132248 ### */, 'visual-edit-5f9835c36dd230.76132248'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>


    <div class="section-full-width section-light" style="background-color:#f7f7f7;height:auto; padding: 20px 50px; " id="section-1" >
        <div class="container">
            <div class="home-plan">
                <div class="main">
                    <div class="box box-last-child col-md-12 ">
                        <div class="col50 left col-md-4">
                            <h3><?php echo T(/* ### visual-edit-5f9835c36dd379.60947856 ### */'Передовые платформы'/* ### visual-edit-5f9835c36dd379.60947856 ### */, 'visual-edit-5f9835c36dd379.60947856'); ?></h3>

                            <hr style="float:left;display:block;margin-bottom:10px;width:40px;">

                            <div style="clear:both;"></div>
                            <p>
                                <?php echo T(/* ### visual-edit-5f9835c36dd4d6.68098149 ### */'Мы стремся предоставить нашим клиентам уникальную площадку для инвестиций.'/* ### visual-edit-5f9835c36dd4d6.68098149 ### */, 'visual-edit-5f9835c36dd4d6.68098149'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36dd612.02712938 ### */'Нам удалось это сделать благодря поддержке со стороны инвесторов, надежных парнеров и опыту сотрудников компании.'/* ### visual-edit-5f9835c36dd612.02712938 ### */, 'visual-edit-5f9835c36dd612.02712938'); ?>
                            </p>
                            <a target="blank" href="/faq">
                                <?php echo T(/* ### visual-edit-5f9835c36dd758.92645680 ### */'FAQ'/* ### visual-edit-5f9835c36dd758.92645680 ### */, 'visual-edit-5f9835c36dd758.92645680'); ?><i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                        <div class="col50 right col-md-4">
                            <h3><?php echo T(/* ### visual-edit-5f9835c36dd917.55871346 ### */'Обязательства и цели'/* ### visual-edit-5f9835c36dd917.55871346 ### */, 'visual-edit-5f9835c36dd917.55871346'); ?></h3>

                            <hr style="float:left;display:block;margin-bottom:10px;width:40px;background:#24AA7D;">

                            <div style="clear:both;"></div>
                            <p>
                                <?php echo T(/* ### visual-edit-5f9835c36ddc85.04217175 ### */'Как и в любой другой финансовой организации, у нас есть правила, по которым мы работаем для достижения поставленных целей.'/* ### visual-edit-5f9835c36ddc85.04217175 ### */, 'visual-edit-5f9835c36ddc85.04217175'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36ddfe5.40516238 ### */'Поэтому, для эффекитивной работы в данной сфере, мы используем стандартизированные и проверенные алгоритмы, все передаваемые данные защищены.'/* ### visual-edit-5f9835c36ddfe5.40516238 ### */, 'visual-edit-5f9835c36ddfe5.40516238'); ?>
                                <?php echo T(/* ### visual-edit-5f9835c36de124.11848031 ### */'Мы всегда поддерживаеми обновляем современное компьюторное оборудованием, чтобы работать стабильного и помогать инвестороам полчуать стабильный доход.'/* ### visual-edit-5f9835c36de124.11848031 ### */, 'visual-edit-5f9835c36de124.11848031'); ?>
                            </p>
                            <a target="blank" href="/faq">
                                <?php echo T(/* ### visual-edit-5f9835c36dd758.92645680 ### */'FAQ'/* ### visual-edit-5f9835c36dd758.92645680 ### */, 'visual-edit-5f9835c36dd758.92645680'); ?><i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                        <div class="col50 right col-md-4">
                            <h3><?php echo T(/* ### visual-edit-5f9835c36de3b4.89378191 ### */'Расширяем наши технические возможности'/* ### visual-edit-5f9835c36de3b4.89378191 ### */, 'visual-edit-5f9835c36de3b4.89378191'); ?></h3>

                            <hr style="float:left;display:block;margin-bottom:10px;width:40px;background:#24AA7D;">

                            <div style="clear:both;"></div>
                            <p>
                                <?php echo T(/* ### visual-edit-5f9835c36de500.17466651 ### */'В '.escape($name_project).', мы стараемся оказывать лучшие услуги нашим клиентам.'/* ### visual-edit-5f9835c36de500.17466651 ### */, 'visual-edit-5f9835c36de500.17466651'); ?>
                            </p>
                            <a target="blank" href="/faq">
                                <?php echo T(/* ### visual-edit-5f9835c36dd758.92645680 ### */'FAQ'/* ### visual-edit-5f9835c36dd758.92645680 ### */, 'visual-edit-5f9835c36dd758.92645680'); ?><i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>

        <div class="container">
    <div class="home-plan" style="min-height:200px;">
            <div class="main">
                <div class="box box-last-child about-number col-md-10 col-md-offset-1" style="padding:30px 0; text-align:center;">
                    <div class="col25 left center  col-md-3" >
                        <img src="/theme/demo/assets/common/imgs/icon13.svg" width="32" style="margin-top:20px;">
                        <h4>
                            <?php echo count_user(); ?>
                            <span><?php echo T(/* ### visual-edit-5f9835c36de7a7.21544173 ### */'Пользователи'/* ### visual-edit-5f9835c36de7a7.21544173 ### */, 'visual-edit-5f9835c36de7a7.21544173'); ?></span>
                        </h4>
                    </div>
                    <div class="col25 left center col-md-3">
                        <img src="/theme/demo/assets/common/imgs/icon2.svg" width="32" style="margin-top:20px;">
                        <h4>
                            <?php echo balans_invest().' '.html($valu); ?>
                            <span><?php echo T(/* ### visual-edit-5f9835c36deb27.67590193 ### */'Пополнено'/* ### visual-edit-5f9835c36deb27.67590193 ### */, 'visual-edit-5f9835c36deb27.67590193'); ?></span>
                        </h4>
                    </div>
                    <div class="col25 left center col-md-3">
                        <img src="/theme/demo/assets/common/imgs/icon1.svg" width="32" style="margin-top:20px;">
                        <h4>
                            <?php echo balans_payment().' '.html($valu); ?>
                            <span><?php echo T(/* ### visual-edit-5f9835c36deca4.66849072 ### */'Выплаты'/* ### visual-edit-5f9835c36deca4.66849072 ### */, 'visual-edit-5f9835c36deca4.66849072'); ?></span>
                        </h4>
                    </div>
                    <div class="col25 right center col-md-3">
                        <img src="/theme/demo/assets/common/imgs/icon18.svg" width="32" style="margin-top:20px;">
                        <?php if($work_time <= 0) { ?>
                            <h4><?php echo escape($start_data); ?><span><?php echo T(/* ### visual-edit-5f9835c36dee57.25504840 ### */'Дата старта'/* ### visual-edit-5f9835c36dee57.25504840 ### */, 'visual-edit-5f9835c36dee57.25504840'); ?></span></h4>
                        <?php } else { ?>
                            <h4><?php echo escape($work_time).' '.val_day($work_time); ?><span><?php echo T(/* ### visual-edit-5f9835c36defd3.30152555 ### */'Дней онлайн'/* ### visual-edit-5f9835c36defd3.30152555 ### */, 'visual-edit-5f9835c36defd3.30152555'); ?></span></h4>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    </div>
<?php
    require_once(THEME_ROOT."/blocks/footer.php");
?>
