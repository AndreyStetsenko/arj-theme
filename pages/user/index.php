<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->	  
        <div class="content-header">
            <h3>
                Панель управления
            </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-dashboard"></i> Главная</a></li>
            </ol>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xxxl-3 col-xl-4">
                    <div class="box">
                        <div class="box-body d-flex p-0">
                            <div class="flex-grow-1 px-30 pt-30 pb-30 flex-grow-1 bg-img" style="background-position: right bottom; background-size: 80% auto;">
                                <h3 class="mb-0 font-weight-700">Персональные данные</h3>
                                <p class="font-size-18 pt-2 mb-0">
                                    <?= escape_e($login) ?>
                                </p>
                                <div class="d-flex flex-column">
                                    <span class="font-size-14 mt-2">
                                        <?= escape_e(user_email($login)) ?>
                                    </span>
                                    <span class="font-size-14 mt-2">
                                        <?= escape_e(user_date($login)) ?>
                                    </span>
                                </div>
                                <a href="/user/settings/" class="btn btn-primary mt-20 d-block">
                                    Настройки
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-body d-flex p-0">
                            <div class="flex-grow-1 px-30 pt-30 pb-20 flex-grow-1 bg-img" style="background-position: right bottom; background-size: 80% auto;">
                                <div class="d-flex flex-row align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <h3 class="mb-0 font-weight-700">Поддержка</h3>
                                        <p class="font-size-18">
                                            Мы всегда рядом!
                                        </p>
                                    </div>
                                    <div class="support-list">
                                        <a href="https://t.me/ArjFund" class="support-item" target="_blank">
                                            <i class="fa-brands fa-telegram font-size-32"></i>
                                            <span class="ml-2">Telegram</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="box" style="padding-bottom: 1px">
                        <div class="box-body">
                            <div class="row justify-content-between">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="box bg-success bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                                <div class="box-body" style="height: 310px">
                                                    <div>
                                                        <i class="fa-brands fa-bitcoin text-white font-size-32"></i>
                                                        <h4 class="text-white mt-4">Мой баланс токенов</h4>
                                                    </div>
                                                    <div class="mt-150">
                                                        <h3 class="font-weight-700 text-white"><?= format_currency(login_sum_balans($login), $val).' ARJ'; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="box bg-warning bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                                <div class="box-body" style="height: 310px">
                                                    <div>
                                                        <i class="fa-solid fa-chart-line text-white font-size-32"></i>
                                                        <h4 class="text-white mt-4">Активный стейкинг</h4>
                                                    </div>
                                                    <div class="mt-150">
                                                        <h3 class="font-weight-700 text-white"><?= format_currency(login_activ_depozit($login), $val) . ' ARJ'; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="box bg-info bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                                <div class="box-body" style="height: 310px">
                                                    <div>
                                                        <i class="fa-solid fa-money-bills text-white font-size-32"></i>
                                                        <h4 class="text-white mt-4">Доход от партнёров</h4>
                                                    </div>
                                                    <div class="mt-150">
                                                        <h3 class="font-weight-700 text-white"><?= format_currency(login_refer($login), $val) . ' ARJ'; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="box bg-primary bg-brick-dark rounded30 mb-md-30 mt-30 mb-0">
                                                <div class="box-body" style="height: 310px">
                                                    <div>
                                                        <i class="fa-solid fa-wallet text-white font-size-32"></i>
                                                        <h4 class="text-white mt-4">Выведено средств</h4>
                                                    </div>
                                                    <div class="mt-150">
                                                        <h3 class="font-weight-700 text-white"><?= format_currency(login_payment($login), $val) . ' ARJ'; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Новости</h4>
                        </div>
                        <div class="box-body p-0">
                            <div class="media-list media-list-hover media-list-divided">

                            <?php if ( count(get_news(), $settings_records_per_page) > 0 ) : ?>
                                <?php foreach (pagination(get_news(), $settings_records_per_page) as $item) : ?>
                                    <div class="media media-single">
                                        <?php if ($settings_show_img_news && $item["img"]) : ?>
                                            <img class="w-80 rounded" src="<?= images_thumbnail_resize($item["img"], 300, 200); ?>" alt="<?= $item['title']; ?>">
                                        <?php endif; ?>
                                        <div class="media-body">
                                            <h6 class="mb-2"><?= $item['title']; ?></h6>
                                            <?= $item['description']; ?>
                                            <small class="text-fader d-block mt-3"><?= bm_date($item['date']); ?></small>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="px-2 py-4 text-center">
                                    Новостей пока нет.
                                    <br>
                                    Следите за обновлениями!
                                </div>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-12">
				    <div class="box">
				        <div class="box-header">
					        <h4 class="box-title">Реферальная программа</h4>
				        </div>

				        <div class="box-body">

                            <table class="table mb-15">
                                <tbody>
                                    <tr>
                                        <th>Реферальный процент</th>
                                        <td><?= get_refer_system_in_str(); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Реферальная ссылка</th>
                                        <td><?= login_get_referal_link($login); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Рефералов</th>
                                        <td><?= login_refer_count($login); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Получено от рефералов</th>
                                        <td><?= format_currency(login_refer($login), $val).' '.html($valu); ?></td>
                                    </tr>
                                </tbody>
                            </table>

					        <div class="alert alert-primary alert-dismissible fade show" role="alert">
						        <p>
                                Партнерское вознаграждение за приглашение инвесторов в компанию составляет до <?= get_max_percent_by_refer_system() ?>% от суммы инвестирования лично приглашенных Вами партнеров.
                                </p>
                                <p class="mb-0">
                                Регулярные партнерские отчисления работают на всех уровнях - <?= get_refer_system_in_str() ?>. Вам не обязательно инвестировать свои средства чтобы заработать.
                                </p>
					        </div>
				        </div>
				    </div>
			    </div> -->

                <div class="col-xl-4 col-12">
                <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= login_refer_count($login); ?></h3>

                            <p>Рефералов</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <input type="text" value="<?= login_get_referal_link($login); ?>" id="refLinkCopy" hidden>
                        <a onclick="copyToClipboard('copyRefLink')" 
                            class="small-box-footer text-center text-white"
                            style="cursor:pointer"><span id="copyRefLink"><?= login_get_referal_link($login); ?></span> <i class="fa-solid fa-copy ml-2"></i></a>
                    </div>
                </div>

                <?php $depList = login_list_depozit($login); ?>
                <?php // var_dump($depList) ?>
                <?php $planName = ''; ?>
                <?php foreach (get_plans() as $item) : ?>
                    <?php if ($depList) : ?>
                        <?php
                            $planName = end($depList)['plan_description'];
                         ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ( $planName ) : ?>
                    <div class="col-xl-4 col-12">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3 class="text-white"><?= $planName ?></h3>

                                <p class="text-white">Ваш текущий статус</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-person-circle-check"></i>
                            </div>
                            <a href="/user/deposit/" class="small-box-footer text-center text-white"><span id="copyRefLink">Повысить статус</a>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-xl-4 col-12">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3 class="text-white">Начальный</h3>

                                <p class="text-white">Ваш текущий статус</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                            </div>
                            <a href="/user/deposit/" class="small-box-footer text-center text-white"><span id="copyRefLink">Повысить статус</a>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>

<script>

    function copyToClipboard(elementId) {
        // Create a "hidden" input
        var aux = document.createElement("input");

        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById(elementId).innerHTML);

        // Append it to the body
        document.body.appendChild(aux);

        // Highlight its content
        aux.select();

        // Copy the highlighted text
        document.execCommand("copy");

        // Remove it from the body
        document.body.removeChild(aux);

    }
</script>

<?php
    require_once(THEME_ROOT . "/blocks/dashboard/footer.php");
?>

