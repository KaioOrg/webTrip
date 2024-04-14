<!doctype html>
<html lang="ru" class="mainPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/logicMainPage.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/resetStyles.css">
    <link rel="stylesheet" href="static/mainPageStyle.css">
    <title>Главная страница</title>
</head>
<body>
    <header>
        <a href="#"><img class="image-menu-bar" src="static/images/icons/menuBarIcon.png" alt=""></a>
        <a href="#"><img class="image-user" src="static/images/icons/userIcon2.png" alt=""></a>
        <h2 class="namePage">Отправляйтесь в путешествие вместе с нашим приложением</h2>
    </header>

    <main>
        <section>
            <h3 class="label-section-categories">Категории</h3>
            <ul class="categories">
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/parksIcon.png">Парки</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/entartainmentIcon2.png">Развлечения</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/hotelIcon.png">Отели</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/mallsIcon.png">Торговые центры</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/restaurantIcon2.png">Рестораны</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/theatreIconMain.png">Театры</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/museumIcon.png">Музеи</a></li>
                <li ><a class="category-item" href=""><img class="icon-category" src="static/images/icons/monumentIcon.png">Памятники</a></li>
            </ul>
        </section>

        <section class="hot-places">
            <h3 class="name-hot-places">Популярные места</h3>
            <a href="category-filters.php"><p class="text-see-all-places">Все</p></a>
            <div class="card-gradient">
            </div>
            <ul class="hot-places-list">
                <li class="hot-places-item">
                    <a href="#">
                        <div class="first-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Монумент Дружбы
                            </div>
                            <div class="score-text">
                                4,9
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="#">
                        <div class="second-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Памятник Славату Юлаеву
                            </div>
                            <div class="score-text">
                                5,0
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="#">
                        <div class="third-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Фонтан Семь девушек
                            </div>
                            <div class="score-text icon-loc-place">
                                4,8
                            </div>
                        </div>
                    </a>
                </li>
                <li class="hot-places-item">
                    <a href="#">
                        <div class="fourth-image-place">
                            <img class="image-place" src="" alt="">
                            <div class="text-name-place">
                                Гостиный двор
                                <br />
                            </div>
                            <div class="score-text">
                                4,6
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </main>

<footer class="footer-main-page">
    <ul class="footer-list">
        <li class="footer-list-item"><a href="index.php" class="footer-button"><img class="footer-icon home-icon" src="static/images/icons/homeIconGreen.png" alt=""></a></li>
        <li class="footer-list-item"><a href="searchPage.php" class="footer-button"><img class="footer-icon search-icon" src="static/images/icons/searchIcon2.png" alt=""></a></li>
        <!--<li class="footer-list-item"><a href="#"><img class="footer-icon" src="static/heartIcon.png" alt=""></a></li>-->
        <li class="footer-list-item"><a href="#" class="footer-button"><img class="footer-icon" src="static/images/icons/notificationIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="#" class="footer-button"><img class="footer-icon" src="static/images/icons/profileIcon.png" alt=""></a></li>
    </ul>
</footer>
</body>
</html>