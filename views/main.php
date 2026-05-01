<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/private.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/email.css">
    <title><?= $this->title ?></title>
</head>

<body>
    <div class="container-fluid wrapper">
        <div class="row header">
            <div class=" col-sm-12 col-lg-4 logo">
                <h1>Морозов мебель</h1>
            </div>
            <div class=" col-sm-12 col-lg-8 menu ">
                <ul class="menu__list">
                    <li class="menu__item"><a class="menu__link" href="">Главная</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Контакты</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Доставка</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Help</a></li>
                    <li class="menu__item"><a class="menu__link" href="">Help</a></li>
                </ul>
            </div>
            <div class="col-12 message">
                <div class="message__number">89270160536 / 8(84656)27007</div>
                <p class="message__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae, nostrum?</p>
            </div>
        </div><!--header-->
        <div class="row content">
            <div class="col-lg-3 col-sm-12 saidbar">
                <nav class="menu-vertical">
                    <ul class="menu-vertical__list">
                        <li class="menu-vertical__item">
                            <button class="menu-vertical__toggle">Корпус</button>
                            <ul class="menu-vertical__sublist">
                                <li><a href="" class="menu-vertical__link">Шкафы</a></li>
                                <li><a href="" class="menu-vertical__link">Прихолдд</a></li>
                                <li><a href="" class="menu-vertical__link">Столы</a></li>
                                <li><a href="" class="menu-vertical__link">Комоды</a></li>
                            </ul>
                        </li>

                        <li class="menu-vertical__item">
                            <button class="menu-vertical__toggle">Корпус</button>
                            <ul class="menu-vertical__sublist">
                                <li><a href="" class="menu-vertical__link">Шкафы</a></li>
                                <li><a href="" class="menu-vertical__link">Прихолдд</a></li>
                                <li><a href="" class="menu-vertical__link">Столы</a></li>
                                <li><a href="" class="menu-vertical__link">Комоды</a></li>
                            </ul>
                        </li>

                        <li class="menu-vertical__item">
                            <button class="menu-vertical__toggle">Корпус</button>
                            <ul class="menu-vertical__sublist">
                                <li><a href="" class="menu-vertical__link">Шкафы</a></li>
                                <li><a href="" class="menu-vertical__link">Прихолдд</a></li>
                                <li><a href="" class="menu-vertical__link">Столы</a></li>
                                <li><a href="" class="menu-vertical__link">Комоды</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div><!--saidbar-->
            <div class="col-lg-9 col-sm-12 base">
                <?php include __DIR__ . $this->content . '.php' ?>
            </div><!--col-lg-8 col-sm-8 -->
        </div><!--row content-->

        <div class="row footer">
            <div class="col-lg-6 col-12 info">
                <ul class="info__list">
                    <li class="info__item">
                        <a class="info__link" href="">Политика приватности</a>
                    </li>
                    <li class="info__item">
                        <a class="info__link" href="">Написать email</a>
                    </li>
                    <li class="info__item">
                        <a class="info__link" href="">Помощь</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 social">
                <div class="footer__social">
                    <h3 class="social__title">Мы в соцсетях</h3>
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="ВКонтакте">
                                <span class="social__icon">VK</span>
                                ВКонтакте
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Telegram">
                                <span class="social__icon">TG</span>
                                Telegram
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="#" class="social__link" aria-label="Одноклассники">
                                <span class="social__icon">OK</span>
                                Одноклассники
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 prava">Все права защищены 2016- <?php echo date('Y') ?></div>
        </div><!--footer-->
    </div><!--wrapper-->


    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/myscript.js"></script>
</body>

</html>