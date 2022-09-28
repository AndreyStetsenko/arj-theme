<?php
// Menu JSON
// $topNavJson = file_get_contents('themes/arj/static/data/menu-top.json');
// $topNavData = json_decode($topNavJson);
?>

<body class="nk-body body-wider theme-dark mode-onepage">
    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
            <!-- Header @s -->
            <div class="header-main">
                <div class="header-container container">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <h4>
                                <a href="./" class="logo-link text-white">
                                    <img src="<?= route('static/images/logo.svg') ?>" alt="ARJ Fund">
                                </a>
                            </h4>
                        </div>
                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <!-- Menu @s -->
                        <div class="header-navbar header-navbar-s1">
                            <nav class="header-menu" id="example-menu-04">
                                <ul class="menu menu-s2 animated" data-animate="fadeInDown" data-delay=".75">

                                    <li class="menu-item"><a class="menu-link nav-link" href="/"><?php echo T(/* ### visual-edit-5f9835c36051d9.60901520 ### */'Главная'/* ### visual-edit-5f9835c36051d9.60901520 ### */, 'visual-edit-5f9835c36051d9.60901520'); ?></a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#ico"><?php echo T(/* ### visual-edit-5f9835c36052b6.51512642 ### */'О нас'/* ### visual-edit-5f9835c36052b6.51512642 ### */, 'visual-edit-5f9835c36052b6.51512642'); ?></a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#contact"><?php echo 'FAQ' ?></a></li>
                                    
                                    <!-- Ссылка "Кабинет" для авторизованных юзеров -->
                                    <?php if (auth_is_login()) : ?>
                                    <li class="menu-item has-sub">
                                        <a class="menu-link nav-link menu-toggle" href="#">Кабинет</a>
                                        <ul class="menu-sub menu-drop">
                                    
                                            <li>
                                                <b><a href="/user/">
                                                    <span class="mb-2 d-block"><?php echo escape($login);?></span>
                                                    <?php echo T(/* ### visual-edit-5f9835c36050e5.63734581 ### */'Баланс'/* ### visual-edit-5f9835c36050e5.63734581 ### */, 'visual-edit-5f9835c36050e5.63734581'); ?>: <?php echo format_currency(login_sum_balans($login), $val).' '.html($valu); ?>
                                                </a></b>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="/user/settings">Настройки</a></li>
                                            <li><a href="/user/invest">Покупка</a></li>
                                            <li><a href="/user/deposit">Стейкинг</a></li>
                                            <li><a href="/user/payment">Кошелёк</a></li>
                                            <li><a href="/user/operations">Операции</a></li>
                                            <li><a href="/user/ref">Рефералы</a></li>
                                            <li><a href="https://t.me/ArjFund" target="_blank">Поддержка</a></li>
                                            <?php if (auth_get_adg_link()) : ?>
                                                <li><a style="color: red;" href="/adg.php" target="_blank">Админ панель<br></a></li>
                                            <?php endif; ?>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a href="/exit/">Выход</a></li>

                                        </ul>
                                    </li>
                                    <?php endif ?>
                                </ul>

                                <!-- Авторизация / Регистрация -->
                                <?php if (!auth_is_login()) : ?>
                                <ul class="menu-btns animated" data-animate="fadeInDown" data-delay=".85">
                                    <li>
                                        <a href="/login/" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme btn-round">
                                            <span><?php echo T(/* ### visual-edit-5f9835c3605899.54644110 ### */'Войти'/* ### visual-edit-5f9835c3605899.54644110 ### */, 'visual-edit-5f9835c3605899.54644110'); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/signup/" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-theme btn-round">
                                            <span><?php echo T(/* ### visual-edit-5f9835c3605989.53984623 ### */'Регистрация'/* ### visual-edit-5f9835c3605989.53984623 ### */, 'visual-edit-5f9835c3605989.53984623'); ?></span>
                                        </a>
                                    </li>
                                </ul>
                                <?php endif; ?>

                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>
                </div>
            </div><!-- .header-main @e -->
        </header>