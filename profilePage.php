<!doctype html>
<html lang="ru" class="mainPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="scripts/logicMainPage.js"></script>
    <script src="scripts/addLovelyPlace.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/resetStyles.css">
    <link rel="stylesheet" href="static/searchPageStyle.css">
    <link rel="stylesheet" href="static/profilePageStyle.css">
    <title>Профиль</title>
</head>
<body>
<header class="header-search-page">
    <h1 class="name-page">Профиль</h1>
    <img class="background-profile" src="static/images/icons/backgroundProfile.png" alt="">
    <img class="user-icon" src="static/images/icons/userIcon.png" alt="">
    <h4 class="name-user">user001</h4>
    <button class="edit-button">Редактировать</button>
    <div>
        <p class="about-user">Информация о себе</p>
    </div>
    <!-- <p>Ваше местоположение:  Уф</p> -->
    <p class="location">Ваше местоположение:   Уфа</p>
</header>

<main>
    <section class="liked-places">
        <p class="saved-places">Сохраненное</p>
        <p class="contained">Пусто</p>
    </section>
</main>

<footer class="footer-main-page">
    <ul class="footer-list">
        <li class="footer-list-item"><a href="index.php" class="footer-button"><img class="footer-icon home-icon" src="static/images/icons/homeIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="searchPage.php" class="footer-button"><img class="footer-icon search-icon" src="static/images/icons/searchIcon2.png" alt=""></a></li>
        <!--<li class="footer-list-item"><a href="#"><img class="footer-icon" src="static/heartIcon.png" alt=""></a></li>-->
        <li class="footer-list-item"><a href="notificationsPage.php" class="footer-button"><img class="footer-icon" src="static/images/icons/notificationIcon.png" alt=""></a></li>
        <li class="footer-list-item"><a href="profilePage.php" class="footer-button"><img class="footer-icon" src="static/images/icons/profileIconGreen.png" alt=""></a></li>
    </ul>
</footer>
</body>
</html>