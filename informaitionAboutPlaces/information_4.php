<!DOCTYPE html>
<html lang="ru" class="page" >
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/resetStyles.css">
    <link rel="stylesheet" href="../static/informationAboutPlacesStyle.css">
    <script src="../scripts/addLovelyPlace.js"></script>
    <title>Поиск мест</title>
</head>
<body>
    <header class="headerPage" >
        <a href="../searchPage.php"><button class="arrow-back-page"></button></a>
        <img class="main-image-place" src="../static/images/parksPlaces/parkVictoryBlack.png" alt="">
        <h1 class="name-place">Парк Победы</h1>
        <p class="street-name-place">Комарова 7</p>
        <button class="button-heart" onclick="changeImage()"></button>
    </header>

    <main>
        <!-- <section class="chager-buttons"> -->
            <!-- <ul class="list-buttons-changer"> -->
                <!-- <li class="item-button-changer"><button class="button-with-information">Обзор</button></li> -->
                <!-- <li class="item-button-changer" ><button class="button-with-images">Фотографии</button></li>
                <li class="item-button-changer" ><button class="button-with-images">На карте</button></li> -->
            <!-- </ul> -->
        <!-- </section> -->

        <section class="all-information">
            <ul class="list-stars">
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIcon.png" alt=""></li>
                <li class="star-item"><img class="star-icon-item" src="../static/images/icons/starIconGrey.png" alt=""></li>
                <li class="score-count-item"><p class="score-count-label">4,8</p></li>
                <li class="views-count-item"><p class="views-count-label">(2558 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Парк Победы — мемориальный комплекс победы в Великой Отечественной войне, расположенный в районе Черниковка, что в северной части города Уфы. Здесь нет тех развлечений, которые обычно присутствуют в таких местах. На этой территории можно познакомиться с частицей прошлого нашей страны.</br></p>
            <p class="main-information-about-place" >В парке Победы столицы Башкортостана нашли место уникальные достопримечательности, посвященные победе в Великой Отечественной Войне. Здесь появились новые образцы военной техники: противотанковый ракетный комплекс, зенитная самоходная установка и многие другие. Рядом с каждой единицей боевой техники установлены специальные таблички с названиями, краткими описаниями и характеристиками.</br></p>
            <p class="main-information-about-place">В парке Победы расположен Памятник Миннигали Губайдуллину и Александру Матросову. Представляющий двойной памятник Героям Советского Союза он был открыт в 1980 году. Памятник состоит из столба высотой в 25 метров с бронзовыми скульптурными портретами Матросова и Губайдуллина. Выше находится изображение «Золотой Звезды», а у подножья — фигура солдата, за спиной которого взлетает плащ-палатка, что символизирует огонь войны.</br></p>
            <p class="main-information-about-place">Мемориал Вечного огня в парке расположился перед Памятником Миннигали Губайдуллину и Александру Матросову. Появился он в уфимском парке Победы в 1980 году в память о павших солдатах в годы Великой Отечественной войны. В великий праздник День Победы жители и гости города приходят к мемориалу возложить цветы.</p>
        </section>
    </main>
</body>
</html>