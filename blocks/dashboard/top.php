<header class="main-header">
    <div class="inside-header">
        <div class="d-flex align-items-center logo-box justify-content-between">
            <a href="/" class="logo">
                <img src="<?= route('static/images/logo.svg') ?>" alt="ARJ Fund" style="width: 75px">
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <div class="navbar-custom-menu r-side ml-auto">
                <ul class="nav navbar-nav">
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                            <i class="fa fa-gear"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-img" style="background-image: url(<?= route('static/arj/dashboard/images/user-info.jpg') ?>)" data-overlay="3">
                                <div class="flexbox align-self-center">
                                    <span class="text-white font-size-16"><?= format_currency(user_balance($login), get_currency()) ?> ARJ</span>
                                    <h4 class="user-name align-self-center">
                                        <span><?= escape($login); ?></span><br>
                                    </h4>
                                </div>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <a class="dropdown-item" href="/user/invest/"><i class="ion ion-bag"></i> Мой баланс</a>
                                <a class="dropdown-item" href="/user/settings/"><i class="ion ion-settings"></i> Настройки аккаунта</a>
                                <?php if (auth_get_adg_link()) : ?>
                                <a class="dropdown-item" href="/adg.php" target="_blank"><i class="ion ion-person"></i> Админ панель</a>
                                <?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/exit/"><i class="ion-log-out"></i> Выход</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
        <li><a href="/user/"><i class="fa-solid fa-dashboard"></i><span class="path1"></span><span class="path2"></span></i>Главная</a></li>
        <li><a href="/user/invest/"><i class="fa-solid fa-money-bill-1-wave"></i><span class="path1"></span><span class="path2"></span></i>Покупка</a></li>
        <li><a href="/user/deposit/"><i class="fa-solid fa-chart-line"></i><span class="path1"></span><span class="path2"></span></i>Стейкинг</a></li>
        <li><a href="/user/payment/"><i class="fa-solid fa-comments-dollar"></i><span class="path1"></span><span class="path2"></span></i>Кошелёк</a></li>
        <li><a href="/user/operations/"><i class="fa-solid fa-gear"></i><span class="path1"></span><span class="path2"></span></i>Операции</a></li>
        <li><a href="/user/ref/"><i class="fa-solid fa-users"></i><span class="path1"></span><span class="path2"></span></i>Рефералы</a></li>
        <li><a href="/user/faq/"><i class="fa-solid fa-users"></i><span class="path1"></span><span class="path2"></span></i>FAQ</a></li>
        <li><a href="https://t.me/ArjFund" target="_blank"><i class="fa-brands fa-telegram"><span class="path1"></span><span class="path2"></span></i>Поддержка</a></li>
    </ul>
</nav>