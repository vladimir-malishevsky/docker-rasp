<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строительная фирма</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="" class="logo">
                    <img src="img/logo.png" alt="" class="logo__img">
                </a>
                <ul class="header__menu">
                    <li class="header__list">
                        <a class="header__link" href="#about">Чому ми?</a>
                    </li>
                    <li class="header__list">
                        <a class="header__link" href="#work">Наші роботи</a>
                    </li>
                    <li class="header__list">
                        <a class="header__link" href="#photo">Фото галерея</a>
                    </li>
                </ul>
                <div class="header__social">
                    <a class="header__social-link" href="//web.telegram.org" target="__Blank">
                        <img src="img/telegram.svg" alt="" class="header__social-img">
                    </a>
                    <a class="header__social-link" href="https://www.viber.com" target="__Blank">
                        <img src="img/vider.png" alt="" class="header__social-img">
                    </a>
                </div>
                <?php if(isset($_SESSION['login'])):?>
                    <span>Привіт, <?php echo $_SESSION['login']?></span>
                    <a href="logout.php" class="register">Вийти</a>
                <?php else:?>
                    <a href="register.php" class="register">Регістрація</a>
                    <a href="login.php" class="login">Логін</a>
                <?php endif?>
            </div>
        </div>
    </header>


    <section class="main" id="main">
        <div class="container">
            <div class="main__inner">
                <div class="main__text">
                    <h1 class="main__title">Виробляємо та встановлюємо будови різних видів
                        в Україні
                    </h1>
                    <p class="main__p">
                        Індивідуально під ваш запит збудуємо будинок, ресторан, лазню, альтанку, мангал або будь-яку іншу будівлю
                    </p>
                    <a class="main__btn" href="#work">Перейти до каталогу будинків</a>
                </div>
                <div class="main__photo">
                    <img src="img/main.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container container__about">
            <h2 class="about__title">Чому вибирають нас?</h2>
            <div class="about__inner">
                <div class="about__box">
                    <h4 class="about__subtitle img-1">
                        Ексклюзивний дизайн
                    </h4>
                    <p class="about__text">
                        Не має аналогів в Україні
                    </p>
                </div>
                <div class="about__box">
                    <h4 class="about__subtitle img-2">
                        Розробка моделі
                    </h4>
                    <p class="about__text">
                        Індивідуальної за допомогою 3D-візуалізації у нашому додатку
                    </p>
                </div>
                <div class="about__box">
                    <h4 class="about__subtitle img-3">
                        Сертифікати якості
                    </h4>
                    <p class="about__text">
                        Підтверджують наші матеріали та комплектуючі
                    </p>
                </div>
                <div class="about__box">
                    <h4 class="about__subtitle img-4">
                        Робота під ключ
                    </h4>
                    <p class="about__text">
                        У середньому за Х днів від встановлення фундаменту до здачі об'єкта в експлуатацію
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="work">
        <div class="container">
            <h2 class="work__title">Наші роботи</h2>
            <div class="work__inner">
                <div class="work__box">
                    <h4 class="work__subtitle">Каркасні будинки</h4>
                    <img class="work__img" src="img/work/1.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
                <div class="work__box">
                    <h4 class="work__subtitle">Будинки з клеєного бруса</h4>
                    <img class="work__img" src="img/work/2.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
                <div class="work__box">
                    <h4 class="work__subtitle">Будинки з колод</h4>
                    <img class="work__img" src="img/work/3.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
                <div class="work__box">
                    <h4 class="work__subtitle">Фахверкові будинки</h4>
                    <img class="work__img" src="img/work/4.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
                <div class="work__box">
                    <h4 class="work__subtitle">Альтанки</h4>
                    <img class="work__img" src="img/work/5.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
                <div class="work__box">
                    <h4 class="work__subtitle">Ремонт та оздоблення</h4>
                    <img class="work__img" src="img/work/6.png" alt="">
                    <button class="work__button">ЗАМОВИТИ</button>
                </div>
            </div>
        </div>
    </section>

    <section class="photo" id="photo">
        <div class="container">
            <h2 class="photo__title">Подивіться на готові будинк</h2>
            <div class="photo__inner">
                <img class="photo__img" src="img/photo/1.png" alt="">
                <img class="photo__img" src="img/photo/2.png" alt="">
                <img class="photo__img" src="img/photo/3.png" alt="">
                <img class="photo__img" src="img/photo/4.png" alt="">
                <img class="photo__img" src="img/photo/5.png" alt="">
                <img class="photo__img" src="img/photo/6.png" alt="">
            </div>
        </div>
    </section>

</body>

</html>