<body>
    <!-- Логотип -->
    <div style=" height:51px; margin:-20px 0 0 0; ">
        <div class="navbar navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only"><?php echo T(/* ### visual-edit-5f9835c3604da1.20501345 ### */'Открыть навигацию'/* ### visual-edit-5f9835c3604da1.20501345 ### */, 'visual-edit-5f9835c3604da1.20501345'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><?php echo escape($name_project); ?></a>
                </div>

                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(auth_is_login()){?>
                            <li>
                                <a href="/user/">
                                    <?php echo T(/* ### visual-edit-5f9835c36050e5.63734581 ### */'Баланс'/* ### visual-edit-5f9835c36050e5.63734581 ### */, 'visual-edit-5f9835c36050e5.63734581'); ?>: <?php echo format_currency(login_sum_balans($login), $val).' '.html($valu); ?>
                                </a>
                            </li>
                        <?php } ?>
                        <li><a href="/"><?php echo T(/* ### visual-edit-5f9835c36051d9.60901520 ### */'Главная'/* ### visual-edit-5f9835c36051d9.60901520 ### */, 'visual-edit-5f9835c36051d9.60901520'); ?></a></li>
                        <li><a href="/about/"><?php echo T(/* ### visual-edit-5f9835c36052b6.51512642 ### */'О нас'/* ### visual-edit-5f9835c36052b6.51512642 ### */, 'visual-edit-5f9835c36052b6.51512642'); ?></a></li>
                        <li><a href="/plans/"><?php echo T(/* ### visual-edit-5f9835c3605396.07116006 ### */'Планы'/* ### visual-edit-5f9835c3605396.07116006 ### */, 'visual-edit-5f9835c3605396.07116006'); ?></a></li>
                        <li><a href="/news/"><?php echo T(/* ### visual-edit-5f9835c3605476.10156635 ### */'Новости'/* ### visual-edit-5f9835c3605476.10156635 ### */, 'visual-edit-5f9835c3605476.10156635'); ?></a></li>
                        <li><a href="/faq/"><?php echo 'FAQ' ?></a></li>
                        <li><a href="/support/"><?php echo T(/* ### visual-edit-5f9835c3605539.78926535 ### */'Техническая поддержка'/* ### visual-edit-5f9835c3605539.78926535 ### */, 'visual-edit-5f9835c3605539.78926535'); ?></a></li>
                        <li><a href="<?php echo get_link_reviews(); ?>"><?php echo T(/* ### visual-edit-5f9835c3605705.12924765 ### */'Отзывы'/* ### visual-edit-5f9835c3605705.12924765 ### */, 'visual-edit-5f9835c3605705.12924765'); ?></a></li>

                        <?php if (!auth_is_login()) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" style="color:red;"  data-toggle="dropdown">
                                    <?php echo T(/* ### visual-edit-5f9835c36057d1.61641315 ### */'Вход'/* ### visual-edit-5f9835c36057d1.61641315 ### */, 'visual-edit-5f9835c36057d1.61641315'); ?>
                                    &nbsp;
                                    <b  style='color:#77777F;' class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a  href="/login/"><?php echo T(/* ### visual-edit-5f9835c3605899.54644110 ### */'Войти'/* ### visual-edit-5f9835c3605899.54644110 ### */, 'visual-edit-5f9835c3605899.54644110'); ?></a></li>
                                    <li><a  href="/signup/"><?php echo T(/* ### visual-edit-5f9835c3605989.53984623 ### */'Регистрация'/* ### visual-edit-5f9835c3605989.53984623 ### */, 'visual-edit-5f9835c3605989.53984623'); ?></a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" style="color:red;" data-toggle="dropdown">
                                    <?php echo T(/* ### visual-edit-5f9835c3605a29.14245711 ### */'Кабинет'/* ### visual-edit-5f9835c3605a29.14245711 ### */, 'visual-edit-5f9835c3605a29.14245711'); ?>
                                    &nbsp;
                                    <b style='color:#77777F;' class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a  href="/user/"><?php echo escape($login);?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="/user/invest"><?php echo T(/* ### visual-edit-5f9835c3605ae1.63750517 ### */'Пополнения'/* ### visual-edit-5f9835c3605ae1.63750517 ### */, 'visual-edit-5f9835c3605ae1.63750517'); ?></a></li>
                                    <li><a href="/user/deposit"><?php echo T(/* ### visual-edit-5f9835c3605ba5.34389153 ### */'Депозиты'/* ### visual-edit-5f9835c3605ba5.34389153 ### */, 'visual-edit-5f9835c3605ba5.34389153'); ?></a></li>
                                    <li><a href="/user/payment"><?php echo T(/* ### visual-edit-5f9835c3605c77.04443170 ### */'Выплаты'/* ### visual-edit-5f9835c3605c77.04443170 ### */, 'visual-edit-5f9835c3605c77.04443170'); ?></a></li>
                                    <li><a href="/user/operations"><?php echo T(/* ### visual-edit-5f9835c3605d40.43059643 ### */'Операции'/* ### visual-edit-5f9835c3605d40.43059643 ### */, 'visual-edit-5f9835c3605d40.43059643'); ?></a></li>
                                    <li><a href="/user/banners"><?php echo T(/* ### visual-edit-5f9835c3605e25.68326945 ### */'Баннеры'/* ### visual-edit-5f9835c3605e25.68326945 ### */, 'visual-edit-5f9835c3605e25.68326945'); ?></a></li>
                                    <li><a href="/user/settings"><?php echo T(/* ### visual-edit-5f9835c3605ff7.15323646 ### */'Настройки'/* ### visual-edit-5f9835c3605ff7.15323646 ### */, 'visual-edit-5f9835c3605ff7.15323646'); ?></a></li>
                                    <li><a href="/user/ref"><?php echo T(/* ### visual-edit-5f9835c36060c0.55600691 ### */'Рефералы'/* ### visual-edit-5f9835c36060c0.55600691 ### */, 'visual-edit-5f9835c36060c0.55600691'); ?></a></li>
                                    <li><a href="/user/tickets"><?php echo T(/* ### visual-edit-5f9835c3606181.33461922 ### */'Поддержка'/* ### visual-edit-5f9835c3606181.33461922 ### */, 'visual-edit-5f9835c3606181.33461922'); ?></a></li>
                                    <?php if (auth_get_adg_link()) { ?>
                                        <li><a style="color: red;" href="/adg.php" target="_blank"><?php echo T(/* ### visual-edit-5f9835c3606261.39002832 ### */'Админка'/* ### visual-edit-5f9835c3606261.39002832 ### */, 'visual-edit-5f9835c3606261.39002832'); ?></a></li>
                                    <?php } ?>
                                    <li class="divider"></li>
                                    <li><a  href="/exit/"><?php echo T(/* ### visual-edit-5f9835c3606335.25487189 ### */'Выход'/* ### visual-edit-5f9835c3606335.25487189 ### */, 'visual-edit-5f9835c3606335.25487189'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>

                        <li>
                            <?php  echo get_language_flags('svg', 'top: 12px;'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
