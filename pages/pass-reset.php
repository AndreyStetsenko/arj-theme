<?php require_once(THEME_ROOT . '/blocks/site/head.php'); ?>

<?php  
if ( isset($_GET['dvs']) ) :

function decode( $encoded, $key ) { // расшифровываем
    $strofsym = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM="; // Символы, с которых состоит base64-ключ
    $x = 0;
    while ( $x++ <= strlen( $strofsym ) ) { // Цикл
        $tmp = md5( md5( $key . $strofsym[$x - 1] ) . $key ); // Хеш, который соответствует символу, на который его заменят.
        $encoded = str_replace( $tmp[3] . $tmp[6] . $tmp[1] . $tmp[2], $strofsym[$x-1], $encoded ); // Заменяем №3,6,1,2 из хеша на символ
    }
    return base64_decode( $encoded ); // Вертаем расшифрованную строку
}

$pass = 'BELeR3SRcWx&lDB5PxmwHTAPZu*2aDCi4DqDn9okoE5hSU7q1B';

$emailGet = $_GET['dvs'];

$user_email = decode( $emailGet, $pass );
?>

<main class="nk-pages nk-pages-centered bg-theme">
    <div class="ath-container">
		<h4 class="text-center">
			<a href="/" class="ath-logo text-white pb-4 d-block">
				<img src="<?= route('static/images/logo.svg') ?>" alt="ARJ Fund">
			</a>
		</h4>
        <div class="ath-body">
            <h5 class="ath-heading title">
                Введите новый пароль
            </h5>
            
            <span class="d-block mb-3">Ваш email <b><?= $user_email ?></b></span>

            <?php echo flash_show('forgot'); ?>
            <form method="post" action="/handlers/restore.php">
                <?php echo form_init(); ?>

                <div class="field-item">
                    <div class="field-wrap">
                        <input
                                name="password"
                                type="password"
                                class="input-bordered"
                                placeholder="Новый пароль"
                                required autofocus>
                    </div>

                    <div class="field-wrap mt-3">
                        <input
                                name="password_repeat"
                                type="password"
                                class="input-bordered"
                                placeholder="Повторите пароль"
                                required>
                    </div>

                    <input type="hidden" name="email" value="<?= $user_email ?>">

                    <div class="field-wrap mt-2">
                        <div id="captcha_forgot" style="width: 304px; margin: auto;"></div>
                    </div>
                </div>

                <button class="btn btn-primary d-block w-100">
					Обновить пароль
				</button>
            </form>
        </div>
    </div>
</main>

<?php endif; ?>