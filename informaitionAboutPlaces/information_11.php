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
        <img class="main-image-place" src="../static/images/restaurantsPlaces/highRestaurantBlack.png" alt="">
        <h1 class="name-place">Ресторан Vысота 22</h1>
        <p class="street-name-place">Менделеева 160/9</p>
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
                <li class="score-count-item"><p class="score-count-label">4,7</p></li>
                <li class="views-count-item"><p class="views-count-label">(1368 отзыва)</p></li>
            </ul>

            <p class="main-information-about-place">Vысота 22 — это ресторанный комплекс, состоящий из трех этажей, на каждом из которых создана своя атмосфера!</br></p>
            <p class="main-information-about-place" >У каждого зала своя история и настроение, которые подойдут для проведения любого мероприятия!</br></p>
            <p class="main-information-about-place">1 этаж комплекса выполнен в современном европейском стиле. Гостей встречает необычный интерьер заведения, с яркими принтами и лаконичными формами. Зал разделен на несколько зон, где можно собраться шумной компанией, поужинать в романтической уединенной обстановке или же провести тихий уютный вечер в кругу семьи.</br></p>
            <p class="main-information-about-place">Мы позаботились и о самых маленьких посетителях нашего ресторана и сделали детскую комнату, где ребенок может найти развлечение по душе.</p>
            <p class="main-information-about-place">2 этаж Vысоты 22 – это развлекательная площадка с собственной сценой, на которой каждую пятницу и субботу проходит выступление кавер групп.</p>
            <p class="main-information-about-place">3 этаж Vысоты 22 — идеальное место для проведения торжеств, пресс-конференций и других значимых мероприятий. Зеркальный зал вмещает до 150 персон. Витражные окна от пола до потолка, красивый вид, много света придадут вашему празднику ощущение воздушности и легкости.</p>
        </section>
    </main>
</body>
</html>