<!doctype html>
<html lang="ru" class="mainPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/logicMainPage.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/resetStyles.css">
    <link rel="stylesheet" href="static/searchPageStyle.css">
    <title>Поиск мест</title>
</head>
<body>
<header class="header-search-page">
    <a href="#"><img class="image-user" src="static/images/icons/userIcon2.png" alt=""></a>
    <a href="#"><img class="notifications-icon" src="static/images/icons/notificationIconFull.png" alt=""></a>
    <h2 class="nameSearchPage">Поиск</h2>
    <form action="" method="get">
        <input name="s" placeholder="Поиск места..." type="search">
<!--        <button class="search-place-button" type="submit"><img class="search-icon-image" src="static/images/searchIcon.png" alt=""></button>-->
    </form>
</header>

<main>
    <section class="categories-chapter">
        <h2 class="label-text-categories">Фильтр по категориям</h2>
        <ul class="categories-list-items">
            <li><button class="categories-item hotel-button-filter" onclick="changeColorOnHotelButtonFilter()" type="submit"><p class="text-category hotel-text-button">Отели</p></button></li>
            <li><button class="categories-item entertainment-button-filter" onclick="changeColorOnEntertainmentButtonFilter()" type="submit"><p class="text-category entertainment-text-button">Развлечения</p></button></li>
            <li><button class="categories-item park-button-filter" onclick="changeColorOnParkButtonFilter()" type="submit"><p class="text-category park-text-button">Парки</p></button></li>
            <li><button class="categories-item malls-button-filter" onclick="changeColorOnMallButtonFilter()" type="submit"><p class="text-category malls-text-button">Торговые центры</p></button></li>
            <li><button class="categories-item restaurant-button-filter" onclick="changeColorOnRestaurantButtonFilter()" type="submit"><p class="text-category restaurant-text-button">Рестораны</p></button></li>
            <li><button class="categories-item theatre-button-filter" onclick="changeColorOnTheatreButtonFilter()" type="submit"><p class="text-category theatre-text-button">Театры</p></button></li>
            <li><button class="categories-item museum-button-filter" onclick="changeColorOnMuseumButtonFilter()" type="submit"><p class="text-category museum-text-button">Музеи</p></button></li>
            <li><button class="categories-item monument-button-filter" onclick="changeColorOnMomumentButtonFilter()" type="submit"><p class="text-category monument-text-button">Памятники</p></button></li>
        </ul>
    </section>

    <section class="all-places-searched-section">
        <?php require_once "backEnd/mainSectionWithPlaces.php" ?>
        <?php require_once "backEnd/hotelsCategory.php" ?>
        <?php require_once "backEnd/entertainmentCategory.php" ?>
        <?php require_once "backEnd/parkCategory.php" ?>
        <?php require_once "backEnd/mallCategory.php" ?>

</main>

<footer class="footer-main-page">
    <ul class="footer-list">
        <li class="footer-list-item"><a href="index.php" class="footer-button"><img class="footer-icon home-icon" src="static/images/icons/homeIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="searchPage.php" class="footer-button"><img class="footer-icon search-icon" src="static/images/icons/searchIcon_2_Green.png" alt=""></a></li>
        <!--<li class="footer-list-item"><a href="#"><img class="footer-icon" src="static/heartIcon.png" alt=""></a></li>-->
        <li class="footer-list-item"><a href="#" class="footer-button"><img class="footer-icon" src="static/images/icons/notificationIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="#" class="footer-button"><img class="footer-icon" src="static/images/icons/profileIcon.png" alt=""></a></li>
    </ul>
</footer>
</body>
</html>