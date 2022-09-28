<?php require_once(THEME_ROOT . '/blocks/dashboard/head.php'); ?>
<?php require_once(THEME_ROOT . '/blocks/dashboard/top.php'); ?>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->	  
        <div class="content-header">
            <h3>
                FAQ
            </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-dashboard"></i> FAQ</a></li>
            </ol>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-3"></div>
                
                <div class="col-md-6 col-12">
                    <div class="box">
                        <div class="box-body" style="overflow: auto;">
                            <h4>FAQ</h4>
                            
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Смарт контракт токена ARJ
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            https://bscscan.com/token/0x34d7b8f0560f2b0f609b0d555d5f6bd7d274a446
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Вывод средств
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Вывод средств (стейкинг и партнёрские вознаграждения) заказывается в пятницу. Срок обработки - до пяти банковских дней!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Покупка токена ARJ
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Минимальная сумма покупки токена ARJ - 1$. Минимальный вывод - 1 ARJ. Минимальная сумма стейкинга токена ARJ - эквивалент 50$.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                Документы
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <a href="https://switzlicense.ch/arj-fund.php" target="_blank">Перейти на страницу регистрации компании</a><br>
                                            <a href="<?= route('static/images/arj-fund.pdf') ?>" target="_blank">PDF</a><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
			    </div>
                
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>

<?php
    require_once(THEME_ROOT . "/blocks/dashboard/footer.php");
?>

